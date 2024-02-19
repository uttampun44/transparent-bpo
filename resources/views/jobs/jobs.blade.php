<x-app-layout>
    <x-sidebar.sidebar />

    <div class="py-12 bg-blue-100 px-20">
        <div class="md:ml-[190px] sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">

                <div class="add-jobs my-4">
                    <a class="rounded-md py-2 px-4 text-white font-sans leading-normal text-xl font-bold w-[100%] bg-green-700" href="{{route('show.jobs')}}">Create New Jobs</a>
                </div>

                <div class="jobs-data">
                    <table class="table-auto">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center border-2 w-[5%] px-2">Company Name</th>
                                <th class="text-center border-2 w-[5%] px-2">Company Image</th>
                                <th class="text-center border-2 w-[5%] px-2">Job Post</th>
                                <th class="text-center border-2 w-[5%] px-2">Job Type</th>
                                <th class="text-center border-2 w-[5%] px-2">Career Level</th>
                                <th class="text-center border-2 w-[5%] px-2">Job Deadline</th>
                                <th class="text-center border-2 w-[15%] px-2">Job Description</th>
                                <th class="text-center border-2 w-[5%] px-2">Update</th>
                                <th class="text-center border-2 w-[5%] px-2">Delete</th>
                            </tr>
                            <tr class="text-center">
                                <td class="text-center border-collapse border-2 px-2">softnep</td>
                                <td class="text-center border-2 px-2"><img src="" alt="companyimage" class="" /></td>
                                <td class="text-center border-2 px-2">Front End Developer</td>
                                <td class="text-center border-2 px-2">Full Time</td>
                                <td class="text-center border-2 px-2">Mid</td>
                                <td class="text-center border-2 px-2">22/10/2024</td>
                                <td class="text-center border-2 px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, amet?</td>
                                <td class="text-center border-2 px-2 py-2"><a href="{{route('edit.jobs')}}" class="bg-blue-700 rounded-md py-2 text-white font-sans leading-normal text-xl font-bold"><i class="fas fa-edit w-[100%]"></i></a></td>
                                <td class="text-center border-2 px-2 py-2">
                                    <form method="POST" action="">
                                          <button class="bg-red-700 rounded-md py-2 w-[100%] text-white font-sans leading-normal text-xl font-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>