@extends('layouts.template')
@section('content')
<center><h1>Daftar Tunjangan Pegawai</h1></center>
<center><a  href="{{url('tunjanganp/create')}}" class="btn btn-info">Tambah</a></center><hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjanganp as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->tunjangan->kode_t}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td><center>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]) !!}
					{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}</center>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection