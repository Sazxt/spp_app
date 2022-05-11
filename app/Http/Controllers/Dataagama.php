<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Agama;
use Yajra\Datatables\Datatables;
use App\Models\User;

class Dataagama extends Controller
{
    public function index(Request $request)
    {
        $level = User::levelfiter();
        return view("dataagama",["level" => $level, "pages" => "Data agama"]);
    }

    public function dataagamaget(Request $request)
    {
        if ($request->ajax())
        {
            $data = Agama::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id_agama;
                $actionBtn = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function dataagamaadd(Request $request)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_agama' => 'required|unique:agama|alpha_dash'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            $data = Agama::create($data);
            $id = $data->id_agama;
            $data["action"] = '<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di tambah!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function dataagamaupdate(Request $request, $id)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nama_agama' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            Agama::find($id)->update($data);
            $data["action"] = '<button class="btn btn-info btn-xs detail" data-id="'.$id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di update!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function dataagamadelete(Request $request)
    {
        if ($request->ajax())
        {
            return Agama::find($request->id)->delete();
        }
    }
}
