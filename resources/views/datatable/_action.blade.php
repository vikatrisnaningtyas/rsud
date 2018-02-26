{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a class="btn btn-xs btn-success" href="{{ $edit_url }}">Edit</a> |
{!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close()!!}