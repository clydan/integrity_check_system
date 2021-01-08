<?php

namespace App\Http\Controllers;

use Barryvhd\DomPDF\PDF;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Student;
use App\Models\Institution;

class PDFController extends Controller
{
    public function studentReports($id){
        $student = Student::where('id', $id)->first();
        $reports = $student->reports()->get()-all();

        $pdf = PDF::loadView('dashboard.reports.generatepdf', compact('reports', 'student'));
        return $pdf->download('reports.pdf');
    }
}
