<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Penup - Admin Login</title>
      <link rel="shortcut icon" href="{{asset('admin_assets/assets/img/favicon.png')}}">
      <link rel="stylesheet" href="{{asset('admin_assets/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_assets/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_assets/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_assets/assets/css/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
   </head>
   <body>
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <img class="img-fluid logo-dark mb-2" src="{{asset('admin_assets/assets/img/logo.png')}}" alt="Logo">
               <div class="loginbox">
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form action="{{route('signIn')}}" method="post">
                            @csrf
                           <div class="form-group">
                              <label class="form-control-label">Email Address</label>
                              <input type="email" name="email"  value="{{old('email')}}" class="form-control">
                              @error('email')
                                <span class="form-error">{{ $message }}</span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <label class="form-control-label">Password</label>
                              <div class="pass-group">
                                 <input type="password" value="{{old('password')}}" name="password" class="form-control pass-input">
                                 <!--span class="fas fa-eye toggle-password"></span-->
                                @error('password')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="cb1">
                                       <label class="custom-control-label" for="cb1">Remember me</label>
                                    </div>
                                 </div>
                                 <div class="col-6 text-right">
                                    <a class="forgot-link" href="">Forgot Password ?</a>
                                 </div>
                              </div>
                           </div>
                           <button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('admin_assets/assets/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('admin_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('admin_assets/assets/js/script.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      @if ($errors->has('errorMess'))
         <script>
            toastr.error('Invalid Details! Please try agian')
         </script>
      @endif
      @if ($errors->has('successMess'))
         <script>
            toastr.success('Admin Login Successfully!');
            setTimeout(function(){ 
               window.location.href = "{{route('dashboard')}}";
            }, 3000);
         </script>
      @endif
      @if ($errors->has('notInMess'))
         <script>
            toastr.info("You don't have admin access!")
         </script>
      @endif
   </body>
</html>