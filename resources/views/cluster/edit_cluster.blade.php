@extends('template_wmap')
@section('title')
  Form Kompleks
@endsection

@section('content')
  <legend>Edit Kompleks</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Edit Kompleks 
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-10">
      <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      {{ Form::open(array('action' => array('admin\ClustersController@update', $cluster->id),'files'=>true, 'method'=>'put')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $cluster->name }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="type">
              <option>Perumahan</option>
              <option>RT</option>
              <option>Pemerintahan</option>
              <option>Pendidikan</option>
              <option>Kesehatan</option>
              <option>Perbelanjaan</option>
              <option>Perindustrian</option>
              <option>Perkantoran</option>
          </select>
        </div>
        <div class="form-group">
          <label>Alamat Kompleks</label>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="address" value="{{ $cluster->address }}" required autofocus>
            @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <div class="form-group">
            <div class="panel panel-default">
              <div class="panel-body" id="map" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Latitude</label>
              <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" value="{{$cluster->latitude}}"readonly>
            </div>
            <div class="col-md-6">
              <label>Longitude</label>
              <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" value="{{ $cluster->longitude }}" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>ID Pemilik</label>
          <div class="form-group{{ $errors->has('owner_id') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="owner_id" value="{{ $cluster->owner_id }}" required autofocus>
            @if ($errors->has('owner_id'))
              <span class="help-block">
                  <strong>{{ $errors->first('owner_id') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        <div class="form-group">
          <label>Model URL</label>
          <div class="form-group{{ $errors->has('model_url') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="model_url" value="{{ $cluster->model_url }}" required autofocus>
            @if ($errors->has('model_url'))
              <span class="help-block">
                  <strong>{{ $errors->first('model_url') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control"  rows="3" name="description" value="{{ $cluster->description }}">{{$cluster->description}}</textarea>
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