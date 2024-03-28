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
                                      <h2>{{$item->job_post}}</h2>
                                      <span>{{$item->job_category}}</span>
                                 </div>

                                 <div class="worktime">
                                     <img src="{{asset('images/location.png')}}"  alt="worklocation" /><span>{{$item->job_type}}</span>
                                 </div>

                                 <div class="work-location">
                                      <span>Company :</span><span>{{$item->company_name}}</span>
                                 </div>
                                 <div class="apply_now">
                                         <a href="{{route('jobs.show', $item->job_post_slug)}}" style="cursor: pointer">Apply Now</a>
                                 </div>
                          </div>
                      @endif
                      @endforeach
                  </div>
            </div>

        </section>

        <!-- join us !-->
        <section id="join-us">
            <div class="join-after">

            </div>
            <div class="join-us-container">
                   <div class="title-we-are">
                        <h2>We're more than just<br> a workplace. We're a family.</h2>
                   </div>
                   <div class="join-us-button">
                      <a href="{{route('register')}}">Join Us</a>
                   </div>
            </div>
        </section>

        <!-- find your team !-->
        <section id="find-team">
            <div class="find-your-team">
                  <div class="your-team-view">
                        <div class="your-team">
                              <h2>Find Your Team</h2>
                        </div>
                        <div class="view-all-team">
                            <span>View all teams </span><span><img src="{{asset('images/Arrow_1.png')}}" /></span>
                        </div>
                  </div>

                  <div class="team-detail-cols">
                          <div class="img-team">
                               <img src="{{asset('images/home_team.png')}}" />
                          </div>

                          <div class="team-detail">
                                 <div class="title-engineering">
                                      <h3>Engeering & Tech</h3>
                                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, aliquid sapiente vel possimus quam reprehenderit dolorem cumque ratione in eos.</p>
                                 </div>
                                 <div class="people">
                                    <h3>People</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, aliquid sapiente vel possimus quam reprehenderit dolorem cumque ratione in eos.</p>
                                 </div>

                                 <div class="sale-marketing">
                                    <h3>Sale, Service & Support</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, aliquid sapiente vel possimus quam reprehenderit dolorem cumque ratione in eos.</p>
                                 </div>
                                 <div class="marketing">
                                    <h3>Marketing</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, aliquid sapiente vel possimus quam reprehenderit dolorem cumque ratione in eos.</p>
                                 </div>
                          </div>
                  </div>
            </div>
        </section>

        <!-- our location !-->

        <section>
            <div class="our-location">
                <div class="our-location-row">
                       <div class="title-location">
                             <h2>Our Locations</h2>
                       </div>
                       <div class="view-all-location">
                        <span>View all teams </span><span><img src="{{asset('images/Arrow_1.png')}}" /></span>
                       </div>
                </div>

                <div class="grid-location">
                       <div class="location">
                          <img src="{{asset('images/location_one.png')}}" />
                       </div>
                       <div class="location">
                          <img src="{{asset('images/location_two.png')}}" />
                       </div>
                       <div class="location">
                           <img src="{{asset('images/location_three.png')}}" />
                       </div>
                       <div class="location">
                            <img src="{{asset('images/location_four.png')}}" />
                       </div>
                </div>
            </div>
        </section>

     </main>
<x-footer.footer />