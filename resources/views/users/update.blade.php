<x-app-layout>
    <x-sidebar.sidebar />

    <div class="py-12 bg-blue-100 px-20">
        <div class="md:ml-[190px] sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="users-update">
                    <strong >User Update</strong>
                </div>

                {{-- @dd($item) --}}
                <form method="POST" enctype="multipart/form-data" action="{{route('users.update', $users_edit->id)}}">

                    @csrf
                    @method('PUT')
                <div class="users-row grid gap-x-4 grid-cols-3">

                    <div class="name">
                            <label for="name" class="mb-3 font-mono">Name</label><br>
                            <input type="text" name="name" class="my-3 w-full rounded-md" value="{{$users_edit->name}}" />
                    </div>
                    <div class="email">
                        <label for="email" class="mb-3 font-mono">Email</label><br>
                        <input type="text" name="email" class="my-3 w-full rounded-md" placeholder="Enter Your Email" value="{{$users_edit->email}}" />
                    </div>
                    <div class="password">
                        <label for="email" class="mb-3 font-mono">Password</label><br>
                        <input type="password" name="password" class="my-3 w-full rounded-md" placeholder="Enter Your Email" value="{{$users_edit->email}}" />
                    </div>

                </div>
                <div class="button flex gap-x-4 my-4">
                    <button type="submit" class="bg-green-700 text-2xl font-bold leading-normal text-white px-4 py-1 rounded-md">Update</button> <a href="{{route('users.index')}}" class="bg-red-700 text-2xl font-bold leading-normal text-white px-4 py-1 rounded-md">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>