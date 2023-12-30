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
                                      <form method="POST" action="{{url('/')}}/formdata">
                                        @csrf
                                           <div class="grid_cols">
                                             <div class="form_explore">
                                                <label for="explore">Explore open career opportunities</label>
                                             </div>

                                             <div class="input_email_password">
                                                <input type="text" name="email" placeholder="Email or Username" value="{{old('email')}}" />
                                                @error('email')
                                                    {{$message}}
                                                @enderror
                                                <input type="password" name="password" placeholder="Password" />
                                                @error('password')
                                                      {{$message}}
                                                @enderror
                                                <input type="text" name="phone" placeholder="phone" value="{{old('phone')}}"/>
                                                    @error('phone')
                                                       {{$message}}
                                                    @enderror
                                                <select name="profession">
                                                    <option>Job Seeker</option>
                                                    <option>Employer</option>
                                                </select>
                                             </div>

                                             <div class="login_submit">
                                              <input type="submit" name="submit" value="Register" />
                                             </div>

                                             <div class="register">
                                                 <label>Already have an account?</label>&nbsp;<a href="{{url('login')}}">Login</a>
                                             </div>

                                             @if(Session::has('Success'))
                                                  <div class="register_success"><p>Register Sucessfully</p> </div>
                                             @endif
                                               @if(Session::has('Fail'))
                                                   <div class="fail_register"><p>Fail to register</p></div>
                                               @endif
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