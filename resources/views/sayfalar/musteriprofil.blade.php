@extends('layouts.app')

@section('contentheader_title','Müşteri Profil')

@section('main-content')

    <div class="container">

        <div class="col-md-6">

            <div class="box box-primary col-md-12">
                <div class="box-body box-profile">
                    @foreach($musteriler as $musteri)

                        <div class="row">

                            <ul class="list-group list-group-unbordered">

                                <div class="col-md-4">

                                    <li class="list-group-item" >
                                        <img class="profile-user-img img-responsive img-circle" src="{{asset('img/avatar5.png')}}" alt="User profile picture">

                                        <h3 class="profile-username text-center">{{$musteri->ad}} {{$musteri->soyad}}</h3>
                                    </li>

                                </div>

                                <div class="col-md-8">
                                    <li class="list-group-item"  >
                                        <b>T.C.</b> <a class="pull-right">{{$musteri->tc}}</a>
                                    </li>
                                    <li class="list-group-item"  >
                                        <b>Telefon</b> <a class="pull-right">{{$musteri->telefon}}</a>
                                    </li>

                                    <li class="list-group-item"  >
                                        <b>Adres</b> <a class="pull-right">{{$musteri->adres}}</a>
                                    </li>
                                    <li class="list-group-item"  >
                                        <a href="#" class="btn btn-primary btn-block"><b>Musteri </b></a>
                                    </li>

                                </div>

                            </ul>

                        </div>


                    @endforeach
                </div>
                <!-- /.box-body -->
            </div>


            <div class="col-md-12">

                <div class="row">
                    @if(!empty($hayvanlar))
                        @foreach($hayvanlar as  $hayvan)



                            <div class="col-md-6">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-aqua-active">
                                        <h3 class="widget-user-username">{{$hayvan->adi}}</h3>
                                        <h5 class="widget-user-desc">{{$hayvan->irk}} &amp; {{$hayvan->tur}}</h5>
                                    </div>
                                    <a href="{{url('musteriprofil/'.$hayvan->mus_id.'/'.$hayvan->hayvan_id)}}">
                                        <div class="widget-user-image">
                                            <img class="img-circle" src="{{asset('img/user1-128x128.jpg')}}" alt="User Avatar">
                                        </div>
                                    </a>
                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-sm-3 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header">Kurku</h5>
                                                    <span class="description-text">{{$hayvan->coat}}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-5 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header">Dogum Tarihi</h5>
                                                    <span class="description-text">{{$hayvan->dogum_tarihi}}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-3">
                                                <div class="description-block">
                                                    <h5 class="description-header">Live</h5>
                                                    <span class="description-text">{{$hayvan->live}}</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>



                        @endforeach
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                     Hayvanlar
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#home-pills" data-toggle="tab">Pet Kimlik</a>
                            </li>
                            <li><a href="#profile-pills" data-toggle="tab">Asilari</a>
                            </li>
                            <li><a href="#messages-pills" data-toggle="tab">Asi Gir</a>
                            </li>
                            <li><a href="#settings-pills" data-toggle="tab">Settings</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-pills">

                                    <div class="col-md-12">

                                        <div class=" col-md-12">
                                            <div class="box-body box-profile">
                                                @if(!empty($hbilgi))

                                                @foreach($hbilgi as $h)

                                                    <div class="row">


                                                        <ul class="list-group list-group-unbordered">

                                                            <div class="col-md-12">

                                                                <li class="list-group-item" >
                                                                    <img class="profile-user-img img-responsive img-circle" src="{{asset('img/avatar5.png')}}" alt="User profile picture">

                                                                    <h3 class="profile-username text-center">{{$h->adi}}</h3>
                                                                </li>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <li class="list-group-item"  >
                                                                    <b>Adi</b> <a class="pull-right">{{$h->adi}}</a>
                                                                </li>
                                                                <li class="list-group-item"  >
                                                                    <b>Irki</b> <a class="pull-right">{{$h->irk}}</a>
                                                                </li>

                                                                <li class="list-group-item"  >
                                                                    <b>Turu</b> <a class="pull-right">{{$h->tur}}</a>
                                                                </li>
                                                                <li class="list-group-item"  >
                                                                    <b>Kurku</b> <a class="pull-right">{{$h->coat}}</a>
                                                                </li>
                                                                <li class="list-group-item"  >
                                                                    <b>Dogum Tarihi</b> <a class="pull-right">{{$h->dogum_tarihi}}</a>
                                                                </li>

                                                                <li class="list-group-item"  >
                                                                    <b>Live</b> <a class="pull-right">{{$h->live}}</a>
                                                                </li>


                                                            </div>

                                                        </ul>

                                                    </div>


                                                @endforeach
                                                    @endif
                                            </div>
                                            <!-- /.box-body -->
                                        </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="profile-pills">
                                <h4>Profile Tab</h4>
                                <p>

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut en
                                    im ad minim veniam, quis nostrud exercitation ullamco laboris nis
                                    i ut aliquip ex ea commodo consequat. Duis aute irure dolor in re
                                    prehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in cu
                                    lpa qui officia deserunt mollit anim id est laborum.


                                </p>
                            </div>

                            <div class="tab-pane fade" id="messages-pills">
                                <h4>Messages Tab</h4>
                                <p>

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                    , sed do eiusmod tempor incididunt ut labore et dolore magn
                                    a aliqua. Ut enim ad minim veniam, quis nostrud exercitatio
                                    n ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit e
                                    sse cillum dolore eu fugiat nulla pariatur. Excepteur sint o
                                    ccaecat cupidatat non proident, sunt in culpa qui officia de
                                    serunt mollit anim id est laborum.

                                </p>
                            </div>
                            <div class="tab-pane fade" id="settings-pills">
                                <h4>Settings Tab</h4>
                                <p>

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magn
                                    a aliqua. Ut enim ad minim veniam, quis nostrud exercitat
                                    ion ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit ess
                                    e cillum dolore eu fugiat nulla pariatur. Excepteur sint occae
                                    cat cupidatat non proident, sunt in culpa qui officia deserunt m
                                    ollit anim id est laborum.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

        </div>



    </div>



@endsection