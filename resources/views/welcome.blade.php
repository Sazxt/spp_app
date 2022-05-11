<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <link rel="stylesheet" href="/assets/font.css">
	<link rel="stylesheet" href="/assets/fonts/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/assets/style.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="/assets/css/select2.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- Chart JS -->
	<script src="/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/assets/js/adminlte.min.js"></script>
	<script src="/assets/js/atlantis.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    {!! RecaptchaV3::initJs() !!}

</head>
<body>
    <div class="container" >
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6" >
                <div class="p-3 mt-5 card">
                    <form action="{{ URL::to('/auth-login') }}" method="post">
                        <div class="logo" >
                            <i class="fas fa-user"></i>
                        </div>
                        <h2 class="text-center">SIGN IN</h2>
                        <div>
                            @error('notifikasi')
                            <div class="alert alert-danger mt-2" role="alert">
                              {{ $message }}
                            </div>
                            @enderror

                            {{ csrf_field() }}
                            <hr>
                            <div class="mt-3 input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-user"></i>
                                    </span>
                                <input name="username" class="form-control @error('username') is-invalid @enderror" placeholder="username" type="text" value="{{ old('username') }}"/>
                            </div>
                            <div class="input-icon mt-3">
                                <span class="input-icon-addon">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input name="password"class="form-control @error('password') is-invalid @enderror" placeholder="password" type="password" value="{{ old('password') }}"/>
                            </div>
                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    {!! RecaptchaV3::field('login') !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-check mt-1">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="remember" type="checkbox" value="1" <?= isset($_COOKIE["user"]) ? "checked" : "" ?>>
                                    <span class="form-check-sign">Ingat aku</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-rime rounded submit px-3">Sign In</button>
                            </div>
                            <div class="c" >
                                Blum Punya Akun??? <a href="{{ URL::to('/register') }}" >Create Akun</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<style type="text/css">
.alert{
font-family:mali;
}
body{
height:100vh;
background:#F3F3F3;
}
.c {
    text-align: center;
    padding: 10px;
    font-family: mada;
}

.form-check [type=checkbox]+.form-check-sign:before, .form-check [type=checkbox]:checked+.form-check-sign:before, .form-check [type=checkbox]:not(:checked)+.form-check-sign:before {
    content: '';
    position: absolute;
    left: 0;
    top: 1px;
    width: 16px;
    height: 16px;
    border: 1px solid #0ebf3b !important;
    background: 0 0;
    border-radius: 4px;
}

.btn-rime {
    background: #74d773!important;
    border-color: #28a745!important;
}

.form-check [type=checkbox]+.form-check-sign, .form-check [type=checkbox]:checked+.form-check-sign, .form-check [type=checkbox]:not(:checked)+.form-check-sign {
    position: relative;
    padding-left: 2em;
    color: #38cd66 !important;
    cursor: pointer;
}

.prt{
padding:6px;
background:#6BC9BF;
font-family:Mali;
color:#FFFFFF;
line-height:23px;
border-radius:3px;
}
.logo{
text-align:center;
margin-bottom:10px;
}
.logo > i{
padding:20px;
font-size:70px;
width:110px;
border-radius:80%;
color:#53789C;
border:2px solid #F3F3F3;
}
.buton{
background:transparent;
border:2px solid #3C6EAA;
font-family:maven;
padding:6px;
width:70px;
cursor: pointer;
border-radius:30rem;
}
.buton:hover {
width:100px;
transition:ease .3s width;
}
</style>
<script>

</script>
</html>