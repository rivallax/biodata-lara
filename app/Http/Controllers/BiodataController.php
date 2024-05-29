<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = [
            [
                'name' => 'Rival',
                'alamat' => 'Kota Bandung',
                'telepon' => '08987654321',
                'email' => 'rival@rival.com',
            ],
            // Tambahkan lebih banyak data jika perlu
        ];

        return view('index', [
            'title' => 'My Biodata',
            'biodatas' => $biodatas
        ]);
    }
}
