<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderby('id')->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'date' => 'required',
            'grade' => 'required']);
        
            
         Student::create($request->all());

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Students::findOrFail($id);
    return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $students = Student::findOrFail($id);
       return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $students
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $students = Student::findOrFail($id);

        $students->name = request('name');
        $students->subject = request('subject');
        $students->date = request('date');
        $students->grade = request('grade');

        $students->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Student::findOrFail($id)->delete();
        return redirect('/students');
    }
}


































/*class HomeController extends Controller {

	public function read() {
		$student = Student::all();
		$array = array('student' => $student );

		return view('home', $array);
	}

	public function add() 
	{
		return view('add');
	}
	

}