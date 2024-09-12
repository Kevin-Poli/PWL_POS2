<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriCOntroller extends Controller
{
    public function index(){
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        //    ];
        //    DB::table('m_kategori') -> insert($data);
        //    return 'insert data baru berhasil';

        // $row = DB::table('m_kategori') -> where ('kategori_kode', 'SNK') ->update(['kategori_nama'=>'camilan']);
        // return 'Update Data Telah BErhasil. Jumlah dat ayang di update : '.$row.' baris';

        // $row = DB::table('m_kategori') -> where('kategori_kode','SNK') -> delete();
        // return 'Delete Data Telah BErhasil. Jumlah datayang di Hapus : '.$row.' baris';

        $data = DB::table('m_kategori') -> get();
        return view('kategori',['data' => $data]);
    }
   
}
