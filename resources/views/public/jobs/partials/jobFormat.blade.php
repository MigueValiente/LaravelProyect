<div data-list = "jobs">
      @forelse($jobs as $job)
        <div class="card mb-2">
          <div class="card-header">
            {{$job->job_name}}
          </div>
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">Creator: {{$job->creator->name}}</h4>
              <p class="card-text">Creator Email: {{$job->creator->email}}</p>
              <h5 class="card-text">Company: {{$job->company->name}}</h5>
              <p class="card-text">{{str_limit($job->description, 50)}}</p>
              <p class="card-text">{{$job->payment}}€</p>
              @include("public.jobs.partials.buttons")
              {{-- <a href="/jobs/moreInfoAjax/{{$job->slug}}" class="btn btn-primary btn-sm float-right mr-2">Más Info</a> --}}
              <button type="button" data-jobSlug="{{$job->slug}}" class="btn btn-primary btn-sm float-right mr-2 showButton" id="showButton">
                  More Info
              </button>

            </div>
        </div>
      @empty
        <li>No Hay Trabajos Disponibles</li>
      @endforelse
</div>