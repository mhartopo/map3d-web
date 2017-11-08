@extends('template_wmap')
@section('title')
  Form Kompleks
@endsection

@section('content')
  <legend>Tambah Kompleks</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Kompleks Baru
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => 'admin\ClustersController@store','files'=>true, 'method'=>'post')) }}
        <div class="form-group">
          <label>Nama Kompleks</label>
          <input class="form-control" name="name">
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <input class="form-control" name="type">
        </div>
        <div class="form-group">
          <label>Alamat Kompleks</label>
          <input class="form-control" name="address">
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <div class="form-group">
            <div class="row">
              <div class="col-lg-12">
                <div style="width: 700px; height: 500px;" id="map">
              </div>
            </div>
          </div>
          </br>
          <div class="row">
            <div class="col-md-6">
              <label>Latitude</label>
              <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" readonly>
            </div>
            <div class="col-md-6">
              <label>Longitude</label>
              <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>ID Pemilik</label>
          <input class="form-control" name="owner_id">
        </div>
        <div class="form-group">
          <label>Model URL</label>
          <input class="form-control" name="model_url">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control"  rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Kirim</button>
        </div>
      {{ Form::close() }}
      </div>
    </div>
  </div>
  </div>
@endsection