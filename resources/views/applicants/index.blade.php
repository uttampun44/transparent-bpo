<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12 bg-blue-100 px-20">
        <div class="ml-[200px]">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="form-container">
                    <div class="applicants my-3">
                        <strong class="fontb-bold text-lg font-sans">Applicants</strong>
                    </div>
                    <div class="jobs-data">
                        <table class="table-auto">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-center border-2 w-[5%] px-2">ID</th>
                                    <th class="text-center border-2 w-[5%] px-2">Name</th>
                                    <th class="text-center border-2 w-[5%] px-2">Phone</th>
                                    <th class="text-center border-2 w-[5%] px-2">Email</th>
                                    <th class="text-center border-2 w-[5%] px-2">CV/Resume</th>
                                    <th class="text-center border-2 w-[5%] px-2">Position</th>
                                    <th class="text-center border-2 w-[5%] px-2">Delete</th>
                                </tr>
                               {{-- @foreach ($jobs as $item)
                            <tr class="text-center">
                                <td class="text-center border-collapse border-2 px-2">{{$item->id}}</td>
                                <td class="text-center border-2 px-2">{{$item->company_name}}</td>
                                <td class="text-center border-2 px-2"><img src="{{ asset('storage/uploads/' . $item->company_image) }}" alt="companyimage" class="w-20 h-20 object-contain" /></td>
                                <td class="text-center border-2 px-2">{{$item->job_post}}</td>
                                <td class="text-center border-2 px-2">{{$item->job_type}}</td>
                                <td class="text-center border-2 px-2">{{$item->career_level}}</td>
                                <td class="text-center border-2 px-2">{{$item->job_deadline}}</td>
                                <td class="text-center border-2 px-2">{{$item->job_description}}</td>
                                <td class="text-center border-2 px-2 py-2"><a href="{{route('edit.jobs', $item->id)}}" class="bg-blue-700 rounded-md py-2 text-white font-sans leading-normal text-xl font-bold"><i class="fas fa-edit w-[100%]"></i></a></td>
                                <td class="text-center border-2 px-2 py-2">
                                    <form method="POST" action="{{ route('delete.jobs', $item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                          <button class="bg-red-700 rounded-md py-2 w-[100%] text-white font-sans leading-normal text-xl font-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                               @endforeach --}}
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>