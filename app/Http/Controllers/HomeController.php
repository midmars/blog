<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use View;
use Input;

class HomeController extends BaseController{

	public function index(){
		$posts= Post::all();
		//model 呼叫
		return View:: make('site.home')
				->with('title','Myblog')
				->with('posts',$posts);

	}
	public function create()
	{
    	return View::make('site.create')
            	->with('title', '新增文章');
	}
	public function store(){
		$input=Input::all();

		$post= new Post;
		$post->title=$input['title'];
		$post->content=$input['content'];
		$post->save();

		return Redirect::to('post');
	}
	public function show($id){
		$post=Post::find($id);

		return View::make('site.show')
				->with('title','My blog -'.$post->title)
				->with('post',$post);
	}
	public function edit($id){
		$post=Post::find($id);

		return View::make('site.edit')
				->with('title','編輯文章')
				->with('post',$post);
	}
	public function update($id){
			$input=Input::all();

			$post=Post::find($id);
			$post->title = $input['title'];
			$post->content = $input['content'];
			$post->save();

			return Redirect::to('post');
	}
	public function delete($id){
		$delete=Post::find($id);
		$delete->delete();

		return Redirect::to('post');
	}
}