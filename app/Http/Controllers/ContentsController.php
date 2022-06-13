<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentsController extends Controller
{

    public function index(){
        $contents = Content::orderBy('number' , 'asc')->get();
        return view('contents.index' , ['contents' => $contents]);
    }

    public function oneContent($id){

        $content = Content::find($id);

        return view('contents.one-content' , ['content' => $content]);
    }
}
