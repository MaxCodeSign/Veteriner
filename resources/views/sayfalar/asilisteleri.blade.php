@extends('layouts.app')

@section('contentheader_title','Aşı Listeleri')

@section('main-content')
    <div class="container">

        <div class="col-md-6" id="asilar">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Asilar</h3>
                </div>

                <div class="box-body">
                    <div class="box">

                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                @foreach($asilar as $asi)
                                <tr>
                                    <td style="width: 30px;"> #{{$asi->asi_id}}</td>
                                    <td style="width: 130px;">
                                        <img class="profile-user-img " src="{{asset($asi->resim)}}" alt="Asi Resmi" width="50" height="50">
                                    </td>
                                    <td>
                                     {{$asi->adi}}
                                    </td>
                                    <td>
                                        {{$asi->turu}}
                                    </td>
                                    <td style="width: 130px;">
                                        <a href="{{url("")}}" class="btn  btn-primary">Duzelt</a>
                                        <a href="{{url("")}}" class="btn  btn-danger">Sil</a>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div style="float: right;" class="box-footer">
                            <button type="submit" id="btn-asiekle" class="btn btn-primary">Asi Ekle</button>
                        </div>

                    </div>

                </div>


                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>

        <div class="col-md-5" id="asiForm">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Asi Ekle</h3>
                </div>

                <div class="box-body">
                    <form class="form" id="asiekle" role="form" method="POST" action="{{ url('asiekle') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="asiadi" >ASi ADi</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="asiadi" class="form-control" placeholder="Asi Adi">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="form-group col-md-10">
                            <label>Asi Turu</label>
                            <select class="form-control" name="asituru" form="asiekle">
                                <option  >ASi Turu Seciniz</option>
                                @foreach($asiturleri as $asituru)
                                <option value="{{$asituru->asituru}}"  >{{$asituru->asituru}}</option>

                                    @endforeach

                            </select>
                            </div>
                            <div class="form-group col-md-2">
                                <button  class="btn btn-primary" style="margin-top: 23px;" id="btn-diger">Diger</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="yenitur" >Yeni Tur Ekle</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="yenitur" class="form-control" placeholder="Yeni Tur ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Asi Resmi Ekle</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Bla bla bla</p>
                        </div>



                        <div class="box-footer" style="float: right;">
                            <button type="submit" class="btn btn-primary" id="btn-asiekle">Ekle</button>
                        </div>

                    </form>

                </div>



                <!-- /.box-body -->
            </div>
            <!-- /.box -->




        </div>


    </div>



@endsection