<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard'

        date_default_timezone_set('Asia/Jakarta'); // Set zona waktu ke WIB

        $nama = "Adil"; // Ganti dengan nama kamu
        $jam = date('H:i:s');
        $tanggal = $this->getTanggal();

        $hour = date('H');
        if ($hour >= 5 && $hour <= 11) {
            $salam = "Selamat Pagi";
        } elseif ($hour >= 12 && $hour <= 14) {
            $salam = "Selamat Siang";
        } elseif ($hour >= 15 && $hour <= 17) {
            $salam = "Selamat Sore";
        } else {
            $salam = "Selamat Malam";
        }

        return view('dashboard', compact('salam', 'nama', 'jam', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}