<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::all();
        return view('admin.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
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
            'name'=>'required',
            'logo'=>'required',
            // 'designation'=>'required',
            'industry'=>'required',
            'ownership_type'=>'required',
            'company_description'=>'required',
            'no_of_offices'=>'required|string',
            'no_of_employees'=>'required|string',
            'established_in'=>'required|string',
            'phone_number'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'package'=>'required',
            'established_in'=>'required'
        ]);

        Company::create([
            'name'=>$request->name,
            'logo'=>$request->logo,
            'industry'=>$request->industry,
            'ownership_type'=>$request->ownership_type,
            'company_description'=>$request->company_description,
            'established_in'=>$request->established_in,
            'package'=>$request->package,
            'phone_number'=>$request->phone_number,
            'no_of_offices'=>$request->no_of_offices,
            'no_of_employees'=>$request->no_of_employees,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city

        ]);
        return redirect()->route('companies.index');

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
        $company=Company::findorFail($id);
        return view('admin.company.edit',compact('company'));
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
       $details= $request->validate([
            'name'=>'required',
            'logo'=>'required',
            // 'designation'=>'required',
            'industry'=>'required',
            'ownership_type'=>'required',
            'company_description'=>'required',
            'no_of_offices'=>'required|string',
            'no_of_employees'=>'required|string',
            'established_in'=>'required|string',
            'phone_number'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'package'=>'required',
            'established_in'=>'required'
        ]);
        $company =Company::find($id);
        $company->update($details);
        return redirect()->route('companies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != ""){
            $company= Company::where('id',$id);
            $company->delete();
            return redirect()->route('companies.index');
        }
    }
}
