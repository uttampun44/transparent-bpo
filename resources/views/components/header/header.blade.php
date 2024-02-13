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
                          <a href="">News Login</a>
                     </div>

                     <div class="header_login">
                        <a href="{{url('login')}}"> Login </a>
                     </div>
               </div>
         </div>
    </div>
 </header>
</body>
</html>