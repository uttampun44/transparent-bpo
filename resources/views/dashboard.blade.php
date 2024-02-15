<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <x-sidebar.sidebar />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-blue-400">
                {{-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> --}}
                <div class="dashboard-row grid">
                     <div class="applicants-div">
                          <div class="row flex justify-between items-center">
                              <div class="para text-white w-[70%]">
                                  <span class="text-lg font-normal leading-normal">Hello John</span><br>
                                  <strong class="text-4xl leading-normal font-bold">You have 9 new applicants today!<br> Review applicants</strong>
                              </div>
                              <div class="img w-[30%]">
                                <img src="{{asset('images/notificationdashboard.png')}}" class="w-[100%] h-auto object-cover" />
                              </div>
                          </div>
                     </div>
                     <div class="calendar">

                     </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
