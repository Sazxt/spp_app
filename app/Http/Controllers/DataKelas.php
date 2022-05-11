<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use App\Models\Kelas;
use App\Models\User;

class DataKelas extends Controller
{
    public function index(Request $request)
    {
        $level = User::levelfiter();
        return view("datakelas",["level" => $level, "pages" => "Data kelas"]);
    }

    public function datakelasget(Request $request)
    {
        if ($request->ajax())
        {
            $data = Kelas::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id_kelas;
                $actionBtn = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function datakelasadd(Request $request)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_kelas' => 'required|unique:kelas|alpha_dash',
                'sub_kelas' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            $data = Kelas::create($data);
            $id = $data->id_kelas;
            $data["action"] = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di tambah!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function datakelasupdate(Request $request, $id)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_kelas' => 'required',
                'sub_kelas' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            Kelas::find($id)->update($data);
            $data["action"] = '<button class="btn btn-info btn-xs detail" data-id="'.$id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di update!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function datakelasdelete(Request $request)
    {
        if ($request->ajax())
        {
            return Kelas::find($request->id)->delete();
        }
    }
}
