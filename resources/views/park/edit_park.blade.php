@extends('template_wmap')
@section('title')
  Edit Taman
@endsection

@section('content')
  <legend>Edit Taman</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Edit Taman
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => array('admin\ParksController@update', $park->id),'files'=>true, 'method'=>'put')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $park->name }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>

        <div class="form-group">
          <label>Alamat Taman</label>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="address" value="{{ $park->address }}" required autofocus>
            @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        
        <div class="form-group">
          <label>Panjang Taman</label>
          <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="length" value="{{ $park->length }}" required autofocus>
            @if ($errors->has('length'))
              <span class="help-block">
                  <strong>{{ $errors->first('length') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label>Lebar Taman</label>
          <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="width" value="{{ $park->width }}" required autofocus>
            @if ($errors->has('width'))
              <span class="help-block">
                  <strong>{{ $errors->first('width') }}</strong>
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
              <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" value="{{ $park->latitude }}" readonly>
            </div>
            <div class="col-md-6">
              <label>Longitude</label>
              <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" value="{{ $park->longitude }}" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>ID Pemilik</label>
          <div class="form-group{{ $errors->has('owner_id') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="owner_id" value="{{ $park->owner_id }}" required autofocus>
            @if ($errors->has('owner_id'))
              <span class="help-block">
                  <strong>{{ $errors->first('owner_id') }}</strong>
              </span>
            @endif
          
          </div>
        </div>

        <div class="form-group">
          <label>ID Kompleks</label>
          <div class="form-group{{ $errors->has('cluster_id') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="cluster_id" value="{{ $park->cluster_id }}" required autofocus>
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
            
            <input id="name" type="text" class="form-control" name="model_url" value="{{ $park->model_url }}" required autofocus>
            @if ($errors->has('model_url'))
              <span class="help-block">
                  <strong>{{ $errors->first('model_url') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control"  rows="3" name="description">{{ $park->description }}</textarea>
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