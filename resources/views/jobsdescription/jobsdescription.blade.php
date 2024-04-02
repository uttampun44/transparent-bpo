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
                                  <div class="my-2">
                                    {!! $jobs->job_description !!}
                                  </div>
                            </div>

                            <div class="job-responsibilities">
                              <strong>Responsibilities</strong>
                                  <div class="my-2">
                                   {!! $jobs->job_responsibilities!!}
                                  </div>
                            </div>

                            <div class="job-requirements">
                              <strong>Requirements</strong>
                                 <div class="py-2">
                                   {!!  $jobs->requirement !!}
                                 </div>
                            </div>

                            <div class="overlay-job">

                            </div>

                            <div class="job_modal">
                                <div class="close_modal">
                                      <span>X</span>
                                </div>
                                  <input placeholder="Full Name" class="px-4 py-2" />
                            </div>

                            <div class="button-apply">
                                <button id="appylyNow">   <img src="{{asset('images/Suitcase.png')}}" /> Apply for this position</button>
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
                                                <div>
                                                        {!! $item->job_description !!}
                                                </div>
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

<script type="text/javascript" defer src="{{asset('js/jobdescription/description.js')}}">  </script>
<x-footer.footer />