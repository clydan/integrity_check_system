<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\User;
use App\Models\Report;
use App\Models\Student;

class UtilitiesController extends Controller
{
    public function institutionStudents(Institution $institution, Request $request){
        dd($institution);
    }

    public function usersStudents(){
        $thisUser = auth()->user();
        $usersInstitutionId = $thisUser->Institution_id;
        $institution = Institution::where('id', $usersInstitutionId)->first();
        $thisUsersStudents = $institution->students->all();

        return view('dashboard.students.yourstudents')->with([
            'thisUsersStudents' => $thisUsersStudents,
            'institution' => $institution

        ]);
    }

    public function createReport($id){
        $student = Student::where('id', $id)->first();
        return view('dashboard.reports.create')->with('student', $student);
    }

    public function schoolsStudents($id){
        $school = Institution::where('id', $id)->first();
        $students = $school->students()->get()->all();
        return view('dashboard.students.school-list')->with('students', $students);
    }

    public function showReport($id){
        $student = Student::where('id', $id)->first();
        $reports = $student->reports()->get()->all();

        return view('dashboard.reports.student-reports')->with('reports', $reports);
    }

    public function showReportForSchools($id){
        $school = Institution::where('id', $id)->first();
        $reports = $student->reports()->get()->all();

        return view('dashboard.reports.student-reports')->with('reports', $reports);
    }

    public function unconfirmedReports(){
        $unconfirmed = Report::where('confirmation_status', 0)->get()->all();
        return view('dashboard.reports.verify-reports')->with('unconfirmed', $unconfirmed);   
    }

    public function confirmVerification($id, Request $request){
        $report = Report::where('id', $id)->first();
        $data = [
            'id' => $report->id,
            'student_id' => $report->student_id,
            'title' => $report->title,
            'offence' => $report->offence,
            'confirmation_status' => request('confirmation_status'),
        ];

        Report::where('id', $id)->update($data);

        return redirect()->back();
    }
}
