<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12 bg-blue-100 px-20">
        <div class="md:ml-[190px] sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">

                <div class="add-cateogry my-4 text-end">
                    <a class="rounded-md py-2 px-4 text-white font-sans leading-normal text-xl font-bold w-[100%] bg-green-700" href="{{route('category.show')}}">Create New Jobs</a>
                </div>

                <div class="category-data">
                    <table class="table-auto">
                            <tr class="text-center">
                                <thead>
                                <th class="text-center border-2 w-[5%] px-2">ID</th>
                                <th class="text-center border-2 w-[5%] px-2">Company Name</th>
                                <th class="text-center border-2 w-[5%] px-2">Job Category</th>
                                <th class="text-center border-2 w-[5%] px-2">Update</th>
                                <th class="text-center border-2 w-[5%] px-2">Delete</th>
                            </thead>
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

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>