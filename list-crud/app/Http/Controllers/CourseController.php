<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Session;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $courses = Course::paginate(5);
             return view('course.index')
                                ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('course.form',  compact('teachers'));
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
            'name' => 'required|max:50|alpha',
            'hours' => 'required|max:4|min:2|integer',
            'level' => 'required|max:10|min:1|integer',
            'teacher_id' => 'required',
        ]);
        $name = $request->input("name");
        $hours = $request->input("hours");
        $level = $request->input("level");
        $teacher_id = $request->input("teacher_id");

        $new_course = new Course;
        
        $new_course->name = $name;
        $new_course->hours = $hours;
        $new_course->level = $level;
        $new_course->teacher_id = $teacher_id;
        $new_course->save();

        Session::flash('Mensaje', 'Registro Ha Sido Creado Con Exito');

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $teachers = Teacher::all();
        return view('course.form', compact('teachers'))
                    ->with('course', $course);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|max:15',
        ]);

        $course->name = $request['name'];
        $course->level = $request['level'];
        $course->hours = $request['hours'];
        $course->teacher_id = $request['teacher_id'];
        $course->save();

        Session::flash('Mensaje', 'Registro Ha Sido Editado Con Exito');

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        Session::flash('Mensaje', 'Registro Ha Sido Eliminado Con Exito');

        return redirect()->route('course.index');
    }
}
