<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Job_request;
use Illuminate\Http\Request;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       return view('requests.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
       
       $rq=Job_request::create([
        'job_id'=>$id,
        'email'=>$request->email,
        'fullname'=>$request->fullname,
        'phone'=>$request->phone,
        'addres'=>$request->addres,
        'cv_file'=>$request->cv_file,
        'linkedin'=>$request->linkedin,
        'user_id' => auth()->id()
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job_request  $job_request
     * @return \Illuminate\Http\Response
     */
    public function show(Job_request $job_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job_request  $job_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Job_request $job_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job_request  $job_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job_request $job_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job_request  $job_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job_request $job_request)
    {
        //
    }
}
