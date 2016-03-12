<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12-">
      <p class="validateTips"></p>
    </div>
    <div class="col-sm-6">
      <div class="form-horizontal">
        <div class="form-group">
            {!!Form::label('name', 'Nombre', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
            {!!Form::text('name',null, array('class' => 'form-control'))!!}
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('reference', 'Referencia', array('class' => 'control-label col-md-4'))!!}
          <div class="col-md-8">
            {!!Form::text('reference',null, array('class' => 'form-control'))!!}
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('existence', 'Existencias', array('class' => 'control-label col-md-4'))!!}
          <div class="col-md-8">
            {!!Form::text('existence',null, array('class' => 'form-control'))!!}
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('description', 'Descripcion', array('class' => 'control-label col-md-4'))!!}
          <div class="col-sm-8">
            {!!Form::textarea('description',null, array('class' => 'form-control'))!!}
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-horizontal">
        <div class="form-group">
          {!!Form::label('inspection_points', 'Puntos de inspección', array('class' => 'control-label col-md-4'))!!}
          <div class="col-md-8">
            {!!Form::text('inspection_points',null, array('class' => 'form-control'))!!}
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('inspection', 'Inspección', array('class' => 'control-label col-md-4'))!!}
          <div class="col-sm-8">
            <div class="controls">
              {!!Form::text('inspection',null, array('class' => 'form-control'))!!}
            </div>
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('classification', 'Clasificación', array('class' => 'control-label col-md-4'))!!}
          <div class="col-sm-8">
            <div class="controls">
              {!! Form::select('classification',array('Arneses'=>'Arneses','Eslingas'=>'Eslingas', 'Reatas'=>'Reatas', 'Conectores_de_anclaje'=>'Conectores de anclaje', 'Varios'=>'Varios'), null, array('class'=>'form-control')) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          {!!Form::label('enable', 'Habilitado', array('class' => 'control-label col-md-4'))!!}
          <div class="col-sm-8">
            <div class="controls">
              {!! Form::select('enable',array('si'=>'si','no'=>'no'), null, array('class'=>'form-control')) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
