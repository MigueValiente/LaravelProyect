<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job;

        $job->job_name=request('job_name');
        $job->creator=request('creator');
        $job->description=request('description');
        $job->slug= str_slug($job->job_name,'-');

        $job->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $job = Job::findOrFail($slug);

        return view('public.jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $job = Job::findOrFail($slug);

        return view('public.books.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $job = Job::findOrFail($id);

        $job->job_name=request('job_name');
        $job->creator=request('creator');
        $job->description=request('description');
        $job->slug= str_slug($job->job_name,'-');

        $job->update();

        return redirect('/jobs/'.$job->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $job = Job::findOrFail($slug)->delete();

        return redirect('/');
    }
}
