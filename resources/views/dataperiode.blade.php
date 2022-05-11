@extends('layout.coloradmin')
@section('username', auth()->user()->name)
@section('level', $level)
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
					<div class="mb-3">
						<a href="#modal-dialog" class="btn btn-sm btn-success" data-bs-toggle="modal">Tambah periode</a>
					</div>
					<div class="table-responsive">
						<table id="database" class="display table table-striped table-hover" >
							<thead>
								<tr>
									<td>Nama periode</td>
									<td>periode mulai</td>
									<td>periode selesai</td>
									<th style="width: 10%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
                                    <td>Nama periode</td>
									<td>periode mulai</td>
									<td>periode selesai</td>
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
					<h4 class="modal-title">Data periode</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>

				<form class="form-horizontal" data-parsley-validate="true" id="datasiswa">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">Nama periode * :</label>
							<input class="form-control form-control-sm" type="text" name="nama_periode" placeholder="nama periode" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">Tanggal mulai * :</label>
							<input class="form-control form-control-sm datepicker" type="text" name="tanggal_mulai" placeholder="tanggal periode mulai" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">Tanggal selesai * :</label>
							<input class="form-control form-control-sm datepicker" type="text" name="tanggal_selesai" placeholder="tanggal periode selesai" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
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
					<h4 class="modal-title">Edit data periode</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<form class="form-horizontal" data-parsley-validate="true" id="editdatasiswa">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label class="form-label" for="fullname">Nama periode * :</label>
							<input class="form-control form-control-sm" type="text" name="nama_periode" placeholder="nama periode" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">Tanggal mulai * :</label>
							<input class="form-control form-control-sm datepicker" type="text" name="tanggal_mulai" placeholder="nama periode" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
						</div>
                        <div class="form-group mb-3">
							<label class="form-label" for="fullname">Tanggal selesai * :</label>
							<input class="form-control form-control-sm datepicker" type="text" id="soldfpicker2" name="tanggal_selesai" placeholder="nama periode" data-parsley-required="true" />
							<ul class="parsley-errors-list filled" aria-hidden="false">
								<li class="parsley-required"></li>
							</ul>
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
		var coba
		var id_model
		const databaase = $("#database").DataTable({
            responsive: true,
            processing: false,
            serverSide: true,
			searching: true,
            ajax: {
                "url": "{{ route('dataperiode.get') }}",
                "type": "POST",
                "data": function(d) {
                    d._token = '{{ csrf_token() }}';
                }
            },
            language: {
                loadingRecords: "Please wait - loading..."
            },
			columns: [
				{ data: "nama_periode" },
				{ data: "tanggal_mulai" },
				{ data: "tanggal_selesai" },
				{ data: "action" }
			],
            pageLength: 7,
        })
		$("#database").on("click",".edit",function () {
			row = this.parentElement.parentElement
			data = databaase.row(row).data()
			form = $("#modal-edit form");
			idx = 1
			id_model = $(this).data("id")
			for (idx; idx < 4;idx++)
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
						url:"{{ route('dataperiode.delete') }}",
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
		// $("#soldfpicker").daterangepicker({
        //     autoclose:true,
		// 	timePickerIncrement: 30,
		// 	locale: {
		// 		format: 'YYYY'
		// 	},
		// 	minViewMode: "years"
		// });

		// $('#soldfpicker').daterangepicker({
		// 	format: "yyyy",
		// 	viewMode: "years", 
		// 	minViewMode: "years"
		// });
		$(".datepicker").yearpicker()
		$("form#datasiswa").submit(function(e){
			e.preventDefault()
			$.ajax({
				type:"post",
				url:"{{ route('dataperiode.add') }}",
				data:$(this).serialize(),
				dataType: "json",
				success:function(e)
				{
					$("#modal-dialog").modal('toggle');
					if (!e.error)
					{
						databaase.row.add(e.datatables).draw()
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
			urlx = '{{ route("dataperiode.update", [":id"]) }}';
			urlx = urlx.replace(':id', id_model);
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