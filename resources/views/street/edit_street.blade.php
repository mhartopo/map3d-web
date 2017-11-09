@extends('template_wmap')
@section('title')
  Form Jalan
@endsection

@section('content')
  <legend>Edit Jalan</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Edit Jalan
  </div>
  <div class="panel-body">
 
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => array('admin\StreetsController@update', $street->id),'files'=>true, 'method'=>'put')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $street->name }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="type">
              <option>Jalan Tol</option>
              <option>Jalan Raya</option>
              <option>Jalan Kecil</option>
          </select>
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
              <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" value="{{ $street->latitude }}" readonly>
            </div>
            <div class="col-md-6">
              <label>Longitude</label>
              <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" value="{{ $street->longitude }}" readonly>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>ID Kompleks</label>
          <div class="form-group{{ $errors->has('cluster_id') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="cluster_id" value="{{ $street->cluster_id }}" required autofocus>
            @if ($errors->has('cluster_id'))
              <span class="help-block">
                  <strong>{{ $errors->first('cluster_id') }}</strong>
              </span>
            @endif
          
          </div>
        </div>

        <div class="form-group">
          <label>Model URL</label>
          <div class="form-group{{ $errors->has('model_url') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="model_url" value="{{ $street->model_url }}" required autofocus>
            @if ($errors->has('model_url'))
              <span class="help-block">
                  <strong>{{ $errors->first('model_url') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control"  rows="3" name="description">{{$street->description}}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Update</button>
        </div>
      {{ Form::close() }}
      </div>
    </div>
  </div>
  </div>
@endsection