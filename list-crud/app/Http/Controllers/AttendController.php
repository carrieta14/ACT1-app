<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Course;
use App\Models\Estudent;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Session;

class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudents = Estudent::all();
        $courses = Course::all();
        $attends = Attend::paginate(5);
             return view('attend.index', compact('estudents', 'courses'))
                                ->with('attends', $attends);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $estudents = Estudent::all();
        return view('attend.form',  compact('estudents', 'courses'));
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
            'course_id' => 'required',
            'estudent_id' => 'required'
        ]);

        $course_id = $request->input("course_id");
        $estudent_id = $request->input("estudent_id");

        $new_attend = new Attend;

        $new_attend->estudent_id = $estudent_id;
        $new_attend->course_id = $course_id;
        $new_attend->save();

        Session::flash('Mensaje', 'Registro Ha Sido Creado Con Exito');

        return redirect()->route('attend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function show(Attend $attend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function edit(Attend $attend)
    {
        $courses = Course::all();
        $estudents = Estudent::all();
        return view('attend.form', compact('estudents', 'courses'))
                    ->with('attend', $attend);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attend $attend)
    {
       
        $attend->estudent_id = $request['estudent_id'];
        $attend->course_id = $request['course_id'];
        $attend->save();

        Session::flash('Mensaje', 'Registro Ha Sido Editado Con Exito');

        return redirect()->route('attend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attend $attend)
    {
        $attend->delete();
        Session::flash('Mensaje', 'Registro Ha Sido Eliminado Con Exito');

        return redirect()->route('attend.index');
    }
}
