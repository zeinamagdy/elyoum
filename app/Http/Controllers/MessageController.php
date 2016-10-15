<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$messages = Message::orderBy('id', 'desc')->paginate(10);

		return view('messages.index', compact('messages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('messages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$message = new Message();

		$message->user_name = $request->input("user_name");
        $message->email = $request->input("email");
        $message->telephon = $request->input("telephon");
        $message->body = $request->input("body");

		$message->save();
		return view('contact');
		// return redirect()->route('contact')->with('message', 'Message sent successfully.');


		// return redirect()->route('messages.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$message = Message::findOrFail($id);

		return view('messages.show', compact('message'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$message = Message::findOrFail($id);

		return view('messages.edit', compact('message'));
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
		$message = Message::findOrFail($id);

		$message->user_name = $request->input("user_name");
        $message->email = $request->input("email");
        $message->telephon = $request->input("telephon");
        $message->body = $request->input("body");

		$message->save();

		return redirect()->route('messages.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$message = Message::findOrFail($id);
		$message->delete();

		return redirect()->route('messages.index')->with('message', 'Item deleted successfully.');
	}

}
