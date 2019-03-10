<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Str;
use App\Notifications\JobCreated;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create' , 'store', 'edit', 'update', 'destroy']
        ]);
        $this->middleware('can:touch,job',[
            'only' => ['edit','update','destroy']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Job::with(['company'])
        ->latest()
        ->paginate(10);

      return view('public.jobs.index')->withJobs($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();

        return view('public.jobs.create', ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\JobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        // dd($request);
      $job = Job::create([
          'job_name' => request('job_name'),
          'creator_id' => $request->user()->id,
          'description' => request('description'),
          'company_id'  => request('company'),
          'payment' => request('payment'),
          'category' => request('category'),
          'slug' => str_slug(request('job_name'), '-'),
          'province' => request('province'),
          'uuid' => Str::uuid(),
          'expired_at' => request('expired_at')
        ]);

        $user = User::find(1);
        $user->notify(new JobCreated($job));
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

        $companies = Company::all();

        return view('public.jobs.edit', ['job' => $job,'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\JobRequest  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request,Job $job)
    {

        $job->update([
          'job_name' => request('job_name'),
          'description' => request('description'),
          'payment' => request('payment'),
          'category' => request('category'),
          'company_id' => request('company'),
          'slug' => str_slug(request('job_name'), '-'),
          'province' => request('province'),
          'expired_at' => request('expired_at')
        ]);

        return redirect('/jobs/'.$job->slug)
            ->with('message', "This job has been edited correctly");
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

        return redirect('/')
            ->with('message',  'The job '.$job->job_name. ' has been deleted.');
    }
}
