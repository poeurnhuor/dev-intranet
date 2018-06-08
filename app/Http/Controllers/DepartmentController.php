<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = new Department();

        return view('department/index')->with([
            'departments' => $dep->getDepartment(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);


        $depart = new Department();

        $depart->fill([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ])->save();

        Session::flash('message', 'Department has been created successfully!');

        return redirect(backendUrl('department'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('department/edit')->with([
            'department' => Department::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);


        $depart = Department::findOrFail($id);

        $depart->fill([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ])->save();

        Session::flash('message', 'Department has been updated successfully!');

        return redirect(backendUrl('department'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::destroy($id);
        Session::flash('message_type', 'warning');
        Session::flash('message', 'Department has been deleted!');
        return redirect(backendUrl('department'));
    }
}
