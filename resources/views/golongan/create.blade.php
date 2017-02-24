@extends('layouts.template')
@section('golongan')
    active
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading"><h3>Tambah golongan</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/golongan') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('kode_g') ? ' has-error' : '' }}">
                            <label for="kode_g" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                <input id="kode_g" type="text" class="form-control" name="kode_g" value="{{ old('kode_g') }}"  autofocus>

                                @if ($errors->has('kode_g'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_g') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_g') ? ' has-error' : '' }}">
                            <label for="nama_g" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <input id="nama_g" type="nama_g" class="form-control" name="nama_g" value="{{ old('nama_g') }}" >

                                @if ($errors->has('nama_g'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_g') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('besar_uang') ? ' has-error' : '' }}">
                            <label for="besar_uang" class="col-md-4 control-label">Besar Uang</label>

                            <div class="col-md-6">
                                <input id="besar_uang" type="besar_uang" class="form-control" name="besar_uang" >

                                @if ($errors->has('besar_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besar_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success form-control">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection