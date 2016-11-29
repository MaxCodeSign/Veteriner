@extends('layouts.app')

@section('contentheader_title','Hayvan Ekle')

@section('main-content')

    <div class="container">

        <div class="col-md-5" id="hayForm">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Hayvan Ekle</h3>
                </div>

                <div class="box-body">
                    <form class="form" id="hayvanekle" role="form" method="POST" action="{{ url('hayvanekle') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="musid" form="hayvanekle">
                                @foreach($musteriler as $musteri)
                                <option value="{{$musteri->mus_id}}">{{$musteri->ad}} {{$musteri->soyad}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hayvan Adi</label>

                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" name="hayvanAdi" class="form-control" placeholder="Hayvan Adi" id="hayvanAdi">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <label>Cinsiyet</label>
                            <select class="form-control" name="cinsiyet" form="hayvanekle">
                                <option value="">Cinsiyet</option>
                                <option value="Erkek">Erkek</option>
                                <option value="Disi" >Disi</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dogum Tarihi</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="dogum_tarihi" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" >Irki</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="irk" class="form-control" placeholder="Irk">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" >Turu</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="tur" class="form-control" placeholder="Tur">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" >Deri Rengi</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="deri" class="form-control" placeholder="Deri Rengi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Live</label>
                            <select class="form-control" name="live" form="hayvanekle">
                                <option value="yasiyor">Yasiyor</option>
                                <option value="oldu" >Oldu</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Ilk Asilar</label>
                            <select class="form-control" name="ilkasilar" form="hayvanekle">
                                <option value="true"  >True</option>
                                <option value="false" >False</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Resim Ekle</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>



                        <div class="box-footer" style="float: right;">
                            <button type="submit" class="btn btn-primary" id="btn-hayvanekle">Hayvan Ekle</button>
                        </div>

                    </form>

                </div>



                <!-- /.box-body -->
            </div>
            <!-- /.box -->




        </div>
    </div>


@endsection