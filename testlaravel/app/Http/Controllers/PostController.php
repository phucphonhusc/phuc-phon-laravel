<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;

class PostController extends Controller
{
    public function viewlogin(){
        return view('admin.post.login');
    }
    public function login(Request $request){
        $user_name= $request->user_name;
        $user_pass = $request->user_pass;

        $result = Users::where('user_name', $user_name)->where('user_pass', $user_pass)->first();
        if($result){
            $request->session()->put('user_id', $result->user_id);
    
            return redirect()->route('post.index');
        }
        else{
            return redirect()->route('admin.login');
        }
    }
    public function index(){
        $posts = Posts::all();
        return view('admin.post.index',compact('posts'));
    }
    public function create(){
        $user_id = Session::get('user_id');
        return view('admin.post.create', compact('user_id'));
    }
    public function store(Request $request){
        
        Posts::create([
            'post_title' => $request->post_title,
            'post_desc' => $request->post_desc,
            'user_id' => Session::get('user_id')
        ]);
        return redirect()->route('post.index');
    }
    public function edit($id){
        $post_id = Posts::find($id);
        return view('admin.post.edit', compact('post_id'));
    }
    public function update($id, Request $request){
        Posts::find($id)->update([
            'post_title' => $request->post_title,
            'post_desc' =>$request->post_desc,
            
        ]);
        return redirect()->route('post.index');
    }
    public function delete($id){
        Posts::find($id)->delete();
        return redirect()->back();
    }
}
