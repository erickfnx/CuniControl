@extends('layouts.Principal')
@section('content')
<div class="container">
          <h2>Actualizacion de Registro de Gestacion</h2>
          <form>
          <div class="form-group">
            <label for="">Fecha de diagnostico</label>
            <input type="date" class="form-control" id="" placeholder="Introduce la monta">

          </div>
          <div class="form-group">
            <label for="">Numero Coneja</label>
            <select class="" name="Id_Conejo_Hembra">
              @foreach($conejos as $conejo)
                @if($conejo->Genero == 'Hembra')
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
                @endif
              @endforeach
            </select>
          <div class="form-group">
            <label for="">Resulatdo Diagnostico</label>
            <select class="" name="TatuajeM">
              <option value="">Positivo</option>
              <option value="">Negativo</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Fecha Tentativa de Parto</label>
            <input type="date" name="" value="">
          </div>
          <button type="submit" class="btn btn-outline-primary">Actualizar Registro</button>
        </form>
</div>
@endsection
