@extends('layouts.template')
@section('golongan')
	active
@endsection
@section('content')
<center><h1>Daftar Golongan</h1></center>

<center><a  href="{{url('golongan/create')}}" class="btn btn-info ">Tambah</a></center>
<hr>
	<table border="2" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>Rp.{{$data->besar_uang}}</td>
				<td><center>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-primary'><span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection