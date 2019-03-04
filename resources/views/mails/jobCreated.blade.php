@component('mail::message')
# New Job: {{   $job->job_name    }}

{{  $job->description  }}

@component('mail::button', ['url' => url('/jobs/'.$job->slug)])
Job Info
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
