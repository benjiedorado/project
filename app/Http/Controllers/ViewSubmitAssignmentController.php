<?php

namespace App\Http\Controllers;

use App\Models\StudentAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ViewSubmitAssignmentController extends Controller
{
    public function index(){
//        $query = mysqli_query($conn,"select * FROM student_assignment
//										LEFT JOIN student on student.student_id  = student_assignment.student_id
//										where assignment_id = '$post_id'  order by assignment_fdatein DESC")or die(mysqli_error());
//        while($row = mysqli_fetch_array($query)){
//            $id  = $row['student_assignment_id'];



    }

    public  function viewsubmitwork($assignment_id){
        $id = $assignment_id;
        $query = StudentAssignment::select('student_assignment.student_id')
            ->leftJoin('student','student.student_id','=','student_assignment.student_id')
            ->where('student_assignment.assignment_id','=',$id)
            ->select('student.student_id','student_assignment.fname','student.firstname','student.lastname','student_assignment.assignment_id',
             'student_assignment.grade')
         ->get();


        return view('viewsubmitwork',compact('query'));
    }

    public function downloadwork($fname){

        return Storage::download($fname);

    }
    public function storeGrade(Request $request,$assignment_id){
        DB::table('student_assignment')
            ->where('assignment_id',$assignment_id)
            ->update(['grade' => $request->input('grade')]);
        return back()->with('grade','Grade Submit Successfully!');
    }


}
