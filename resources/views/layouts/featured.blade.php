<section>
    <div class="featured_container">
           <div class="featured_rows">
                <div class="featured_title_rows">
                    <div class="featured_title">
                        <strong>Latest Featured Jobs</strong>
                     </div>

                     <div class="explore_more">
                        <p>Explore More</p> <img src="{{asset('images/Arrow_1.png')}}" alt="explore_more"/>
                     </div>
                </div>

                <div class="display_featured_jobs">
                      <div class="jobs_rows">
                          <div class="jobs_cols">
                               @foreach ($jobs as $jobpost)
                                    <div class="job_title">
                                        <p>{{$jobpost->job_title}}</p>
                                    </div>
                                    <div class="orgnization">
                                         <p>{{$jobpost->organization}}</p>
                                    </div>
                                    <div class="job_type">
                                        <p>{{$jobpost->job_type}}</p>
                                    </div>
                               @endforeach
                               <div class="apply_now">
                                   <a href="{{url('/')}}">Apply Now</a>
                               </div>
                          </div>

                      </div>
                </div>
           </div>
    </div>
</section>