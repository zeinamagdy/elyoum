<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::orderBy('id', 'desc')->paginate(10);

		return view('employees.index', compact('employees'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employees.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$employee = new Employee();

		$employee->employee_name = $request->input("employee_name");
        // $employee->age = $request->input("age");
        $employee->collage = $request->input("collage");
        // $employee->image = $request->input("image");
		$image = $request->file('image')->getClientOriginalName(); 
		$image_extension = $request->file('image')->getClientOriginalExtension();
		$image_new_name = md5(microtime(true) . ".-^");	
		$temp_file = base_path() . '/public/upload/employees'.strtolower($image_new_name . '_emp.' . $image_extension);
		$request->file('image')
			->move( base_path() . '/public/upload/employees', strtolower($image_new_name . '_emp.' . $image_extension) );

		$employee->image=strtolower($image_new_name . '_emp.' . $image_extension);
		

		$employee->save();

		return redirect()->route('employees.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee = Employee::findOrFail($id);

		return view('employees.show', compact('employee'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = Employee::findOrFail($id);

		return view('employees.edit', compact('employee'));
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
		$employee = Employee::findOrFail($id);

		$employee->employee_name = $request->input("employee_name");
        $employee->age = $request->input("age");
        $employee->collage = $request->input("collage");
        $employee->image = $request->input("image");

		$employee->save();

		return redirect()->route('employees.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee = Employee::findOrFail($id);
		$employee->delete();

		return redirect()->route('employees.index')->with('message', 'Item deleted successfully.');
	}

}
