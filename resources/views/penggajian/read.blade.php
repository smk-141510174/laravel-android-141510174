@extends('layouts.template')
@section('content')                
    <div class="">
         <table class="table table-striped table-hover table-bordered">
                        
         <div class="col-md-12">
          <center>
          <div class="panel panel-danger">
                <div class="panel-heading">
                   <h3>Daftar Pegawai</h3>

                        <h4>{{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</h4>
                        <h5>{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</h5><hr>
                        <h3>Status Pengambilan</h3>
                        <b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}
                        @endif</b><hr>
                        <h3>Daftar Gaji</h3>
                        <h5>Gaji Lembur&nbsp:&nbspRp.{{$penggajian->jumlah_uang_lembur}}<br> Gaji Pokok&nbsp:&nbsp  Rp.{{$penggajian->gaji_pokok}}<br>Mendapat Tunjangan&nbsp:&nbspRp.{{$penggajian->Tunjangan_pegawai->Tunjangan->besar_uang}}<br>Total Gaji&nbsp:&nbspRp.{{$penggajian->total_gaji}}
                        </h5>
                        <br>
                        <p align="left">
                            <a class="btn btn-warning" href="{{url('penggajian')}}"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        </p>
                    </div>
            </div>
            </center>
            </div> 
                        
            </table>
              
        
@endsection