<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddContentRequest;
use App\Http\Requests\EditContentRequest;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->admin == 1) {
            $contents = Content::orderBy('number', 'asc')->get();
            return view('admin.index', ['contents' => $contents]);
        } else {
            return redirect()->back();
        }
    }

    public function addContent(AddContentRequest $request)
    {
        $number = $request->selector;


        if ($request->selector == 'last') {
            $last = Content::orderBy('number', 'desc')->take(1)->get();
            if ($last->isEmpty()) {
                $number = 1;
            } else {
                foreach ($last as $item) {
                    $number = ++$item->number;

                }
            }
        } else {
            $content = Content::having('number', '>=', $request->selector)->get();
            if (!$content->isEmpty()) {

                foreach ($content as $item) {
                    $item->number = ++$item->number;
                    $item->save();
                }
            }

        }

        $path = '';

        if(request()->file('img')){
            $path = request()->file('img')->store('uploads/','public');
        }

        Content::create([
            'name' => $request->name,
            'content' => $request['content'],
            'number' => $number,
            'path' => $path,
        ]);
        return redirect(route('admin'))->with('success', 'Вы успешно добавили главу');
    }

    public function delAdmin($id)
    {
        if (Auth::user()->admin == 1) {
            $delcontent = Content::find($id);
            $contents = Content::having('number', '>=', $delcontent->number)->get();
            if (!$contents->isEmpty()) {
                foreach ($contents as $content) {
                    $content->number = --$content->number;
                    $content->save();
                }
            }


            $delcontent->delete();
            return redirect()->back()->with('success', 'Вы успешно удалили главу');
        } else {
            return redirect()->back();
        }

    }

    public function editAdmin($id)
    {
        $content = Content::find($id);
        return view('admin.edit', ['content' => $content]);
    }

    public function editAdminPost(EditContentRequest $request)
    {
        if (Auth::user()->admin == 1) {
            $content = Content::where('number', $request->number)->get();
            foreach ($content as $item) {

                $item->name = $request->name;
                $item->content = $request['content'];
                $item->save();

            }

            return redirect(route('contents'))->with('success', 'Вы успешно изменили главу курса');
        }
        else{
            return redirect()->back();
        }
    }
}
