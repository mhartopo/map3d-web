@extends('app_template')
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
          <div class="row">
            <div class="col-md-6">
              <input class="form-control" placeholder="Latitude" name="latitude">
            </div>
            <div class="col-md-6">
              <input class="form-control" placeholder="Longitude" name="longitude">
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