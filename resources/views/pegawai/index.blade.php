@extends('layouts.template')
@section('pegawai')
    active
@endsection
@section('content')
<center><a  href="{{url('pegawai/create')}}" class="btn btn-info ">Tambah</a></center><hr>
			        <div class="col-md-6 col-md-offset-0">
			            <div class="panel panel-danger">
			                <div class="panel-heading"><h4>Daftar Pegawai</h4></div>
			                <div class="panel-body">
			                	<table border="2" class="table table-success table-border table-hover">
									<thead >
										<tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama Jabatan</th>
											<th>Nama Golongan</th>
											<th>Photo</th>
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td>{{$no++}}</td>
											<td>{{$data->nip}}</td>
											<td>{{$data->golongan->nama_g}}</td>
											<td>{{$data->jabatan->nama_j}}</td>
											<td><img src="assets/image/{{$data->photo}}" width="50" height="50"></td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-6 ">
			            <div class="panel panel-danger">
			                <div class="panel-heading"><h4>Daftar User</h4></div>
			                <div class="panel-body">
			                	<table border="2" class="table table-success table-border table-hover">
									<thead >
										<tr>
											<th>Name</th>
											<th>Permission</th>
											<th>Email</th>
											<th colspan="2"><center>Action</center></th>
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td>{{$data->user->name}}</td>
											<td>{{$data->user->type_user}}</td>
											<td>{{$data->user->email}}</td>
											
											<td><center>
												<a href="{{route('pegawai.edit',$data->id)}}" class='btn btn-primary'> <span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
											</td>
											<td>
												{!! Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$data->id]]) !!}
												{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
												{!! Form::close() !!}
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
					
	

@endsection