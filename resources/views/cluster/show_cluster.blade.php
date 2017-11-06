@extends('clustertab')

@section('bangunan')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Daftar Bangunan
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Fungsi</th>
                <th>Alamat</th>
                <th>Nilai Jual</th>
              </tr>
            </thead>
            <tbody>
            @foreach($buildings as $building)
              <tr>
                <td>{{$building->id}}</td>
                <td>{{$building->name}}</td>
                <td>{{$building->function}}</td>
                <td>{{$building->address}}</td>
                <td>Rp. {{$building->value}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('taman')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Daftar Taman
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Luas</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
            @foreach($parks as $park)
              <tr>
                <td>{{$park->id}}</td>
                <td>{{$park->name}}</td>
                <td>{{$park->width * $park->length}} m<sup>2</sup></td>
                <td>{{$park->address}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('tanah')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Daftar Tanah
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Alamat</th>
                <th>Fungsi</th>
                <th>Luas</th>
                <th>Nilai Jual</th>
              </tr>
            </thead>
            <tbody>
            @foreach($lands as $land)
              <tr>
                <td>{{$land->address}}</td>
                <td>{{$land->function}}</td>
                <td>{{$land->width * $land->length}} m<sup>2</sup></td>
                <td>Rp. {{$land->value}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('jalan')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Daftar Jalan
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
              </tr>
            </thead>
            <tbody>
            @foreach($streets as $street)
              <tr>
                <td>{{$street->id}}</td>
                <td>{{$street->name}}</td>
                <td>{{$street->type}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('perairan')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Daftar perairan
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Fungsi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($waters as $water)
              <tr>
                <td>{{$water->id}}</td>
                <td>{{$water->name}}</td>
                <td>{{$water->type}}</td>
                <td>{{$water->function}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection