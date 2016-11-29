@extends('layouts.app')

@section('contentheader_title','Müşteri Listele')
@section('contentheader_description','Müşteri Listele')

@section('main-content')

    <div class="col-sm-12">
        @section ('htable_panel_title','Kullanicilar')

        <table class="table table-hover ">
            <thead>
            <tr>
                <th>AD</th>
                <th>SOYAD</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Şehir/İlçe</th>
                <th>&nbsp</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>dsadsada</td>
                    <td>dsadsada</td>
                    <td>dsadsada</td>
                    <td>dsadsada</td>
                    <td>dsadsada</td>
                    <td><button type="button" class="btn btn-succes">Profil </button> </td>

                </tr>


            </tbody>
        </table>

    </div>



@endsection