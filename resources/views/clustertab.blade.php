@extends('app_template')

@section('title')
  Lihat Kompleks | {{ $id }}
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
        <div class="panel tabbed-panel panel-default">
            <div class="panel-heading clearfix">
                <div class="panel-title pull-left">Objek Pada Kompleks Id : {{ $cluster[0]->id }}</div>
                <div class="pull-right">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-default-1" data-toggle="tab">Bangunan</a></li>
                        <li><a href="#tab-default-2" data-toggle="tab">Taman</a></li>
                        <li><a href="#tab-default-3" data-toggle="tab">Tanah</a></li>
                        <li><a href="#tab-default-3" data-toggle="tab">Jalan</a></li>
                        <li><a href="#tab-default-3" data-toggle="tab">Perairan</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab-default-1">
                    @yield('bangunan')
                  </div>
                  <div class="tab-pane fade" id="tab-default-2">
                    @yield('taman')
                  </div>
                  <div class="tab-pane fade" id="tab-default-3">
                    @yield('tanah')
                  </div>
                  <div class="tab-pane fade" id="tab-default-4">
                    @yield('jalan')
                  </div>
                  <div class="tab-pane fade" id="tab-default-5">
                    @yield('perairan')
                  </div>
                </div>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
  </div>
@endsection
