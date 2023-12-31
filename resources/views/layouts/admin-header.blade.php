<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Admindashboard</title>
    <link rel="stylesheet" href="/css/admindashboard.css" />
    <script src="/js/index.js" defer></script>
</head>
<body>
     <header>
      {{-- {{ }} --}}
          <div class="header_admin_container">
                <div class="header_rows">
                  <div class="header_admin_img">
                        <img src="{{ asset('images/transparent-bpo-logo 1.png')}}" alt="header_logo" />
                  </div>

                  <div class="header_admin_logout">
                    <button type="submit"><a href="{{url('/login')}}">Logout</a></button>
                  </div>

                </div>
          </div>
     </header>
</body>
</html>