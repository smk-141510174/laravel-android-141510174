@extends('layouts.template')
@section('lemburp')
    active
@endsection
@section('content')
<center><h1>Daftar Lembur Pegawai</h1></center>

<center><a  href="{{url('lemburp/create')}}" class="btn btn-info">Tambah</a></center><hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Kode Kategori Lembur</th>
				<th>Jumlah Jam</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($lembur as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>{{$data->kategori->kode_l}}</td>
				<td>{{$data->Jumlah_jam}}&nbsp Jam</td>
				<td><center>
					<a href="{{route('lemburp.edit',$data->id)}}" class='btn btn-primary'><span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['lemburp.destroy',$data->id]]) !!}
					{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection