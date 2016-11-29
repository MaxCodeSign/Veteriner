<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function preyazdir($yazdir)
    {
        echo '<pre>';
        print_r($yazdir);
        echo '<hr>';
        echo '</pre>';
    }

    //
    public function musteriekle()
    {



        return view('sayfalar.musteriekle');
    }

    //
    public function postmusteriekle(Request $request)
    {
        $mustc=$request->input('mustc');
        $musadi=$request->input('musadi');
        $mussoyad=$request->input('mussoyad');
        $telefon=$request->input('telefon');
        $adres=$request->input('adres');


        DB::table('musteri')->insert([
            'ad'      => $musadi,
            'soyad'   => $mussoyad,
            'telefon' => $telefon,
            'tc'      => $mustc,
            'adres'   => $adres

        ]);


       // $this->preyazdir($request->input());

        return redirect('musteriekle');
    }


    //
    public function posthayvanekle(Request $request)
    {

        $hayvanAdi=$request->input('hayvanAdi');
        $cinsiyet=$request->input('cinsiyet');
        $dogum_tarihi=$request->input('dogum_tarihi');
        $irk=$request->input('irk');
        $tur=$request->input('tur');
        $deri=$request->input('deri');
        $live=$request->input('live');
        $ilkasilar=$request->input('ilkasilar');
         $this->preyazdir($request->input());

    }


    //
    public function musterilistele()
    {
        $musteriler = DB::table('musteri')
            ->get();


        return view('sayfalar.musterilistele',['musteriler' => $musteriler]);
    }


    //
    public function sonhastalar()
    {



        return view('sayfalar.sonhastalar');
    }

    //
    public function asilisteleri()
    {

        $asilar =DB::table('asi_listesi')
            ->get();
        $asiturleri =DB::table('asituru')
            ->get();

        return view('sayfalar.asilisteleri',["asilar"=>$asilar,"asiturleri" =>$asiturleri]);
    }

    //
    public function veterinerbilgileri()
    {



        return view('sayfalar.veterinerbilgileri');
    }

    public function musteriprofil($id=1,$hid=1)
    {
        $musteriler =DB::table('musteri')
            ->where('mus_id',$id)
            ->get();
        $hayvanlar =DB::table('hayvanlar')
            ->where('mus_id',$id)
            ->get();

        $hbilgi=DB::table('hayvanlar')
            ->where('hayvan_id',$hid)
            ->get();


        return view('sayfalar.musteriprofil', ['musteriler' =>$musteriler,'hayvanlar' =>$hayvanlar,'hbilgi' => $hbilgi]
       );
        
    }

    public function hayvanekle()
    {
        $musteriler =DB::table('musteri')
            ->get();

        return view('sayfalar.hayvanekle',compact('musteriler'));

    }
    public function postasiekle(Request $request)
        {
            $asiadi=$request->input('asiadi');
            $asituru=$request->input('asituru');
            $asiresmi="img/avatar5.png";



        DB::table('asi_listesi')->insert([
            'adi'      => $asiadi,
            'turu'   => $asituru,
            'resim'    => $asiresmi


        ]);


        // $this->preyazdir($request->input());

        return redirect('asilisteleri');

    }





}
