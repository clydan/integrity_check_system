<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Student;
use App\Models\Institution;

class PDFController extends Controller
{
    public function studentReports($id){
        $student = Student::where('id', $id)->first();
        $reports = Report::all()->where('student_id', $id);

        $pdf = PDF::loadView('dashboard.reports.generatepdf', compact('reports', 'student'));
        return $pdf->download('reports.pdf');
    }
}
