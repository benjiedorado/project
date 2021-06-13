<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.index',compact('subjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjects = new Subject;
        $subjects->subject_code =  $request-> input('subject_code');
        $subjects->subject_title =  $request-> input('subject_title');
        $subjects->unit =  $request-> input('units');
        $subjects->description =  $request-> input('description');
        $subjects->save();
        return redirect()->route('subjects.index');
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  Subject  $subject
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Subject $subject)
//    {
//        return view('subjects.edit',compact('subject'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Subject $subject
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Subject $subject )
    {
        $subject->update($request->all());

        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::findOrfail($id);
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
