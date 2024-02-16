<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-blue-400">
                <div class="form-container">
                    <form method="POST">
                        <div class="job-title">
                            <label class="text-white text-2xl font-bold leading-normal font-sans" for="postjobs">Post Jobs :</label>
                        </div>
                        <div class="job-grid grid grid-cols-2">
                           <div class="job-post-cols">
                            <label for="jobpost" class="text-white font-medium text-lg leading-normal">Job Post</label><br>
                            <input type="text" name="jobpost" class="rounded-md" />
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>