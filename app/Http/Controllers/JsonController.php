<?php

namespace App\Http\Controllers;

use DB;

use App\Http\Requests;

class JsonController extends Controller
{


    public function j_musterilistele($id)
    {
        $musteriler = DB::table('musteri')
            ->where('mus_id',$id)
            ->get();

        echo json_encode($musteriler);
    }

    //
    public function j_mushayvan($id)
    {
        $mushayvan = DB::table('hayvanlar')
            ->where('mus_id',$id)
            ->get();

       echo json_encode($mushayvan);
    }



    //
    public function j_veterinerbilgileri($id)
    {

        $vetbilgi =DB::table('iletisim_bilgileri')
            ->where('product_id',$id)
            ->get();

        echo json_encode($vetbilgi);

    }

    //
    public function j_veteriner_imzasi($id)
    {

        $vetimza =DB::table('veteriner_imzasi')
            ->where('product_id',$id)
            ->get();

        echo json_encode($vetimza);

    }

    //
    public function j_hayvanasi($hid)
    {

        $hayvanasi =DB::table('hayvan_asilari')
            ->where('hayvan_id',$hid)
            ->get();

        echo json_encode($hayvanasi);

    }

    //
    public function j_mesaj($pid)
    {

        $mesaj =DB::table('mesaj')
            ->where('product_id',$pid)
            ->get();

        echo json_encode($mesaj);

    }







}
