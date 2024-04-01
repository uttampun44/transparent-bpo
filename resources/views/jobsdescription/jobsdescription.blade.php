<x-header.header />
<main>
    <section>
        <div class="container mx-auto jobsdescription my-32">

          <div class="job-details-row ">
                  <div class="job_cols">
                           <div class="job-title-row">
                                   <div class="job-type">
                                           <h1>Job Type</h1>
                                           <span>{{$jobs->job_type}}</span>
                                   </div>
                                   <div class="job-type">
                                        <h1>Location</h1>
                                        <span>{{$jobs->location}}</span>
                                </div>
                                   <div class="job-setup">
                                        <h1>Experience</h1>
                                       <span>{{$jobs->career_level}}</span>
                                   </div>
                                   <div class="salary-offer">
                                        <h1>Salary Offer</h1>
                                        <span>{{$jobs->salary}}/months</span>
                                   </div>
                           </div>

                           <div class="job-description">
                              <strong>Job Description</strong>

                              @php


                                 $description = $jobs->job_description;

                        $description = preg_replace('#<ol(.*?)>(.*?)</ol>#is', '$2', $description);
                            @endphp

                               <ul class="list-disc">
                                <li>
                                    {!! $description !!}
                                </li>
                               </ul>
                            </div>

                            <div class="job-responsibilities">
                              <strong>Responsibilities</strong>

                              @php


                              $description = $jobs->job_responsibilities;

                     $responsibilities = preg_replace('#<ol(.*?)>(.*?)</ol>#is', '$2', $description);
                         @endphp

                               <ul class="list-disc">
                                   <li>{!! $responsibilities !!}</li>
                               </ul>
                            </div>

                            <div class="job-requirements">
                              <strong>Requirements</strong>

                              @php

                              $description = $jobs->requirement;

                     $requirement = preg_replace('#<ol(.*?)>(.*?)</ol>#is', '$2', $description);
                         @endphp
                               <ul class="list-disc">
                                   <li>{!!  $requirement !!}</li>
                               </ul>
                            </div>

                            <div class="button-apply">
                              <button>Apply Now</button>
                         </div>

                  </div>


                  <div class="jobs_list">
                         <h2>Related Jobs</h2>
                         <aside>
                         <div class="job-side-column">
                                 <div class="details-box">
                                    @foreach ($related_jobs as $item)

                                       <div class="detail-grid">

                                        <div class="job-layer">
                                            <div class="jobs_titles">
                                                <strong>Email Support</strong>
                                                  <div class="location-jobtype">
                                                       <span>{{$item->job_post}}<span><br>
                                                            <span>{{$item->location}}<span>
                                                  </div>
                                              </div>
                                            <div class="icon">
                                                 <img src="{{asset('images/Layer_1.png')}}" alt="" />
                                            </div>
                                         </div>

                                            <div class="side-col-description">
                                                <ul>
                                                    <li>
                                                        {!! $item->job_description !!}
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="job-salary">
                                                <span>${{$item->salary}}/month</span>
                                                <span>6 Days</span>
                                            </div>
                                       </div>


                                 </div>
                                 @endforeach
                         </div>
                        </aside>
                  </div>

          </div>

    </section>
</main>
<x-footer.footer />