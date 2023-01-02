<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use DB;

class BlogPostController extends Controller
{
    public function index()
{
	$posts = BlogPost::all(); //fetch all blog posts from DB

            if(Auth::user()->role == '1') // admin -> 1
            {
                return view('admin.blog.index', [
                    'posts' => $posts,]);
            }
            else if(Auth::user()->role == '2'){
                return view('lecturer.index', [
                    'posts' => $posts,]);           
            }
           
            else if(Auth::user()->role== '3'){
                return view('finance.index', [
                    'posts' => $posts,]);
            }
        
}


public function show( $id)
{

    $posts = BlogPost::find($id);
    if(Auth::user()->role == '1') // admin -> 1
    {
        return view('admin.blog.show', [
            'posts' => $posts,]);
    }
    else if(Auth::user()->role == '2'){
        return view('lecturer.show', [
            'posts' => $posts,]);           
    }
   
    else if(Auth::user()->role== '3'){
        return view('finance.show', [
            'posts' => $posts,]);
    }
//returns the view with the post
}


public function create()
    {
        return view('admin.blog.create');
    }


    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('blog');
    }
  



    public function edit($id){
        $posts = BlogPost::find($id);
        return view('admin.blog.edit', compact('posts'));

    }

    public function update(Request $request, $id)
    {
        $posts= BlogPost::find($id);

        $posts -> title = $request -> title;
        $posts -> body = $request -> body;

        $posts->save();

        return redirect('blog/' . $posts->id);
    }

    public function destroy($id){
        DB::delete('delete from blog_posts where id = ?',[$id]);
        return redirect('/blog')->with('status','Blog deleted successfully');
    }
}

//    return redirect('admin/viewcourse')->with('status','Course details edited successfully')