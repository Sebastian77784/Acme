@extends('admin.layouts.main')

@section('contenido')
<h1>Usuarios</h1>
<div class="p-4">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">rol</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ap_paterno</th>
      <th scope="col">Ap_materno</th>
      <th scope="col">telefono</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
   @foreach($usuarios as $item)
    <tr>
        <td>{{ $item->id}}</td>
        <td>{{$item->rol}}</td>
        <td>{{$item->Nombre}}</td>
        <td>{{$item->Ap_paterno}}</td>
        <td>{{$item->Ap_materno}}</td>
        <td>{{$item->telefono}}</td>
        <td>{{$item->email}}</td>
        <td>**********</td>
        <td>
            <button class = 'btn btn-danger'>
                X
            </button>
        </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection

@section('scripts')
<script>
    alert('Hola mundo')
</script>
@endsection