<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function changePassword(EditPasswordRequest $request){
        $user = User::find(Auth::id());
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8|confirmed',
            ]);
            $user->password = Hash::make($request->password);


            $user->save();
        }

        return redirect()->back()->with('success' , 'Данные успешно изменены');
    }
}
