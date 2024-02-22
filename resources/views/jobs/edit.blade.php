<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12 bg-blue-100 px-20">
        <div class="ml-[200px]">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="form-container">
                    <form method="POST" action="{{route('update.jobs', $jobs->id)}}" enctype="multipart/form-data">
                       @csrf
                       @method('PUT');
                        <div class="job-title my-4 max-md:text-center">
                            <label class="text-black text-2xl font-medium leading-normal font-sans" for="postjobs">Post Jobs :</label>
                        </div>
                        <div class="job-grid grid grid-cols-2 gap-x-5 gap-y-6 max-md:flex max-md:flex-col max-md:px-4">

                            <div class="company-name">
                                <label class="text-black text-2xl font-medium leading-normal" for="companyname">Company Name</label><br>
                                <input type="text" name="companyname" class="py-2 rounded-md w-[100%] mt-4" value="{{$jobs->company_name}}"/>

                                <div class="error my-2">
                                    @error('companyname')
                                       <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="company-image">
                                 <label class="text-black text-2xl font-medium leading-normal">Company Image</label><br>
                                 <input type="file" name="companyimage" accept="image/jpeg, image/png, image/webp, image/jpg" class="w-[100%] border-2 py-2 px-2 mt-4 rounded-md"/>

                                 <div class="error my-2">
                                    @error('companyimage')
                                       <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="image-preview">
                                    <img src="{{asset('storage/uploads/' . $jobs->company_image)}}" alt="jobpreview" class="h-24 w-auto object-contain" />
                                </div>
                            </div>

                           <div class="job-post-cols">
                            <label for="jobpost" class="text-black text-2xl font-medium leading-normal">Job Post</label><br>
                            <input type="text" name="jobpost" class="rounded-md w-[100%] mt-4" value="{{$jobs->job_post}}" />

                            <div class="error my-2">
                                @error('jobpost')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="job-type">
                              <label class="text-black text-2xl font-medium leading-normal font-sans" for="jobtype">Job Type</label><br>
                                <select name="jobtype" class="w-[100%] rounded-md mt-4">
                                    <option value="Full Time" {{ $jobs->job_type == "Full Time" ? 'selected' : '' }}>Full Time</option>
                                    <option value="Part Time" {{ $jobs->job_type == "Part Time" ? 'selected' : '' }}>Part Time</option>
                                    <option value="Contract" {{ $jobs->job_type == "Contract" ? 'selected' : '' }}>Contract</option>
                                    <option value="Remote" {{ $jobs->job_type == "Remote" ? 'selected' : '' }}>Remote</option>
                                </select>
                              <div class="error my-2">
                                @error('jobtype')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="career-level">
                               <label class="text-black text-2xl font-medium leading-normal font-sans" for="careerlevel">Career Level</label><br>
                               <select name="careerlevel" class="w-[100%] rounded-md mt-4">
                                   <option value="Junior" {{$jobs->career_level == "Junior" ? 'selected' : ''}}>Junior</option>
                                   <option value="Associate" {{$jobs->career_level == "Associate" ? 'selected' : ''}}>Associate</option>
                                   <option value="Senior" {{$jobs->career_level == "Senior" ? 'selected' : ''}}>Senior</option>
                               </select>

                               <div class="error my-2">
                                @error('careerlevel')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                           </div>

                           <div class="deadline">
                              <label class="text-black text-2xl font-medium leading-normal font-sans" for="deadline">Deadline</label><br>
                              <input type="date" name="deadline" class="w-[100%] rounded-md mt-4" value="{{$jobs->job_deadline}}" />
                           </div>
                           <div class="job-description col-span-2 ">
                              <label class="text-black text-2xl font-medium leading-normal font-sans" for="jobdescription">Job Description</label><br>
                              <textarea name="jobdescription" class="w-[100%] h-[200px] mt-4 rounded-md">{{$jobs->job_description}}</textarea>

                              <div class="error my-2">
                                @error('jobdescription')
                                   <p class="text-red-700 text-xl font-medium leading-none">{{$message}}</p>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="submit my-4 max-md:px-4 flex items-center gap-x-4">
                            <button type="submit" class="bg-green-700 text-2xl font-bold leading-normal text-white px-4 py-1 rounded-md">Update</button>
                          <a href="{{route('show')}}" class="bg-red-700 text-2xl font-bold leading-normal text-white px-4 py-1 rounded-md">Cancel</a>
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