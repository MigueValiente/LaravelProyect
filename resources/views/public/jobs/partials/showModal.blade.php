<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="showModalLabel">{{$job->job_name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
                Creator: {{$job->creator->name}}
                Province: {{$job->province}}
                Category: {{$job->category}} 
                Description: {{$job->description}}

          </div>
          <div class="modal-footer">

          </div>
      </div>
  </div>
</div>