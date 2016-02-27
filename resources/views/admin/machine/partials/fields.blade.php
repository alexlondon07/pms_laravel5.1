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
            {!!Form::label('description', 'Descripcion', array('class' => 'control-label col-md-4'))!!}
            <div class="col-sm-8">
              {!!Form::textarea('description',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('use_common', 'Uso comun', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('use_common',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('maintenance_intervals', 'Periocidad mantenimiento', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('maintenance_intervals',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('location', 'Ubicacion', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('location',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('maximun_capacity', 'Capacidad maxima' , array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('maximun_capacity',null, array('class' => 'form-control'))!!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-horizontal">

          <div class="form-group">
            {!!Form::label('general_manintenance', 'Mantenimiento general', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('general_manintenance',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('variables', 'Variables', array('class' => 'control-label col-md-4'))!!}
            <div class="col-sm-8">
              <div class="controls">
                {!! Form::select('variables',array('Energia'=>'Energia','Voltaje'=>'Voltaje', 'Tipo_neumatico'=>'Tipo neumatico', 'Tipo_hidraulico'=>'Tipo hidraulico', 'Hidrico'=>'Hidrico' , 'Refrigeracion'=>'Refrigeracion'), null, array('class'=>'form-control')) !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('manufacturer', 'Fabricante', array('class' => 'control-label col-md-4'))!!}
            <div class="col-sm-8">
              {!!Form::text('manufacturer',null, array('class' => 'form-control'))!!}
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
          <div>
            <h3 style=''>Informacion de proveedor</h3>
          </div>
          <div class="form-group">
            {!!Form::label('name_provider', 'Nombre', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('name_provider',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('contact_provider', 'Contacto', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('contact_provider',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('billing_provider', 'Facturacion', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('billing_provider',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('catalog_provider', 'Catalogo', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('catalog_provider',null, array('class' => 'form-control'))!!}
            </div>
          </div>
          <div class="form-group">
            {!!Form::label('data_sheet_provider', 'Ficha tecnica', array('class' => 'control-label col-md-4'))!!}
            <div class="col-md-8">
              {!!Form::text('data_sheet_provider',null, array('class' => 'form-control'))!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
