@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    {!! Form::open(['route' => 'guru.store', 'class' => 'form-horizontal']) !!}
                    @include('guru._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection