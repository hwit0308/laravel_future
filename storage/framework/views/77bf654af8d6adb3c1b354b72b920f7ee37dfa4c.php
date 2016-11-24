<div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
    <?php echo Form::label('city', 'City', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('city', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('city', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('country_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('country_id', 'Country Id', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::number('country_id', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <?php echo $errors->first('country_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']); ?>

    </div>
</div>