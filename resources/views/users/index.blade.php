<x-app-layout>
    <x-sidebar.sidebar />

    <div class="py-12 bg-blue-100 px-20">
        <div class="md:ml-[190px] sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="jobs-data">
                    <table class="table-auto">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center border-2 w-[5%] px-2">ID</th>
                                <th class="text-center border-2 w-[5%] px-2">Name</th>
                                <th class="text-center border-2 w-[5%] px-2">Email</th>
                                <th class="text-center border-2 w-[5%] px-2">Delete</th>
                            </tr>
                            @php
                                $sno = 1;
                            @endphp
                           @foreach ($users as $item)
                        <tr class="text-center">
                            <td class="text-center border-collapse border-2 px-2">{{$sno++}}</td>
                            <th class="text-center border-2 w-[5%] px-2">{{$item->name}}</th>
                            <th class="text-center border-2 w-[5%] px-2">{{$item->email}}</th>
                            <td class="text-center border-2 px-2 py-2">
                                <form method="POST" action="{{ route('users.destroy', $item->id)}}">
                                    @csrf
                                    @method('DELETE')
                                      <button class="bg-red-700 rounded-md py-2 w-[100%] text-white font-sans leading-normal text-xl font-bold">Delete</button>
                                </form>
                            </td>
                        </tr>
                           @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>