<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">İşlemler</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('musteriekle') }}"><i class='fa fa-link'></i> <span>Müşteri Ekle</span></a></li>
            <li><a href="{{ url('hayvanekle') }}"><i class='fa fa-link'></i> <span>Hayvan  Ekle</span></a></li>
            <li><a href="{{ url('musterilistele') }}"><i class='fa fa-link'></i> <span>Müşteri Listele</span></a></li>
            <li><a href="{{ url('sonhastalar') }}"><i class='fa fa-link'></i> <span>Son Hastalar</span></a></li>
            <li><a href="{{ url('asilisteleri') }}"><i class='fa fa-link'></i> <span>Aşı Listeleri</span></a></li>
            <li><a href="{{ url('veterinerbilgileri') }}"><i class='fa fa-link'></i> <span>Veteriner Bilgileri</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
