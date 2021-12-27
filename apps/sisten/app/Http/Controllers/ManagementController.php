<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    public function index(Request $request)
    {
        
        
        return view('management.index',compact ('management'));
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:management,name',
            'start_date' => 'required',
            'end_date' => 'required',
            'minimum_score' => 'required',
            'numbers_of_students' => 'required',
            'description' => 'required',
        ]);
        
        \DB::transaction(function() use( $request )
        {
       Management::create($request->all());
        });
        return redirect('/management')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        
        $vacanciesmanagement = \App\Models\Management::find($id);
        return view('management/edit', ['management' =>$management]);
    }
    public function update(Request $request,$id)
    {
        $management = \App\Models\Management::find($id);
        $management->update($request->all());
       
        return redirect('/management')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $management = \App\Models\Management::find($id);
        $management->delete();
       
        return redirect('/management')->with('sukses','Data berhasil dihapus');
    }
}