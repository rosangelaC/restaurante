@if(!$mesas->isEmpty())
    @if(!$personals->isEmpty())
        <div class="form-group">
            {!! Form::label('Nit', 'Nit:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7" >
            {!! Form::text('Nite', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('NroMesa', 'Nro de Mesa:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7"> 
                <select class="form-control" name="NroMesa">
                    @foreach($mesas as $mesa)
                        <option value="{!! $mesa->Nro !!}">{!! $mesa->Nro !!}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('Mesero', 'Mesero:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7"> 
                <select class="form-control" name="Mesero">
                    @foreach($personals as $personal)
                        <option value="{!! $personal->Nombres !!}">{!! $personal->Nombres !!}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('Total', 'Total:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7">
            {!! Form::text('Total', null, ['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="form-group">
            {!! Form::label('Pago', 'Pago:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7" >
            {!! Form::text('Pago', null, ['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="form-group">
            {!! Form::label('Cambio', 'Cambio:',['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-7" >
            {!! Form::text('Cambio', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        @else
            <div class="well text-center">No hay Meseros Reqistrados.</div> 
        @endif
@else
    <div class="well text-center">No hay Mesas Disponibles.</div> 
@endif
