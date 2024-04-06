<div class="sidebar fixed bg-blue-950 top-0 h-[100vh]">
    <div class="siderbar-cols px-10 py-8 text-center">
        <div class="siderbar-img flex items-center gap-x-4">
            <img src="{{asset('images/transparent-bpo-logo 1.png')}}" alt="transparentlogo" class="w-40 h-auto object-contain" />
        </div>
        <div class="admin-image my-8 grid gap-y-1 justify-items-center">
            <img src="{{asset('images/admin-profile.png')}}" alt="adminimage" class="w-20 h-20 object-contain rounded-[50%]" />
            <strong class="text-white font-bold leading-normal text-2xl">{{ Auth::user()->name }}</strong>
            <span class="text-white font-normal text-lg leading-normal">HR Recruiter</span>
        </div>

        <div class="siderbar-admin">
            <aside>
                <ul class="grid gap-y-5 mt-8">
                    <li><a href="{{route('dashboard')}}" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/Dashboard.png')}}" alt="dashboard" />Dashboard</a></li>
                    <li><a href="{{route('users.index')}}" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/templates.png')}}" alt="users" />Users</a></li>
                    <li><a href="{{route('category')}}" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/templates.png')}}" alt="jobtype" />Job Type</a></li>
                    <li><a href="{{route('applicants')}}" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/applicants.png')}}" alt="applicants" />Applicants</a></li>
                    <li><a href="{{route('jobs')}}" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/jobs.png')}}" alt="jobs" />Jobs</a></li>
                    <li><a href="" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/interview.png')}}" alt="jobs" />Interviews</a></li>
                    <li><a href="" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/system.png')}}" alt="system"/>System</a></li>
                </ul>
            </aside>
        </div>

        <div class="admin-logout grid mt-12 gap-y-8 ">
             <a href="" class="text-gray-400 leading-normal font-medium text-xl flex gap-x-4 items-center"><img src="{{asset('images/admin.png')}}" alt="admin" />Admin</a>

             <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>

    </div>
</div>