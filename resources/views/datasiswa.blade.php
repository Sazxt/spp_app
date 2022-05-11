@extends('layout.coloradmin')
@section('username', auth()->user()->name)
@section('level', $level)
@section('css-include')
	<link href="{{ asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select-picker/dist/picker.min.css') }}" rel="stylesheet" />

	<style>
		#database
		{
			width: inherit !important;
		}
	</style>
@endsection
@section('content')
@php use App\Models\Agama; @endphp
@php use App\Models\Kelas; @endphp
@php $agama = Agama::all(); @endphp
@php $kelas = Kelas::all(); @endphp

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
					<div class="mb-3">
						<a href="#modal-dialog" class="btn btn-sm btn-success" data-bs-toggle="modal">Tambah siswa</a>
					</div>
					<div class="table-responsive">
						<table id="database" class="display table table-striped table-hover" >
							<thead>
								<tr>
									<td>NISN</td>
									<td>Nama</td>
									<td>Jenis Kelamin</td>
									<td>Alamat</td>
									<td>Kelas</td>
									<th style="width: 10%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<td>NISN</td>
									<td>Nama</td>
									<td>Jenis Kelamin</td>
									<td>Alamat</td>
									<td>Kelas</td>
									<th style="width: 10%" class="text-center">Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Data siswa</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>

				<form class="form-horizontal" data-parsley-validate="true" id="datasiswa">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">NISN * :</label>
							<input class="form-control form-control-sm" type="number" name="nisn" placeholder="nisn"  data-parsley-type="number" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" id="nisnerror" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">nama * :</label>
							<input class="form-control form-control-sm" type="text" name="nama" placeholder="nama" data-parsley-required="true" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">jenis kelamin :</label>
							<select class="default-select2 form-control" name="jenis_kelamin">
								<optgroup label="Pilih jenis kelamin">
									<option value="L">Laki</option>
									<option value="P">Prempuan</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">agama :</label>
							<select class="default-select2 form-control" name="id_agama">
								<optgroup label="Pilih agama">
									@foreach ($agama as $value)
									<option value="{{$value->id_agama}}">{{$value->nama_agama}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">alamat :</label>
							<input class="form-control form-control-sm" type="text" name="alamat" placeholder="alamat" data-parsley-required="true" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">no telepon :</label>
							<input class="form-control form-control-sm" type="text" name="telepon" placeholder="telepon" data-parsley-type="number" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">tahun ajaran :</label>
							<select class="default-select2 form-control" name="tahun_ajaran">
								<optgroup label="Pilih tahun ajaran">
									<option>2018/20180</option>
									<option>2012/2012</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">kelas :</label>
							<select class="default-select2 form-control" name="id_kelas">
								<optgroup label="Pilih kelas">
									@foreach ($kelas as $value)
									<option value="{{$value->id_kelas}}">{{$value->nama_kelas}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">wali kelas * :</label>
							<input class="form-control form-control-sm" type="text" name="wali_kelas" placeholder="wali kelas" data-parsley-required="true" />
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
	<div class="modal fade" id="modal-edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit data siswa</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<form class="form-horizontal" data-parsley-validate="true" id="editdatasiswa">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">NISN * :</label>
							<input class="form-control form-control-sm" type="number" name="nisn" placeholder="nisn"  data-parsley-type="number" data-parsley-required="true" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">nama * :</label>
							<input class="form-control form-control-sm" type="text" name="nama" placeholder="nama" data-parsley-required="true" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">jenis kelamin :</label>
							<select class="default-select2 form-control" name="jenis_kelamin">
								<optgroup label="Pilih jenis kelamin">
									<option value="L">Laki</option>
									<option value="P">Prempuan</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">agama :</label>
							<select class="default-select2 form-control" name="id_agama">
								<optgroup label="Pilih agama">
									@foreach ($agama as $value)
									<option value="{{$value->id_agama}}">{{$value->nama_agama}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">alamat :</label>
							<input class="form-control form-control-sm" type="text" name="alamat" placeholder="alamat" data-parsley-required="true" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">no telepon :</label>
							<input class="form-control form-control-sm" type="text" name="telepon" placeholder="telepon" data-parsley-type="number" />
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">tahun ajaran :</label>
							<select class="default-select2 form-control" name="tahun_ajaran">
								<optgroup label="Pilih tahun ajaran">
									<option>2018/20180</option>
									<option>2012/2012</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">kelas :</label>
							<select class="default-select2 form-control" name="id_kelas">
								<optgroup label="Pilih kelas">
									@foreach ($kelas as $value)
									<option value="{{$value->id_kelas}}">{{$value->nama_kelas}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">wali kelas * :</label>
							<input class="form-control form-control-sm" type="text" name="wali_kelas" placeholder="wali kelas" data-parsley-required="true" />
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
						<button class="btn btn-success" type="submit">update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('js-include')
	<script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/select-picker/dist/picker.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/processingdata.js') }}"></script>
	<script>
		var coba
		var id_siswa
		const databaase = $("#database").DataTable({
            responsive: true,
            processing: false,
            serverSide: true,
			searching: true,
            ajax: {
                "url": "{{ route('datasiswa.get') }}",
                "type": "POST",
                "data": function(d) {
                    d._token = '{{ csrf_token() }}';
                }
            },
            language: {
                loadingRecords: "Please wait - loading..."
            },
			columns: [
				{ data: "nisn" },
				{ data: "nama" },
				{ data: "jenis_kelamin" , render: function (data, type, row) {
                    if ("L" == data) return "Laki"
					else return "Prempuan"
                }},
				{ data: "alamat" },
				{ data: "kelas_nama" },
				{ data: "action" }
			],
            pageLength: 7,
        })
		$("#database").on("click",".edit",function () {
			row = this.parentElement.parentElement
			data = databaase.row(row).data()
			form = $("#modal-edit form");
			idx = 1
			id_siswa = $(this).data("id")
			for (idx; idx < 10;idx++)
			{
				$(form)[0][idx].value = data[$(form)[0][idx].name]
			}
		})

		$("#database").on("click",".hapus",function () {
			row = this.parentElement.parentElement.parentElement
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				buttons:{
					confirm: {
						text : 'Yes, delete it!',
						className : 'btn btn-success'
						},
					cancel: {
						visible: true,
						className: 'btn btn-danger'
						}
					}
			}).then((Delete) => {
				if (Delete)
				{
					$.ajax({
						type:"post",
						url:"{{ route('datasiswa.delete') }}",
						data:{
							_token: '{{ csrf_token() }}',
							id:$(this).data("id")
						},
						success:function(e)
						{
							databaase.row(row).remove().draw()
							swal({
								title: 'Deleted!',
								text: 'Your Data has been deleted.',
								type: 'info',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
						}
					})
				}
				else
				{
					swal.close();
				}
			});
		})


		$('#ex-search').picker({ search: false });
		$("#datepicker-default").datepicker({
			todayHighlight: true,
			autoclose: true
		});
		$("form#datasiswa").submit(function(e){
			e.preventDefault()
			$.ajax({
				type:"post",
				url:"{{ route('datasiswa.add') }}",
				data:$(this).serialize(),
				dataType: "json",
				success:function(e)
				{
					databaase.row.add(e.datatables).draw()
					if (!e.error)
					{
						$("#modal-dialog").modal('toggle');
						swal({
							title: `${e.message}`,
							icon: 'success'
						});
					}
					else
					{
						return
					}
				}
			})
		})

		$("form#editdatasiswa").submit(function(e){
			e.preventDefault()
			urlx = '{{ route("datasiswa.update", [":id"]) }}';
			urlx = urlx.replace(':id', id_siswa);
			$.ajax({
				type:"post",
				url:urlx,
				data:$(this).serialize(),
				dataType: "json",
				beforeSend:function()
				{
					$("#modal-edit").modal('hide');
				},
				success:function(e)
				{
					if (!e.error)
					{
						swal({
							title: `${e.message}`,
							icon: 'info'
						});
						coba = e.datatables
						// let index = 0
						// let data = e.datatables
						// for (e in data)
						// {
						// 	console.log(data[e])
						// 	databaase.cell(row,index).data(data[e])
						// 	index++;
						// }
						$('#database').dataTable().api().ajax.reload();
					}
					else
					{
						// form = $("#modal-edit form")
						// if ("nisn" in e.message)
						// {
						// 	// $(form[0]).find(`input[name="nisn"]`).parent().append(`<ul class="parsley-errors-list filled" id="parsley-id-5" aria-hidden="false"><li class="parsley-required">${e.message["nisn"]}</li></ul>`)
						// 	e.message
						// }
						return
					}
				}
			})
		})
	</script>
@endsection