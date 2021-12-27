<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use DataTables;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status) {
                        return '<span class="badge badge-primary">Active</span>';
                    } else {
                        return '<span class="badge badge-danger">Inactive</span>';
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('status') == 'active' || $request->get('status') == 'inactive') {
                        $instance->where('status', $request->get('status'));
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function ($w) use ($request) {
                            $search = $request->get('search');
                            $w->orWhere('initial', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('registration_number', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['status'])
                ->make(true);
        }

        return view('usermanagements.index');
    }
    public function edit($id)
    {
        $users = \App\Models\User::find($id);
        $role = ([1, 2, 3, 4]);
        $status = (['active', 'inactive']);
        return view('usermanagements/edit', ['users' => $users, 'role' => $role, 'status' => $status]);
    }
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'status'=>$request->status,
            'role'=>$request->role,
        ]);

        return redirect('/users')->with('success', 'User status/role successfully updated.');
    }
}
