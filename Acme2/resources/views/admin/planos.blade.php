@extends('admin.layouts.main')

@section('contenido')
<div class="d-flex justify-content-between">
  <h1>Planos</h1>
  <div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar</button>
  </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<div class="p-4">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Archivo_plano</th>
          <th>Actualizacion_Anterior</th>
          <th>id_proyecto</th>
          <th>Hoja</th>
          <th>Version</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($planos as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->Archivo_plano }}</td>
          <td>{{ $item->Actualizacion_Anterior }}</td>
          <td>{{ $item->id_proyecto }}</td>
          <td>{{ $item->Hoja }}</td>
          <td>{{ $item->Version }}</td>
          <td>
            <button class='btn btn-danger'>X</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Plano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/planos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="archivo_plano">Archivo plano</label>
            <input name="Archivo_plano" type="text" class="form-control" id="archivo_plano" required>
          </div>
          <div class="form-group">
            <label for="actualizacion_anterior">Actualizacion Anterior</label>
            <input name="Actualizacion_Anterior" type="date" class="form-control" id="actualizacion_anterior" required>
          </div>
          <div class="form-group">
            <label for="id_proyecto">ID Proyecto</label>
            <input name="id_proyecto" type="number" class="form-control" id="id_proyecto" value="{{ old('id_proyecto') }}" required>
          </div>
          <div class="form-group">
            <label for="hoja">Hoja</label>
            <input name="Hoja" type="number" class="form-control" id="hoja" value="{{ old('Hoja') }}" required>
          </div>
          <div class="form-group">
            <label for="version">Version</label>
            <input name="Version" type="number" class="form-control" id="version" value="{{ old('Version') }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    alert('Hola mundo')
</script>
@endsection
