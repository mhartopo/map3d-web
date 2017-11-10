@extends('template_wmap')
@section('title')
  Form Bangunan
@endsection

@section('content')
  <legend>Edit Bangunan</legend>
  <div class="panel panel-default">
  <div class="panel-heading">
      Form Edit Bangunan
  </div>
  <div class="panel-body">
        <!--<ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> -->
    <div class="row">
      <div class="col-lg-10">
      {{ Form::open(array('action' => array('admin\BuildingsController@update', $building->id),'files'=>true, 'method'=>'put')) }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" >Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $building->name }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group">
          <label>Fungsi</label>
          <select class="form-control" name="function">
              <option>Rumah</option>
              <option>Kantor Polisi</option>
              <option>Kesehatan</option>
              <option>Pemerintahan</option>
              <option>Pendidikan</option>
              <option>Perbelanjaan</option>
              <option>Peribadahan</option>
              <option>Perkantoran</option>
          </select>
        </div>
        <div class="form-group">
          <label>Alamat Bangunan</label>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="address" value="{{ $building->address }}" required autofocus>
            @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
            @endif
          
          </div>
        </div>

        <div class="form-group">
          <label>Nilai Bangunan</label>
          <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="value" value="{{ $building->value }}" required autofocus>
            @if ($errors->has('value'))
              <span class="help-block">
                  <strong>{{ $errors->first('value') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        <div class="form-group">
          <label>Panjang Bangunan</label>
          <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="length" value="{{ $building->length }}" required autofocus>
            @if ($errors->has('length'))
              <span class="help-block">
                  <strong>{{ $errors->first('length') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label>Lebar Bangunan</label>
          <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="width" value="{{ $building->width }}" required autofocus>
            @if ($errors->has('width'))
              <span class="help-block">
                  <strong>{{ $errors->first('width') }}</strong>
              </span>
            @endif
          
          </div>
        </div>
        
        <div class="form-group">
          <label>Tinggi Bangunan</label>
          <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="height" value="{{ $building->height }}" required autofocus>
            @if ($errors->has('height'))
              <span class="help-block">
                  <strong>{{ $errors->first('height') }}</strong>
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
              <input class="form-control" id="latInput" placeholder="Latitude" name="latitude" value="{{ $building->latitude }}" readonly>
            </div>
            <div class="col-md-6">
              <label>Longitude</label>
              <input class="form-control" id="lngInput" placeholder="Longitude" name="longitude" value="{{ $building->longitude }}" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>ID Pemilik</label>
          <div class="form-group{{ $errors->has('owner_id') ? ' has-error' : '' }}">
            
            <input id="name" type="text" class="form-control" name="owner_id" value="{{ $building->owner_id }}" required autofocus>
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
            
            <input id="name" type="text" class="form-control" name="cluster_id" value="{{ $building->cluster_id }}" required autofocus>
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
            
            <input id="name" type="text" class="form-control" name="model_url" value="{{ $building->model_url }}" required autofocus>
            @if ($errors->has('model_url'))
              <span class="help-block">
                  <strong>{{ $errors->first('model_url') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control"  rows="3" name="description" value="{{$building->description}}">{{$building->description}}</textarea>
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