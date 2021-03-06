@extends('app_template')
@section('title')
  Form Pemilik
@endsection

@section('content')
  <legend>Edit Data Pemilik</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Edit Pemilik
  </div>
  <div class="panel-body">
 
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => array('admin\OwnersController@update', $owner->id),'files'=>true, 'method'=>'put')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Nama</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $owner->name }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="type">
              <option>Individu</option>
              <option>Kelompok/Perusahaan</option>
              <option>Pemerintah</option>
          </select>
        </div>

        <div class="form-group">
          <label>No. Telepon</label>
          <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="telephone" value="{{ $owner->telephone }}" required autofocus>
            @if ($errors->has('telephone'))
              <span class="help-block">
                  <strong>{{ $errors->first('telephone') }}</strong>
              </span>
            @endif
          
          </div>
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