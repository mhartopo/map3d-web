@extends('clustertab')

@section('detail_kompleks')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-2">
          <p>Nama Kompleks</p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->name}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Jenis </p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->type}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Alamat</p>
        </div>
        <div class="col-md-10">
          <p>{{$cluster[0]->address}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Lokasi</p>
        </div>
        <div class="col-md-10">
          <p>Latitude : {{$cluster[0]->latitude}}, Longitude : {{$cluster[0]->longitude}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p>Pemilik</p>
        </div>
        <div class="col-md-10">
          @if(count($owner) === 0)
            <p>Tidak ada pemilik</p>
          @else
            <p>{{$owner[0]->name}}</p>
          @endif
        </div>
      </div>
    </div>
  </div>  
@endsection

@section('bangunan')
  <div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/buildings/create?cluster={{$cluster[0]->id}}';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Bangunan</button>
      </div>
    </div>
  </div>
</div>
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Fungsi</th>
            <th>Alamat</th>
            <th>Nilai Jual</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($buildings as $building)
          <tr>
            <td>{{$building->id}}</td>
            <td>{{$building->name}}</td>
            <td>{{$building->function}}</td>
            <td>{{$building->address}}</td>
            <td>Rp. {{$building->value}}</td>
            <td>
              <a href="{{URL::to('/')}}/buildings/{{ $building->id }}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('buildings.destroy', $building->id), 'method' => 'delete'))}}
                    {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
                  {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
        <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('taman')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/parks/create?cluster={{$cluster[0]->id}}';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Taman</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Luas</th>
            <th>Alamat</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($parks as $park)
          <tr>
            <td>{{$park->id}}</td>
            <td>{{$park->name}}</td>
            <td>{{$park->width * $park->length}} m<sup>2</sup></td>
            <td>{{$park->address}}</td>
            <td>
              <a href="{{URL::to('/')}}/parks/{{$park->id}}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('parks.destroy', $park->id), 'method' => 'delete'))}}
                {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('tanah')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/lands/create?cluster={{$cluster[0]->id}}';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Tanah</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>Alamat</th>
            <th>Fungsi</th>
            <th>Luas</th>
            <th>Nilai Jual</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($lands as $land)
          <tr>
            <td>{{$land->address}}</td>
            <td>{{$land->function}}</td>
            <td>{{$land->width * $land->length}} m<sup>2</sup></td>
            <td>Rp. {{$land->value}}</td>
            <td>
              <a href="{{URL::to('/')}}/lands/{{$land->id }}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('lands.destroy', $land->id), 'method' => 'delete'))}}
                {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('jalan')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/streets/create?cluster={{$cluster[0]->id}}';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Jalan</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($streets as $street)
          <tr>
            <td>{{$street->id}}</td>
            <td>{{$street->name}}</td>
            <td>{{$street->type}}</td>
            <td>
              <a href="{{URL::to('/')}}/streets/{{$street->id}}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('streets.destroy', $street->id), 'method' => 'delete'))}}
                {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('perairan')
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/waters/create?cluster={{$cluster[0]->id}}';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Perairan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Fungsi</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($waters as $water)
          <tr>
            <td>{{$water->id}}</td>
            <td>{{$water->name}}</td>
            <td>{{$water->type}}</td>
            <td>{{$water->function}}</td>
            <td>
              <a href="{{URL::to('/')}}/waters/{{$water->id}}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('waters.destroy', $water->id), 'method' => 'delete'))}}
                {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection