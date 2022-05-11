@extends('layout.coloradmin')
@section('username', auth()->user()->name)
@section('level', $level)
@php use Illuminate\Support\Facades\DB; @endphp
@php $yuser = auth()->user()->username; @endphp
@php $siswa = DB::select("select * from siswa where nisn = '$yuser'")[0] @endphp
@php $spp = DB::select('select * from spp where id_siswa = '.$siswa->id) @endphp
@section('css-include')
	<link href="{{ asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select-picker/dist/picker.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('yearpicker/yearpicker.css') }}" rel="stylesheet" />

	<style>
		#database
		{
			width: inherit !important;
		}
        body .daterangepicker
        {
            z-index: 1096 !important;
        }
        .pos-stock .pos-stock-header
        {
            position: unset;
        }
        .pos-stock
        {
            padding-top: unset;
        }
        .pos-stock .pos-stock-body
        {
            background: white;
        }
	</style>
@endsection
@section('content')
    <div class="row">
		<div class="col-xl-12">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">DataTable - Responsive</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
                    <div class="pos pos-stock" id="pos-stock">
                        <div class="pos-stock-header">
                        <div class="logo">
                            <a href="pos_counter_checkout.html">
                            <!-- <div class="logo-img">
                                <img src="../assets/img/pos/logo.svg" />
                            </div> -->
                            <div class="logo-text">Pembayaran SPP</div>
                            </a>
                        </div>
                        <div class="time" id="time">00:00</div>
                        <div class="nav">
                            <div class="nav-item">
                            <a href="pos_kitchen_order.html" class="nav-link">
                                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8zm5.48-.079V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6zm0 3.75V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141z" />
                                </svg>
                            </a>
                            </div>
                            <div class="nav-item">
                            <a href="pos_table_booking.html" class="nav-link">
                                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                </svg>
                            </a>
                            </div>
                            <div class="nav-item">
                            <a href="pos_menu_stock.html" class="nav-link">
                                <svg viewBox="0 0 16 16" class="nav-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M7.5 7.793V1h1v6.5H15v1H8.207l-4.853 4.854-.708-.708L7.5 7.793z" />
                                </svg>
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="pos-stock-body">
                            <div class="pos-stock-content">
                                <div class="pos-stock-content-container">
                                    <div class="row gx-0">
                                        @foreach ($spp as $pp)
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <div class="pos-stock-product">
                                                <div class="pos-stock-product-container">
                                                    <div class="product">
                                                        <!-- <div class="product-img">
                                                            <div class="img" style="background-image: url(https://pasca.isi.ac.id/wp-content/uploads/2019/01/icon-pembayaran-png-5.png)"></div>
                                                        </div> -->
                                                        <div class="product-info">
                                                            <div class="title">{{ $pp->bulan }}</div>
                                                                <div class="desc">sebelum {{date("t/m/Y", strtotime($pp->bulan))}}</div>
                                                                    <div class="product-option">
                                                                        <div class="option">
                                                                            <div class="option-label">Total:</div>
                                                                        </div>
                                                                        {{ $pp->biaya }}
                                                                </div>
                                                            </div>
                                                        <div class="product-action">
                                                            <a id="bayar" data-id="{{ $pp->id }}" href="#modal-dialog" data-bs-toggle="modal" class="btn btn-success">
                                                                <i class="fa fa-check fa-fw"></i> Bayar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <div class="modal fade" id="modal-dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Pembayaran</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<form class="form-horizontal" data-parsley-validate="true" id="datasiswa">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">atas nama * :</label>
							<input class="form-control form-control-sm" type="text" name="nama" placeholder="nama" data-parsley-required="true" />
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">tipe pembayaran :</label>
							<select class="default-select2 form-control" name="jenis_kelamin">
								<optgroup label="Pilih jenis pembayaran">
									<option value="L">Online</option>
									<option value="P">Offline</option>
								</optgroup>
							</select>
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">Bukti pembayaran * :</label>
							<input class="form-control form-control-sm" type="file" name="nama" accept="image/png, image/gif, image/jpeg" placeholder="nama" data-parsley-required="true" />
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
						<button class="btn btn-success" type="submit">save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('js-include')
    <script src="{{ asset('assets/plugins/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/select-picker/dist/picker.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/processingdata.js') }}"></script>
	<script src="{{ asset('yearpicker/yearpicker.js') }}"></script>
	<script>
        (function() {
            $(".pos-stock-product").on("click","#bayar",function(){
                id = $(this).data("id")
                url = '{{ route("dataagama.update", [":id"]) }}';
                url = urlx.replace(':id', id);
                $.ajax({
                    type: "POST",
                    url: url,
                    // dataType: "JSON",
                    success: function (e){
                        console.log(e)
                    }
                });
            })
        })();
	</script>
@endsection