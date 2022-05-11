<!DOCTYPE html>
<html lang="en">
 <!-- Mirrored from seantheme.com/color-admin/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 06:56:00 GMT -->
 <head>
  <meta charset="utf-8"/>
  <title>
   Color Admin | Login v3
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="" name="author"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
  <link href="/assets/css/vendor.min.css" rel="stylesheet"/>
  <link href="/assets/css/default/app.min.css" rel="stylesheet"/>
  <script src="https://www.google.com/recaptcha/api.js?render=6Lev9bIeAAAAAOK9n2ApTO8OtCSlO3Ccvh-v75P9"></script>
  {!! ReCaptcha::htmlScriptTagJsApi() !!}
 </head>
 <body class="pace-top">
  <!-- <div id="loader" class="app-loader">

<span class="spinner"></span>

</div> -->
  <div class="app" id="app">
   <div class="login login-with-news-feed">
    <div class="news-feed">
     <div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-11.jpg)">
     </div>
     <div class="news-caption">
      <h4 class="caption-title">
       <b>
        Color
       </b>
       Admin App
      </h4>
      <p>
       Download the Color Admin app for iPhone�, iPad�, and Android�. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
    </div>
    <div class="login-container">
     <div class="login-header mb-30px">
      <div class="brand">
       <div class="d-flex align-items-center">
        <span class="logo">
        </span>
        <b>
         Color
        </b>
        Admin
       </div>
       <small>
        Bootstrap 5 Responsive Admin Template
       </small>
      </div>
      <div class="icon">
       <i class="fa fa-sign-in-alt">
       </i>
      </div>
     </div>
      @if($errors->has("username") || $errors->has("password") || $errors->has('g-recaptcha-response'))
      <div class="alert alert-danger mt-2" role="alert">
        @foreach ($errors->all() as $error)
          {{ $error }}
        @endforeach
      </div>
      @endif
      @if(session()->has("flash_notification"))
      <div class="alert alert-danger mt-2" role="alert">
          {{ session()->get('flash_notification') }}
      </div>
      @endif
     <div class="login-content">
      <form action="{{ URL::to('/auth-login') }}" class="fs-13px" method="POST">
      {{ csrf_field() }}
       <div class="form-floating mb-15px">
        <input name="username" class="form-control h-45px fs-13px  @error('username') is-invalid @enderror" placeholder="Username" type="text" value="{{ old('username') }}"/>
        <label class="d-flex align-items-center fs-13px text-gray-600" for="Username">
         Username
        </label>
       </div>
       <div class="form-floating mb-15px">
        <input name="password" class="form-control h-45px fs-13px  @error('password') is-invalid @enderror" placeholder="Password" type="password" value="{{ old('password') }}"/>
        <label class="d-flex align-items-center fs-13px text-gray-600" for="password">
         Password
        </label>
       </div>
       <div class="form-floating mb-15px">
       {!! htmlFormSnippet() !!}
       </div>
       <div class="form-check mb-30px">
        <input class="form-check-input" id="remember" type="checkbox" value="1"/>
        <label class="form-check-label" for="rememberMe">
         Remember Me
        </label>
       </div>
       <div class="mb-15px">
        <button class="btn btn-success d-block h-45px w-100 btn-lg fs-14px" type="submit">
         Sign me in
        </button>
       </div>
       <div class="mb-40px pb-40px text-inverse">
        Not a member yet? Click
        <a class="text-primary" href="register_v3.html">
         here
        </a>
        to register.
       </div>
       <hr class="bg-gray-600 opacity-2"/>
       <div class="text-gray-600 text-center text-gray-500-darker mb-0">
        � Color Admin All Right Reserved 2021
       </div>

      </form>
     </div>
    </div>
   </div>
   <a class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top" href="javascript:;">
    <i class="fa fa-angle-up">
    </i>
   </a>
  </div>
  <script src="/assets/js/vendor.min.js" type="587b1bda5fbfa971ce63cc84-text/javascript">
  </script>
  <script src="/assets/js/app.min.js" type="587b1bda5fbfa971ce63cc84-text/javascript">
  </script>
  <script src="/assets/js/theme/default.min.js" type="587b1bda5fbfa971ce63cc84-text/javascript">
  </script>
  <script type="587b1bda5fbfa971ce63cc84-text/javascript">
   
  </script>
  <script data-cf-settings="92dce7dff6f56ae1bf3a694f-|49" defer="" src="/assets/js/rocket-loader.min.js">
  </script>
  <script data-cf-beacon='{"rayId":"698c75e1ccfd4661","version":"2021.9.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' defer="" src="/assets/js/v652eace1692a40cfa3763df669d7439c1639079717194.js">
  </script>
 </body>
 <!-- Mirrored from seantheme.com/color-admin/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 06:56:01 GMT -->
</html>