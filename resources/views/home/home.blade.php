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
     </main>
<x-footer.footer />