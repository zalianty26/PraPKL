<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nama_controllernya extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Zalianty Dwi Bintara";
        $umur = "17";
        return view('pages1.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages1.intro', compact('nama', 'alamat', 'umur'));
        //tampilan output
        //localhost.8000/zalianty/bmi/17
    }

    public function siswa()
    {
        $a = [
            array('id' =>1, 'nama' => 'safitri', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['B.Indonesia', 'B.Inggris']),
            array('id' =>1, 'nama' => 'surya', 'umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['MTK', 'IPA']),
            array('id' =>1, 'nama' => 'rohesa', 'umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['SIMDIG', 'B.SUNDA']),
            array('id' =>1, 'nama' => 'risnadia', 'umur' => 16, 'kelas' => 'XII RPL 3', 'mapel' => ['FISIKA', 'KWU']),
            array('id' =>1, 'nama' => 'zay', 'umur' => 17, 'kelas' => 'XII RPL 2', 'mapel' => ['PAI', 'AL-QURAN']),
        ];
        //melihat data dumy basis json
        //dd($a);

        //melakukan Passing data looping conditional dari controller ke view
        return view('/pages1.siswa', ['siswa' => $a]);
    }

}