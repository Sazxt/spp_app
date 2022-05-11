<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
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
</head>
<body>
    <div class="container" >
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6" >
                <div class="p-3 mt-5 card">
                    <form action="{{ URL::to('/registercatch') }}" method="post">
                        <div class="logo" >
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div class="prt" >
                                Silahkan daftar akun dengan benar
                            </div>
                            @if (session()->has("success"))
                            <div class="alert alert-success mt-2" role="alert">
                                {{session("success")}}
                            </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <hr>
                            {{ csrf_field() }}
                            <div class="mt-3 input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-user"></i>
                                    </span>
                                <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" type="text" value="{{ old('name') }}"/>
                            </div>
                            <div class="mt-3 input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-user-circle"></i>
                                    </span>
                                <input name="user" class="form-control @error('user') is-invalid @enderror" placeholder="User" type="text" value="{{ old('user') }}"/>
                            </div>
                            <div class="mt-3 input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-crosshairs"></i>
                                    </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            </div>
                            <div class="input-icon mt-3">
                                <span class="input-icon-addon">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password new">
                            </div>
                            <div class="input-icon mt-3">
                                <span class="input-icon-addon">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password confirm">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">Siswa</option>
                                    <option value="3">Vendor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-rime rounded submit px-3">Sign Up</button>
                            </div>
                            <div class="c" >
                                sudah Punya Akun??? <a href="{{ URL::to('/') }}" >Login</a>
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
</html>