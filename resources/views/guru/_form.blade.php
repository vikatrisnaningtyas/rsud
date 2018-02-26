<div class="form-group">
    {!! Form::label('nip', 'NIP', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="parsley-required">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_guru', 'Nama', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_guru', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_guru', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>