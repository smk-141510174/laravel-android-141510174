@extends('layouts.template')
@section('content')
       <center><h2>Table Penggajian</h2></center> 
                    
                    <div class="col-md-12">
                        <center><a href="{{url('penggajian/create')}}" class="btn btn-info ">Tambah Data</a></center><hr>
                        <center>{{$penggajian->links()}}</center>
                    </div>
                    <table border="1" class="table table-striped table-border table-hover">

                        <thead>
                        <tr class="bg-danger">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Nip Pegawai</th> 
                        <th>Status Pengambilan</th>
                        <th colspan="3"><center>Action</center></th>
                        </tr>

                        @php
                            $no=1 ;
                        @endphp
                        <tbody>
                        @foreach($penggajian as $penggajians)
                        <tr>
                        <td>{{$no++}}</td>                        
                            
                        <td>{{$penggajians->Tunjangan_pegawai->Pegawai->User->name}}</td>
                        
                        <td>{{$penggajians->Tunjangan_pegawai->Pegawai->nip}}</td>
                        <<td><b>@if($penggajians->tanggal_pengambilan == ""&&$penggajians->status_pengambilan == "0")

                        Gaji Belum Diambil

                                <div >

                                    <a class="btn btn-warning" href="{{route('penggajian.edit',$penggajians->id)}}">Ambil</a>

                                </div>

                            

                        @elseif($penggajians->tanggal_pengambilan == ""||$penggajians->status_pengambilan == "0")

                            Gaji Belum Diambil

                            <div>

                                    <a class="btn btn-warning" href="{{route('penggajian.edit',$penggajians->id)}}">Ambil</a>

                                </div>

                        @else

                            Gaji Sudah Diambil Pada {{$penggajians->tanggal_pengambilan}}

                        @endif</b></td>


                        </h5>

                        
                                <td><center><a class="btn btn-primary" href="{{route('penggajian.show',$penggajians->id)}}"><span class="glyphicon glyphicon-eye-open"></span>&nbsplihat</a></center></td>
                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]])!!}
                                    {!!Form::submit('Hapus',['class'=>'btn btn-danger col-md-12'])!!}</td>
                                    {!!Form::close()!!}
                                
                        </center>
                        </div> 
                        @endforeach
                        </tr>
                        
                    </table>
                </div>

           
        
@endsection

