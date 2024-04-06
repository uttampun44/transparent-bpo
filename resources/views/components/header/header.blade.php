@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transparent Bpo</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="header_container">
         <div class="header_rows">
               <div class="header_logo">
                 <a href="{{route('home')}}" aria-label="home"><img src="{{ asset('/images/transparent-bpo-logo 1.png')}}" alt="header_image" /></a>
               </div>
               <div class="header_login_findjobs">
                     <div class="header_links">
                          <a href="">Find Jobs</a>
                          <a href="{{route('register')}}">News Login</a>
                     </div>

                     <div class="header_login">
                        @php $userWithRole2Exists = false; @endphp
                        @foreach ($users as $user)
                            @if($user->role == 2)
                                @if(Auth::check() && Auth::user()->id == $user->id)

                                    <p>{{ $user->name }}</p>
                                    @php $userWithRole2Exists = true; @endphp
                                @endif
                            @endif
                        @endforeach

                        @if (!$userWithRole2Exists)
                            <a href="{{ route('login') }}">Login</a>
                        @endif
                     </div>
               </div>
         </div>
    </div>
 </header>
</body>
</html>