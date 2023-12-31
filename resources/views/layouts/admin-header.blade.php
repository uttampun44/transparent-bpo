<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Admindashboard</title>
    <link rel="stylesheet" href="/css/admindashboard.css" />
</head>
<body>
     <header>
          <div class="header_admin_container">
                <div class="header_rows">
                  <div class="header_admin_img">
                        <img src="{{ asset('images/transparent-bpo-logo 1.png')}}" alt="header_logo" />
                  </div>

                  <div class="header_admin_logout">
                        <form action="{{ url('/') }}" method="post">
                              @csrf
                              <button type="submit"><a href="{{url('/')}}">Logout</a></button>
                          </form>
                  </div>

                </div>
          </div>
     </header>
</body>
</html>