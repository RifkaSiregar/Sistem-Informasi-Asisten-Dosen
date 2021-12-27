<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogActivity;
use App\Models\User;
use App\Exports\UserLogActivityExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class UserLogActivityController extends Controller
{
    public function index(Request $request)
    {
        $i = 1;
        $activities = \App\Models\UserLogActivity::orderBy('created_at', 'DESC')->get();

        return view('userlogactivity.index', compact('activities', 'i'));
    }

    public function create($message)
    {
        $user = User::where('registration_number', session('user_id'))->first();
        UserLogActivity::create([
            'initial'=> $user->initial,
            'activity' => $message,
        ]);
    }

    public function event($message, $user_id)
    {
        $user = User::where('id', $user_id)->first();
        UserLogActivity::create([
            'initial'=> $user->initial,
            'activity' => $message,
        ]);
    }

    public function delete($id)
    {
        $activities = \App\Models\UserLogActivity::find($id);
        $activities->delete();
        return redirect('/logactivities')->with('sukses', 'Data berhasil dihapus');
    }

    public function exportExcel()
    {
        return Excel::download(new UserLogActivityExport, 'UserLogActivity.xlsx');
    }
    public function exportPdf()
    {
        $activities = \App\Models\UserLogActivity::all();
        $pdf = PDF::LoadView('export.userlogactivitypdf', ['activities' => $activities]);
        return $pdf->download('UserLogActivity.pdf');
    }
}
