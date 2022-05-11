<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\spp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Datasiswa extends Controller
{
    protected $datys = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    public function index(Request $request)
    {
        $level = User::levelfiter();
        return view("datasiswa",["level" => $level, "pages" => "Data siswa"]);
    }

    public function cobaexpreint(Request $request)
    {
        dd(Kelas::find("4"));
    }

    public function datasiswadelete(Request $request)
    {
        if ($request->ajax())
        {
            $siswa = Siswa::find($request->id);
            User::where("username",$siswa->nisn)->delete();
            spp::where("id_siswa",$siswa->id)->delete();
            return $siswa->delete();
        }
    }

    public function datasiswaadd(Request $request)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nisn' => 'required|unique:siswa|alpha_dash',
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'id_agama' => 'required',
                'alamat' => 'required',
                'telepon' => 'required|alpha_dash',
                'tahun_ajaran' => 'required',
                'id_kelas' => 'required',
                'wali_kelas' => 'required'
            ]);
            $biayassp_perbulan = "43600000";
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            $data = Siswa::create($data);
            $data["kelas_nama"] = Kelas::find($data["id_kelas"]);

            foreach ($this->datys as $bulan)
            {
                spp::create([
                    "id_siswa" => $data["id"],
                    "biaya" => $biayassp_perbulan,
                    "bulan" => $bulan
                ]);
            }

            User::create([
                'username' => $request->nisn,
                'name' => $request->nama,
                'level' => 3,
                'password' => Hash::make("1234567890")
            ]);
            $data["action"] = '<button class="btn btn-info btn-xs detail" data-id="'.$data->id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$data->id.'" data-bs-toggle="modal" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$data->id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di tambah!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function datasiswaupdate(Request $request, $id)
    {
        if ($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'nisn' => 'required|alpha_dash',
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'id_agama' => 'required',
                'alamat' => 'required',
                'telepon' => 'required|alpha_dash',
                'tahun_ajaran' => 'required',
                'id_kelas' => 'required',
                'wali_kelas' => 'required'
            ]);
            if ($validator->fails())
            {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()]
                );
            }
            $data = ($validator->validated());
            Siswa::find($id)->update($data);
            $data["action"] = '<button class="btn btn-info btn-xs detail" data-id="'.$id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
            return response()->json([
                    'error' => false,
                    'message' => 'Data berhasil di update!',
                    'datatables' => $data
                ]
            );
        }
    }

    public function datasiswaget(Request $request)
    {
        if ($request->ajax())
        {
            $data = collect(DB::select('select siswa.id,siswa.nisn,siswa.nama,siswa.jenis_kelamin,siswa.id_agama,agama.nama_agama as agama_nama, siswa.alamat,siswa.telepon, siswa.tahun_ajaran,siswa.id_kelas,kelas.nama_kelas as kelas_nama,siswa.wali_kelas from siswa join kelas on siswa.id_kelas = kelas.id_kelas join agama on siswa.id_agama = agama.id_agama'));
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id;
                $actionBtn = '<button class="btn btn-info btn-xs detail" data-id="'.$id.'"><i class="fa fa-search-location" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-primary btn-xs edit" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modal-edit" ><i class="fas fa-edit" style="font-size: 10px;"></i></button>&nbsp;<button class="btn btn-danger btn-xs hapus" data-id="'.$id.'"><i class="fas fa-trash" style="font-size: 10px;"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }
}
