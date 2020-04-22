@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kamu Sudah Login <a href="{{url('admin.html')}}">Klik Disini untuk Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
