<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transparent BPO</title>
    <link rel="stylesheet"  href="/css/login.css"/>
</head>
<body>
   <main>
       <section>
           <div class="login_container">
                <div class="login_cols">
                       <div class="login_cols_one">
                           <img src="{{asset('images/login_image.jpg')}}"  alt="login_image"/>
                       </div>

                       <div class="login_cols_two">
                            <div class="form_container">
                                  <div class="home_redirect">
                                      <a href="{{url('/')}}">Home</a>
                                  </div>
                                  <div class="form_icon">
                                      <img src="{{asset('images/login_form.png')}}"  alt="form_login_icon"/>
                                  </div>
                                  <div class="login_title">
                                      <p>Login to your account.</p>
                                      <form method="POST" action="">
                                        @csrf
                                           <div class="grid_cols">
                                             <div class="form_explore">
                                                <label for="explore">Explore open career opportunities</label>
                                             </div>

                                             <div class="input_email_password">
                                                <input type="text" name="username_email" placeholder="Email or Username" />
                                                <input type="password" name="password" placeholder="Password" />
                                                <input type="text" name="phone" placeholder="phone" />
                                             </div>

                                             <div class="login_submit">
                                              <input type="submit" name="submit" value="Register" />
                                             </div>

                                             <div class="register">
                                                 <label>Already have an account?</label>&nbsp;<a href="{{route('login')}}">Login</a>
                                             </div>
                                         </div>
                                      </form>
                                  </div>
                            </div>
                       </div>
                </div>
           </div>
       </section>
   </main>
</body>
</html>