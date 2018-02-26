@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('guru.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Guru <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gurus as $guru)
                            <tr>
                                <td>{{ $guru->nip}}</td>
                                <td>{{ $guru->nama_guru }}</td>
                                <td>
                                    {!! Form::model($gurus, ['route' => ['guru.destroy', $guru], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    {!! Form::button('<i class="fa fa-trash-o"></i> Delete', ['class' => 'btn btn-xs btn-danger js-submit-confirm', 'type' => 'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection