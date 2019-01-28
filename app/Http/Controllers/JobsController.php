<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Job::paginate(10);

      return view('public.jobs.index')->withJobs($jobs);
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
    public function store(JobRequest $request)
    {
        Job::create([
          'job_name' => request('job_name'),
          'creator' => request('creator'),
          'description' => request('description'),
          'email_creator' => request('email_creator'),
          'payment' => request('payment'),
          'category' => request('category'),
          'slug' => str_slug(request('job_name'), '-'),
          'province' => request('province'),
          'uuid' => Str::uuid(),
          'expired_at' => request('expired_at')
        ]);
        // $job = new Job;
        //
        // $job->job_name=request('job_name');
        // $job->creator=request('creator');
        // $job->description=request('description');
        // $job->province=request('province');
        // $job->payment=request('payment');
        // $job->category=request('category');
        // $job->uuid=Str::uuid();
        // $job->ip_creator=request('ip_creator');
        // $job->slug= str_slug($job->job_name,'-');
        // $job->expired_at=request('expired_at');
        //
        // $job->save();

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
        $job = Job::where('slug', $slug)->firstOrFail();

        return view('public.jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {

        return view('public.books.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request,Job $job)
    {

        $job->update([
          'job_name' => request('job_name'),
          'creator' => request('creator'),
          'description' => request('description'),
          'email_creator' => request('email_creator'),
          'payment' => request('payment'),
          'category' => request('category'),
          'slug' => str_slug(request('job_name'), '-'),
          'province' => request('province'),
          'expired_at' => request('expired_at')
        ]);

        return redirect('/jobs/'.$job->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/');
    }
}
