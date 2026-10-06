<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

class ProfileController extends Controller
{
     public function profile($nama = "", $kelas = "", $npm = "")
    
    {
        $data = [
            'nama' => 'm.adeib syahputra',
            'kelas' => 'A',
            'npm' => '2457051006'
=======
class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
>>>>>>> 910b4f2 (Initial project setup)
        ];

        return view('profile', $data);
    }
}