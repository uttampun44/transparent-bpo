<x-header.header />
<main>
    <section>
        <div class="container mx-auto jobsdescription my-32">
            <div class="jobs-description-cols">
                 <div class="company-name-img">
                    <strong>Company Name</strong>
                    <p> {{$jobs->company_name}}</p>
                    <img src="{{asset('storage/uploads/' . $jobs->company_image)}}" />
                 </div>
                 <div class="position">
                      <strong>Position</strong>
                      <p>{{$jobs->job_post}}</p>
                 </div>
                 <div class="job_description">
                      <p>{{$jobs->job_description}}</p>
                 </div>
                 <div class="experience">
                       <strong>Experience</strong>
                       <p>{{$jobs->career_level}}</p>
                 </div>
                 <div class="job-type">
                    <strong>Job Type</strong>
                    <p>{{$jobs->job_type}}</p>
                 </div>

                 <div class="job-deadline" style="margin-top: .5em;">
                      <strong>Apply Before</strong>
                      <p>{{$jobs->job_deadline}}</p>
                 </div>

                 <div class="button-apply">
                      <button>Apply Now</button>
                 </div>
            </div>
        </div>
    </section>
</main>
<x-footer.footer />