<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostsController extends Controller
{
    public function index()
    {
       
        $posts = Post::all(); //fetch all blog posts from DB

        if(Auth::user()->role == '0') 
        {
            return view('student.index', [
                'posts' => $posts,]);
        }
        else if(Auth::user()->role == '2'){
            return view('lecturer.announce.index', [
                'posts' => $posts,]);           
        }
       
       
    
}
    

public function create()
{
    return view('lecturer.announce.create');
}
   
public function store(Request $request)
{
    $newPost = Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'user_id' => auth()->user()->id,
    ]);

    return redirect('lecturer');
}


    public function show($id)
    {
    
        $posts = Post::find($id);
        if(Auth::user()->role == '2') // admin -> 1
        {
            return view('lecturer.announce.show', [
                'posts' => $posts,]);
        }
        else if(Auth::user()->role == '0'){
            return view('student.show', [
                'posts' => $posts,]);           
        }
       
    }

    
    public function edit($id){
        $posts = Post::find($id);
        return view('lecturer.announce.edit', compact('posts'));

    }

    
    public function update(Request $request, $id)
    {
        $posts= Post::find($id);

        $posts -> title = $request -> title;
        $posts -> body = $request -> body;

        $posts->save();

        return redirect('lecturer/' . $posts->id);
    }

    
    public function destroy($id){
        DB::delete('delete from posts where id = ?',[$id]);
        return redirect('/lecturer')->with('status','Announcement deleted successfully');
    }
}
