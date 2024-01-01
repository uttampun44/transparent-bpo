@include('./layouts/admin-header')
<main>
    <section>
        <div class="employer_container">
           <div class="employer_admin_row">
               <div class="sidebar_cols">
                  <div class="employer_admin_siderbar">
                     <aside>
                          <ul>
                             <li><p>Dashboard</p></li>
                             <li><p>My Profile</p></li>
                             <li><p>Job Post</p></li>
                             <li><p>Settings</p></li>
                           </ul>
                     </aside>
                  </div>
               </div>

                 <div class="job_post_container">
                     <div class="jobs_cols">
                        <div class="jobs_title">
                           <h1>Job post</h1>
                           <div class="job_post_form">
                                <form action="{{url('/')}}/jobpost" method="POST">
                                      @csrf

                                      <div class="job_form_cols">
                                            <div class="job_title">
                                               <label for="jobtitle">Job Title</label><br>
                                               <input type="text" name="jobTitle" placeholder="Job Ttitle" />
                                               @error('jobTitle')
                                                   {{$message}}
                                               @enderror
                                            </div>
                                             <div class="organization_name">
                                                <label for="organization">Organization Name</label><br>
                                                <input type="text" name="organization" placeholder="Organization Name" />
                                               @error('organization')
                                                   {{$message}}
                                               @enderror
                                             </div>
                                            <div class="jobs_qualification">
                                               <label>Qualification</label><br>
                                                   <select name="qualification">
                                                        <option>Diploma</option>
                                                        <option>Bachelor</option>
                                                        <option>Master</option>
                                                        <option>Related Field</option>
                                                   </select>
                                                   @error('qualification')
                                                       {{$message}}
                                                   @enderror
                                            </div>

                                            <div class="job_type">
                                                <label>Job Type</label><br>
                                                <select name="jobType">
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                    <option>Contract</option>
                                                    <option>Remote</option>
                                                </select>
                                                @error('jobType')
                                                     {{$message}}
                                                @enderror
                                            </div>

                                            <div class="job_description">
                                               <label>Job Description</label><br>
                                               <textarea name="jobDescription"></textarea>
                                               @error('jobDescription')
                                                    {{$message}}
                                               @enderror
                                            </div>
                                             <div class="required_skils">
                                                <label>Required Skills</label><br>
                                                <textarea name="requiredSkills"></textarea>
                                                @error('requiredSkills')
                                                   {{$message}}
                                                @enderror
                                             </div>
                                             <div class="submit_job_post">
                                                 <input type="submit" value="Job post" />
                                             </div>
                                      </div>
                                </form>
                           </div>
                        </div>
                     </div>
               </div>
           </div>
        </div>
    </section>
   </main>