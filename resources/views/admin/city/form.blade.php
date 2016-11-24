<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    {!! Form::label('country_id', 'Country Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('country_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>