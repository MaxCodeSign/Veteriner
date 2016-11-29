@extends('layouts.app')

@section('contentheader_title','Müşteri Listele')

@section('main-content')

    <div class="container">

        <div class="col-sm-10">

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Musteriler</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                               Ad
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Soyad
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                telefon
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Engine
                                                adres
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                tc
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Profil
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($musteriler as $musteri)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$musteri->ad}}</td>
                                            <td>{{$musteri->soyad}}</td>
                                            <td>{{$musteri->telefon}}</td>
                                            <td>{{$musteri->adres}}</td>
                                            <td>{{$musteri->tc}}</td>
                                            <td>
                                                <a href="{{url('musteriprofil/'.$musteri->mus_id)}}">
                                                    <button type="button" class="btn btn-block btn-primary btn-sm">Profil</button>
                                                </a>

                                            </td>
                                        </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="example2_previous"><a
                                                        href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                            </li>
                                            <li class="paginate_button active"><a href="#" aria-controls="example2"
                                                                                  data-dt-idx="1" tabindex="0">1</a>
                                            </li>
                                            <li class="paginate_button "><a href="#" aria-controls="example2"
                                                                            data-dt-idx="2" tabindex="0">2</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="example2"
                                                                            data-dt-idx="3" tabindex="0">3</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="example2"
                                                                            data-dt-idx="4" tabindex="0">4</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="example2"
                                                                            data-dt-idx="5" tabindex="0">5</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="example2"
                                                                            data-dt-idx="6" tabindex="0">6</a></li>
                                            <li class="paginate_button next" id="example2_next"><a href="#"
                                                                                                   aria-controls="example2"
                                                                                                   data-dt-idx="7"
                                                                                                   tabindex="0">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
        </div>


    </div>

@endsection