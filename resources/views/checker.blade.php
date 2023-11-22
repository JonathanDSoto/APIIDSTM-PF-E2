@extends('layouts.app')
@section('contenido') 
<div class="card">
    <div class="pb-sm-5 pb-2 rounded-top">
        <div class="container py-5">
            <div class="d-flex flex-column">
                <h2 class="text-center mb-2 ">C H E C A D O R </h2>
                <div class="col-12 col-md-4">
                    <label class="form-label" for="customerPhoneChecker">Ingrese Numero de Celular</label>
                    <div class="input-group">
                        <input type="text" id="customerPhoneChecker" name="customerPhoneChecker" class="form-control phone-number-mask" placeholder="(612) 000 000 0" />
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="startHour" class="form-label">Hora Llegada:</label>
                        <input type="time" class="form-control" id="startHour" name="startHour">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="endHour" class="form-label">Hora Salida:</label>
                        <input type="time" class="form-control" id="endHour" name="endHour">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection