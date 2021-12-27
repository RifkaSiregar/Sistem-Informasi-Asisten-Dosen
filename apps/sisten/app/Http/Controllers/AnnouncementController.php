<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Vacancy;
use App\Models\Course;
use App\Models\User;
use PDF;

class AnnouncementController extends Controller
{
    public function show()
    {
        $passed_applicant = DB::table('application')
            ->where('application.decision', '=', 1)
            ->join('user', 'application.participant_registration_number', '=', 'user.registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('application.*', 'user.*', 'vacancy.*', 'course.*', 'semester.class_name')
            ->get();

        return view('announcement.index', compact('passed_applicant'));
    }

    public function exportPdf()
    {
        $announcement = \App\Models\Application::all();
        $pdf = PDF::LoadView('export.announcementpdf', ['announcement' => $announcement]);
        return $pdf->download('announcement.pdf');
    }

    public function detail($id)
    {
        $data = DB::table('application')
            ->where('applicant_number', '=', $id)
            ->join('user', 'application.participant_registration_number', '=', 'user.registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'vacancy.course_code', '=', 'course.course_code')
            ->select('application.*', 'user.*', 'vacancy.*', 'course.*')
            ->get();

        return view('announcement.detail', compact('data'));
    }
}
