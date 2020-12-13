<?php

namespace App\Http\Controllers;



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
}
