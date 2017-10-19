<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\course;
use App\assignments;
use App\report;

class StudentDataController extends Controller
{
 function SaveUpdate(){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'name' => 'required'
            ]);
            $mahasiswa = new Mahasiswa;
            $mahasiswa->name = $req->input('name');
            $mahasiswa->save();
            DB::commit();
            return response()->json($mahasiswa, 201);
        }
    catch(\Exception $e){
            DB::rollback();
            return response()->json(['message'=>'Data tidak tersimpan:' + $e], 500);
    }
  }
    function UpdateMahasiswa(Request $req){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'id' => 'required',
                'name' => 'required'
            ]);
            $id = $req->input('id');
            $name = $req->input('name');
            $updateMahasiswa = DB::table('Mahasiswas')
            ->where('id', $id)
            ->update(['name' => $name]);
            DB::commit();
            return response()->json(['message' => 'Sukses update data murid'], 201);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message' => 'gagal update data baru, exception:' + $e], 500);
        }
    }
}

