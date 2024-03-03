<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('AddPost');
    }
    public function allPost(){
        $posts=Post::latest()->paginate(5);
        return view('AllPost',compact('posts'));
    }
    public function storePost(Request $request){

        // VALIDETION

        $request-> validate([
            'title'=> 'required|min:5',
            'detail'=> 'required|max:100'
        ]);
                //STORE DATA

                $post = new Post();
                $post->title= $request->title;
                $post->detail= $request->detail;
                $post->author= $request->author;
                $post->save();
                return back()-> with('msg', 'Shob thik thak ase😊❤');
        }

        function deletePost($id){
            $post= Post::findOrfail($id);
            $post->delete();
            return back();
        }
        function editPost($id){
            $post=Post::find($id);
            return view('EditPost',compact('post')) ;
        }
    
}
