@extends('layouts.app')

@section('main-content')
    <div class="col-md-6">

        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Müsteri Ekle</h3>
            </div>
            <div class="box-body">

                <!-- phone mask -->
                <div class="form-group">
                    <label>Müşteri T.C.</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Ad</label>

                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Soyad</label>

                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->



                <!-- phone mask -->
                <div class="form-group">
                    <label>Telefon</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Adress</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>



            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



    </div>

@endsection