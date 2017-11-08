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
      {{ Form::open(array('action' => 'admin\BuildingsController@store','files'=>true, 'method'=>'post')) }}
        <div class="form-group">
          <label>File</label>
          <input type="file" name="model">
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