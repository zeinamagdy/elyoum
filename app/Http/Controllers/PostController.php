<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;



use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(10);

		return view('posts.index', compact('posts'));

	}
	public function news()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(10);

		return view('news', compact('posts'));
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$post = new Post();
		$post->body = $request->input("body");
		$image = $request->file('image')->getClientOriginalName(); 
		$image_extension = $request->file('image')->getClientOriginalExtension();
		$image_new_name = md5(microtime(true) . ".-^");	
		$temp_file = base_path() . '/public/upload/posts'.strtolower($image_new_name . '_temp.' . $image_extension);
		$request->file('image')
			->move( base_path() . '/public/upload/posts', strtolower($image_new_name . '_temp.' . $image_extension) );

		$post->image=strtolower($image_new_name . '_temp.' . $image_extension);
		$post->save();

		return redirect()->route('posts.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return view('posts.show', compact('post'));
	}
	public function singlePost($id)
	{
		$post = Post::findOrFail($id);

		return view('news_dietails', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);

		return view('posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$post = Post::findOrFail($id);

		$post->body = $request->input("body");
        $post->image = $request->input("image");

		$post->save();

		return redirect()->route('posts.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();

		return redirect()->route('posts.index')->with('message', 'Item deleted successfully.');
	}

}
