<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $user = User::with(['_employee_profile._role._office', '_level'])
            ->find(Auth::user()->id);

        if ($user->_level->name === 'HEAD') {
            return EmployeeRole::with('_office')
                ->where('role', 'like', "%{$search}%")
                //->where('office', $user->_employee_profile->_role->_office->id)
                ->get();
        }

        return EmployeeRole::with('_office')
            ->where('role', 'like', "%{$search}%")
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newRole = new EmployeeRole($request->all());
            $newRole->save();
            return response()->json("User created", 201);
        } catch (\Exception $e) {
            return response()->json("Error: " . $e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeRole $id)
    {
        return EmployeeRole::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeRole $employeeRole, $id)
    {
        try {
            EmployeeRole::find($id)->update($request->all());
            return response()->json("Role updated", 200);
        } catch (\Exception $e) {
            return response()->json("Error: " . $e, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRole $employeeRole)
    {
        //
    }
}
