<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile($nama = "Wildan Humam Alpasya", $kelas = "B", $npm = "2417051064")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }
}