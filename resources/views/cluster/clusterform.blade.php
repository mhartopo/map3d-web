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
      {!! Form::open(array('action' => 'admin\ClustersController@store', 'files' => true, 'method' => 'post')) !!}
        <div class="form-group">
          <label>Nama Kompleks</label>
          <input class="form-control">
        </div>
        <div class="form-group">
          <label>Text Input with Placeholder</label>
          <input class="form-control" placeholder="Enter text">
        </div>
        <div class="form-group">
          {!! Form::submit('Kirim', ['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close()!!}
      </div>
    </div>
  </div>
  </div>
@endsection