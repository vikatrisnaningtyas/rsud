@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <!-- <h4 class="header-title m-t-0 m-b-30">Horizontal Form</h4> -->

                    {!! Form::model($guru, ['route' => ['guru.update', $guru], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                    @include('guru._form', ['model' => $guru])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection