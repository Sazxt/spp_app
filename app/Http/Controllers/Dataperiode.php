<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Periode;
use Yajra\Datatables\Datatables;
use App\Models\User;

class Dataperiode extends Controller
{
    public function index(Request $request)
    {
        $level = User::levelfiter();
        return view("dataperiode",["level" => $level, "pages" => "Data periode"]);
    }

    public function dataperiodeget(Request $request)
    {
        if ($request->ajax())
        {
            $data = Periode::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id_periode;
                $actionBtn = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function dataperiodeadd(Request $request)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_periode' => 'required|unique:periode',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            $data = Periode::create($data);
            $id = $data->id_periode;
            $data["action"] = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di tambah!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function dataperiodeupdate(Request $request, $id)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_periode' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            Periode::find($id)->update($data);
            $data["action"] = '<button class="btn btn-info btn-xs detail" data-id="'.$id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di update!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function dataperiodedelete(Request $request)
    {
        if ($request->ajax())
        {
            return Periode::find($request->id)->delete();
        }
    }
}
