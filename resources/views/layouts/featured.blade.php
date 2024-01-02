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
                            <div class="job_icon">
                                <img src="/images/job_icon.png" alt="jobicon" />
                            </div>
                            <div class="job_description_content">
                                <div class="job_title">
                                    <p>{{$jobpost->job_title}}</p>
                                </div>
                                <div class="organization">
                                    <p>Company name: {{$jobpost->organization}}</p>
                                </div>
                                <div class="job_type">
                                    <i class="fa fa-user" style="font-size:48px;color:red"></i>
                                    <p>{{$jobpost->job_type}}</p>
                                </div>
                                <div class="apply_now">
                                    <a href="{{url('/')}}">Apply Now</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
           </div>
    </div>
</section>