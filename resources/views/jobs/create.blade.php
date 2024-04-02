<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12 bg-blue-100 px-20">
        <div class="ml-[200px]">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="form-container">
                    <form method="POST" action="{{route('create.jobs')}}" enctype="multipart/form-data">
                       @csrf
                       @method('POST')
                        <div class="job-title my-4 max-md:text-center">
                            <label class="text-black text-2xl font-medium leading-normal font-sans" for="postjobs">Post Jobs :</label>
                        </div>
                        <div class="job-category my-4 pr-4">
                            <select name="jobcategory" class="w-[50%] rounded-md">
                                @foreach ($category as $item)
                                     <option value="{{$item->id}}">{{$item->job_categories}}</option>
                                @endforeach
                            </select>
                            <div class="error my-2">
                                @error('jobcategory')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>                        </div>
                        <div class="job-grid grid grid-cols-2 gap-x-5 gap-y-6 max-md:flex max-md:flex-col max-md:px-4">

                            <div class="company-name">
                                <label class="text-black text-2xl font-medium leading-normal" for="companyname">Company Name</label><br>
                                <input type="text" name="companyname" class="py-2 rounded-md w-[100%] mt-4 text-lg font-medium leading-normal font-sans" />

                                <div class="error my-2">
                                    @error('companyname')
                                       <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="company-image">
                                 <label class="text-black text-2xl font-medium leading-normal">Company Image</label><br>
                                 <input type="file" name="companyimage" accept="image/jpeg, image/png, image/webp, image/jpg" class="w-[100%] border-2 py-2 px-2 rounded-md text-lg font-medium leading-normal font-sans"/>

                                 <div class="error my-2">
                                    @error('companyimage')
                                       <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                           <div class="job-post-cols">
                            <label for="jobpost" class="text-black text-2xl font-medium leading-normal">Job Post</label><br>
                            <input type="text" name="jobpost" class="rounded-md w-[100%] mt-4 text-lg font-medium leading-normal font-sans" />

                            <div class="error my-2">
                                @error('jobpost')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="job-type">
                              <label class="text-black text-2xl font-medium leading-normal font-sans" for="jobtype">Job Type</label><br>
                              <select name="jobtype" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans">
                                 <option>Full Time</option>
                                 <option>Part Time</option>
                                 <option>Contract</option>
                                 <option>Remote</option>
                              </select>

                              <div class="error my-2">
                                @error('jobtype')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="career-level">
                               <label class="text-black text-2xl font-medium leading-normal font-sans" for="careerlevel">Career Level</label><br>
                               <select name="careerlevel" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans">
                                   <option>Junior</option>
                                   <option>Associate</option>
                                   <option>Senior</option>
                               </select>

                               <div class="error my-2">
                                @error('careerlevel')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="deadline">
                              <label class="text-black text-2xl font-medium leading-normal font-sans" for="deadline">Deadline</label><br>
                              <input type="date" name="deadline" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans" />
                           </div>
                           <div class="location">
                            <label for="location" class="text-black text-2xl font-medium leading-normal font-sans">Location</label><br>
                            <input type="text" name="location" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans" />
                          </div>


                          <div class="salary">
                            <label for="salary" class="text-black text-2xl font-medium leading-normal font-sans">Salary:</label><br>
                            <input type="text" name="salary" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans" />
                          </div>

                         </div>


                         <div class="my-6">
                            <label for="requirement" class="text-black text-2xl font-medium leading-normal font-sans">Requirement:</label><br>
                            <div class="">
                                <textarea class="editor" type="text" name="requirement" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans"></textarea>
                              </div>
                            </div>
                           </div>

                              <div class="responsibilites my-6" >
                              <label for="responsibilities" class="requirement text-black text-2xl font-medium leading-normal font-sans">Responsibilities:</label><br>
                              <div class="requirement" >

                                <textarea type="text" class="editor" name="responsibilities" class="w-[100%] rounded-md mt-4 text-lg font-medium leading-normal font-sans"></textarea>
                              </div>
                              </div>

                              <div class="responsibilities my-6">
                                    <label class="text-black text-2xl font-medium leading-normal font-sans" for="jobdescription">Job Description</label><br>

                                    <div>
                                        <textarea class="editor" name="jobdescription" class="w-[100%] h-[200px] mt-4 rounded-md"></textarea>

                                    </div>

                                    <div class="error my-2">
                                      @error('jobdescription')
                                         <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                      @enderror
                                  </div>
                              </div>
                        </div>



                        <div class="submit my-4 max-md:px-4">
                            <button type="submit" class="bg-green-700 text-2xl font-bold leading-normal text-white px-4 py-1 rounded-md">Submit</button>
                        </div>

                        <div class="submit-success">
                            @if (Session::has('success'))
                                <p class="text-greeen-700 font-sans leading-normal text-xl">{{session('success')}}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

let editors = document.querySelectorAll('.editor');

editors.forEach(editor => {

    ClassicEditor
        .create(editor)
        .catch(error => {
            console.error(error);
        });
});

  </script>