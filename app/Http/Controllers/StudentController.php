<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=DB::table('students')
        ->get();
return view('students.index',['students'=>$students]); }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:255',]);
        DB::table('students')->insert([
            'index'=>$request->index,
            'name'=>$request->name,
            'lastName'=>$request->lastName,
            'BDate'=>$request->BDate,
            'JMBG'=>$request->JMBG,
            'address'=>$request->address,
            'city'=>$request->city,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'email'=>$request->email,




        ]);
        return redirect()->route('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $students=DB::table('students')
        ->where('id',$id)
        ->get();
        return view('students.edit',['students'=>$students]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'name'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',

        ]);
        $update_query=DB::table('students')
        ->where('id', $id)
        ->update([
            'index'=>$request->index,
            'name'=>$request->name,
            'lastName'=>$request->lastName,
            'BDate'=>$request->BDate,
            'JMBG'=>$request->JMBG,
            'address'=>$request->address,
            'city'=>$request->city,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'email'=>$request->email,



        ]);
        return redirect()->route('students');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        Student::destroy($id);
        return redirect()->route('students');
    }
}
