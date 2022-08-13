<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use App\Models\Admin\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return view('admin.jobs.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comp_name'=> 'required|string|max:20',
            'job_title'=>'required|string|max:20',
            'job_description'=>'required|string',
            'benefit'=>'required|string',
            'skills'=>"required|string",
            'country'=>'required|string',
            'state'=>'required|string',
            'city'=>'required|string',
            'carrier_level'=>'required|string',
            'salary_from'=>'required|string',
            'salary_to'=>'required|string',
            'salaray_period'=>'required|string',
            'functional_area'=>'required|string',
            'job_type'=>'required|string',
            'job_shift'=>'required|string',
            'position'=>'required|string',
            'gender'=>'required|string',
            'job_expire_date'=>'required|string',
        ]);
        Job::create([
            'comp_name'=>$request->comp_name,
            'job_title'=>$request->job_title,
            'job_description'=>$request->job_description,
            'benefit'=>$request->benefit,
            'skills'=>$request->skills,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'carrier_level'=>$request->carrier_level,
            'salary_from'=>$request->salary_from,
            'salary_to'=>$request->salary_to,
            'salary_from'=>$request->salary_from,
            'salaray_period'=>$request->salaray_period,
            'functional_area'=>$request->functional_area,
            'job_type'=>$request->job_type,
            'job_shift'=>$request->job_shift,
            'position'=>$request->position,
            'gender'=>$request->gender,
            'job_expire_date'=>$request->job_expire_date,
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
