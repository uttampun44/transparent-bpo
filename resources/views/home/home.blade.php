<x-header.header />
<main>
   <section class="hero">
             <div  class="hero_section">
                <div class="overlay"></div>

                      <div class="home_main_container">
                        <div class="hero_section_rows">
                            <div class="hero_title">
                              <h1>Explore open career <br> opportunities.</h1>
                            </div>

                            <div class="hero_para">
                                <p>We commit to exceptional company culture and outstanding benefits</p>
                            </div>

                            <div class="hero_jobs_search">
                                  <div class="title_search">
                                        <form>
                                         <div class="form_container_hero">
                                            <label> Find the job that best suits you. </label>
                                               <select id="select_location">
                                                  <option>USA</option>
                                                   <option>Nepal</option>
                                                   <option>United Kingdom</option>
                                                   <option>Australia</option>
                                                   <option>India</option>
                                               </select>
                                            <input type="submit" value="search"/>
                                           </form>
                                         </div>
                                  </div>
                            </div>
                        </div>

                        <div class="news_process">
                            <div class="discover_recent_news">
                                 <p>Discover Recent News </p> <img src="{{asset('images/Arrow_1.png')}}" alt="arrow" />
                            </div>

                            <div class="know_all_process">
                                <p>Know Your Process</p><img src="{{asset('images/Arrow_1.png')}}" alt="arrow" />
                            </div>
                       </div>
                   </div>
                </div>
            </div>
        </section>

        <section class="job-section">

            <div class="feature-job-container">
                 <div class="feature-title">
                     <span>Latest featured jobs</span>
                 </div>

                 <div class="feature-jobs-row">
                    @foreach ($homejobs as $item)

                      @php $jobslimit = 0;  @endphp

                      @if($jobslimit < 6)
                          <div class="jobs-cols">
                             <div class="job_image">
                                 <img src="{{asset('storage/uploads/' .$item->company_image)}}" alt="job-image"/>
                             </div>
                                 <div class="title">
                                      <h2><strong>{{$item->job_post}}</strong></h2>
                                 </div>

                                 <div class="worktime">
                                     <img src="{{asset('images/location.png')}}"  alt="worklocation" /><span>{{$item->job_type}}</span>
                                 </div>

                                 <div class="work-location">
                                      <span>Company :</span><span>{{$item->company_name}}</span>
                                 </div>
                                 <div class="apply_now">
                                    <form method="post">
                                         <button type="submit" style="cursor: pointer">Apply Now</button>
                                    </form>
                                 </div>
                          </div>
                      @endif
                      @endforeach
                  </div>
            </div>

        </section>

     </main>
<x-footer.footer />