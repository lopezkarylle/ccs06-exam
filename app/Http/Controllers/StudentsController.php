<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageScore($grade1, $grade2)
    {
        $average = ($grade1 + $grade2) / 2;
        return round($average, 2);
    }

    protected function showRemarks($average){
        $remark;
        if($average>=75){
            $remark = "PASSED";
            return $remark;
        }
        else{
            $remark = "FAILED";
            return $remark;
        }
    }

    public function computeGrade(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageScore($request->s1_attempt1, $request->s1_attempt2);
        $s2_average = $this->computeAverageScore($request->s2_attempt1, $request->s2_attempt2);
        $s3_average = $this->computeAverageScore($request->s3_attempt1, $request->s3_attempt2);
        $s4_average = $this->computeAverageScore($request->s4_attempt1, $request->s4_attempt2);
        $s5_average = $this->computeAverageScore($request->s5_attempt1, $request->s5_attempt2);

        $s1_remark = $this->showRemarks($s1_average);
        $s2_remark = $this->showRemarks($s2_average);
        $s3_remark = $this->showRemarks($s3_average);
        $s4_remark = $this->showRemarks($s4_average);
        $s5_remark = $this->showRemarks($s5_average);

        return view('average', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // Student 1 attempts
            's1_attempt1' => $request->s1_attempt1,
            's1_attempt2' => $request->s1_attempt2,
            's1_average' => $s1_average,
            's1_remark' => $s1_remark,
            // Student 2 attempts
            's2_attempt1' => $request->s2_attempt1,
            's2_attempt2' => $request->s2_attempt2,
            's2_average' => $s2_average,
            's2_remark' => $s2_remark,
            // Student 3 attempts
            's3_attempt1' => $request->s3_attempt1,
            's3_attempt2' => $request->s3_attempt2,
            's3_average' => $s3_average,
            's3_remark' => $s3_remark,
            // Student 4 attempts
            's4_attempt1' => $request->s4_attempt1,
            's4_attempt2' => $request->s4_attempt2,
            's4_average' => $s4_average,
            's4_remark' => $s4_remark,
            // Student 5 attempts
            's5_attempt1' => $request->s5_attempt1,
            's5_attempt2' => $request->s5_attempt2,
            's5_average' => $s5_average,
            's5_remark' => $s5_remark
        ]);
    }
}
