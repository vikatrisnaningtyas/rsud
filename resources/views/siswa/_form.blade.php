<div class="form-group">
    {!! Form::label('id', 'NIS', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id', '<p class="parsley-required">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_siswa', 'Nama', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_siswa', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>