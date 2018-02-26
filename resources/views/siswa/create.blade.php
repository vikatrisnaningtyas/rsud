@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    {!! Form::open(['route' => 'siswa.store', 'class' => 'form-horizontal']) !!}
                    @include('siswa._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection