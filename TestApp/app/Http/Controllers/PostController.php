<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('AddPost');
    }
    public function allPost(){
        return view('AllPost');
    }
    public function storePost(Request $request){
        $request-> validate([
            'title'=> 'required|min:5',
            'detail'=> 'required|max:10'
        ]);
        }
    
}
