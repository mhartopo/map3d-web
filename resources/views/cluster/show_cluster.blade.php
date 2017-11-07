@extends('clustertab')

@section('detail_kompleks')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-2">
          <p>Nama Kompleks</p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->name}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Jenis </p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->type}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Alamat</p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->address}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Lokasi</p>
        </div>
        <div class="col-md-10">
          <p>Latitude : {{$cluster[0]->latitude}}, Longitude : {{$cluster[0]->longitude}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Pemilik</p>
        </div>
        <div class="col-md-10">
          @if(count($owner) === 0)
            <p>Tidak ada pemilik</p>
          @else
            <p>{{$owner[0]->name}}</p>
          @endif
        </div>
      </div>
    </div>
  </div>  
@endsection

@section('bangunan')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Fungsi</th>
            <th>Alamat</th>
            <th>Nilai Jual</th>
            <th></th>
            <th></th>
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
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
        <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('taman')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Luas</th>
            <th>Alamat</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($parks as $park)
          <tr>
            <td>{{$park->id}}</td>
            <td>{{$park->name}}</td>
            <td>{{$park->width * $park->length}} m<sup>2</sup></td>
            <td>{{$park->address}}</td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('tanah')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>Alamat</th>
            <th>Fungsi</th>
            <th>Luas</th>
            <th>Nilai Jual</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($lands as $land)
          <tr>
            <td>{{$land->address}}</td>
            <td>{{$land->function}}</td>
            <td>{{$land->width * $land->length}} m<sup>2</sup></td>
            <td>Rp. {{$land->value}}</td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('jalan')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($streets as $street)
          <tr>
            <td>{{$street->id}}</td>
            <td>{{$street->name}}</td>
            <td>{{$street->type}}</td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('perairan')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Fungsi</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($waters as $water)
          <tr>
            <td>{{$water->id}}</td>
            <td>{{$water->name}}</td>
            <td>{{$water->type}}</td>
            <td>{{$water->function}}</td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection