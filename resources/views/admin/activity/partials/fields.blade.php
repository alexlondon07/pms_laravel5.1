<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {!!Form::label('name', 'Nombre', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('name',null, array('class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('reference', 'Referencia', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('reference',null, array('class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('description', 'Descripcion', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::textarea('description',null, array('class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('tolerance', 'Tolerancia', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
      {!!Form::text('tolerance',null, array('class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('acceptance_requirements', 'Criterio de aceptacion', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('acceptance_requirements',null, array('class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('enable', 'Habilitado', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!! Form::select('enable',array('si'=>'si','no'=>'no'), null, array('class'=>'form-control')) !!}
    </div>
</div>
