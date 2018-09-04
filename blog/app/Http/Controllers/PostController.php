<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;




class PostController extends Controller
{
 /**
 * 
 * @return Response
 */
    public function showposts(){
        return view('Posts/showposts', ['posts' => Post::all()]);
    }
    

    /**
 * 
 * 
 * @return Response
 */

public function createposts(){
    
        return view('Posts/createposts');
    
    
}
/**
 * 
 * @param Request $request
 * @return Response
 */

    public function storeposts(Request $request){
        
             
            
            $post;
            if($request->has('id')){
                $post = Post::find($request->id);
                $post->title = $request->title;
                $post->content = $request->content;
                $post->author = $request->author;
            } else {
                $post = new Post;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->author = $request->author;
            }
            $post->save();
            return redirect('posts');
    }

    /**
     * @param int $id
     * @return Response
     */
    public function editposts($id){
        return view('Posts/editposts', ['post' => Post::findOrFail($id)]);
    }

    /**
     * @param int $id
     * @return Response
     */
    public function removeposts($id){
        Post::destroy($id);
        return redirect('posts');
    }
    

}


