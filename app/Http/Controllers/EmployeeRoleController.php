<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRole;
use Illuminate\Http\Request;

class EmployeeRoleController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return EmployeeRole::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
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
    public function show(EmployeeRole $id) {
        return EmployeeRole::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeRole $employeeRole) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRole $employeeRole) {
        //
    }
}
