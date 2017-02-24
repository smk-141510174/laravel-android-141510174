@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Welcome</div>
<center>
                <div class="panel-body">
                <p>Hi,{{Auth::user()->name}}</p><br>
                <p>Sebagai,{{Auth::user()->type_user}}</p><br>
                     Aplikasi Penggajian
                </div></center>
            </div>
        </div>
    </div>
</div>
@endsection
