@extends('template_wmap')
@section('title')
  Form Tanah
@endsection

@section('content')
  <legend>Tambah Tanah</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Tanah Baru
  </div>
  <div class="panel-body">

    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => 'admin\LandsController@store','files'=>true, 'method'=>'post')) }}
        <div class="form-group">
          <label>Fungsi</label>
          <select class="form-control" name="function">
              <option>Tanah Kosong</option>
              <option>Lapangan</option>
              <option>Sawah</option>
              <option>Perkebunan</option>
          </select>
        </div>
        <div class="form-group">
          <label>Alamat Tanah</label>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
            @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
            @endif
          
          </div>
        </div>

        <div class="form-group">
          <label>Nilai Tanah</label>
          <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="value" value="{{ old('value') }}" required autofocus>
            @if ($errors->has('value'))
              <span class="help-block">
                  <strong>{{ $errors->first('value') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        <div class="form-group">
          <label>Panjang Tanah</label>
          <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="length" value="{{ old('length') }}" required autofocus>
            @if ($errors->has('length'))
              <span class="help-block">
                  <strong>{{ $errors->first('length') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label>Lebar Tanah</label>
          <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="width" value="{{ old('width') }}" required autofocus>
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
          <div class="form-group{{ $errors->has('owner_id') ? ' has-error' : '' }}">
            
            @if($cluster_id == null)
              <input id="name" type="text" class="form-control" name="cluster_id" value="{{ old('cluster_id') }}" required autofocus>
            @else
              <input id="name" type="text" class="form-control" name="cluster_id" value="{{ $cluster_id }}" required autofocus readonly>
            @endif
            
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
            
            <input id="name" type="text" class="form-control" name="cluster_id" value="{{ old('cluster_id') }}" required autofocus>
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