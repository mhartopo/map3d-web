@extends('template_wmap')
@section('title')
  Form Perairan
@endsection

@section('content')
  <legend>Tambah Perairan</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Perairan Baru
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => 'admin\WatersController@store','files'=>true, 'method'=>'post')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="type">
              <option>Sungai</option>
              <option>Danau</option>
              <option>Kolam</option>
          </select>
        </div>
        <div class="form-group">
          <label>Fungsi</label>
          <div class="form-group{{ $errors->has('function') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="function" value="{{ old('function') }}" required autofocus>
            @if ($errors->has('function'))
              <span class="help-block">
                  <strong>{{ $errors->first('function') }}</strong>
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
            @if ($cluster_id == null)
              <div class="col-md-6">
                <label>Latitude</label>
                <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" readonly>
              </div>
              <div class="col-md-6">
                <label>Longitude</label>
                <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" readonly>
              </div>
            @else
              <div class="col-md-6">
                <label>Latitude</label>
                <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" value="{{$cluster->latitude}}" readonly>
              </div>
              <div class="col-md-6">
                <label>Longitude</label>
                <input class="form-control" id="lngInput" placeholder="Longitude" value="{{$cluster->longitude}}" name="longitude" readonly>
              </div>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label>ID Kompleks</label>
          <div class="form-group{{ $errors->has('cluster_id') ? ' has-error' : '' }}">
            
            @if($cluster_id == null)
              <input id="name" type="text" class="form-control" name="cluster_id" value="{{ old('cluster_id') }}" required autofocus>
            @else
              <input id="name" type="text" class="form-control" name="cluster_id" value="{{ $cluster_id }}" required autofocus readonly>
            @endif
            
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
            
            <input id="name" type="text" class="form-control" name="model_url" value="{{ old('model_url') }}" required autofocus>
            @if ($errors->has('model_url'))
              <span class="help-block">
                  <strong>{{ $errors->first('model_url') }}</strong>
              </span>
            @endif
          </div>
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