@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Usuários</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Usuários</li>
      </ol>
    </div>
  </div>

@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-list"></i> Lista de Usuários</h3>
          <a href="/users/create" class="btn bg-gradient-success btn-xs float-right">
            <i class="fas fa-plus"></i>
            Add usuário
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-sm table-striped projects dataTable">
            <thead>
            <tr>
              <th>Matrícula</th>
              <th>Nome</th>
              <th>Login</th>
              <th>E-mail</th>
              <th>Atuação</th>
              <th>Status</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $value)
            <tr>
              <td> {{ $value->matricula }} </td>
              <td> {{ $value->nome }} </td>
              <td> {{ $value->usuario }} </td>
              <td> {{ $value->email }} </td>
              <td> {{ $value->areaatuacao }} </td>
              <td>
                  <span class="text-success"> Ativo</span>
              </td>
              <td class="text-right py-0 align-middle" width="250">
                <button type="button" class="btn btn-secondary btn-xs disabled"> <i class="fa fa-user-edit"></i> Permissões</button>
                <button type="button" class="btn btn-primary btn-xs disabled"> <i class="fa fa-edit"></i> Editar</button>
                <button type="button" class="btn btn-default btn-xs disabled"> <i class="fa fa-pencil-alt"></i> Alterar a senha </button>
                <button type="button" class="btn btn-danger btn-xs disabled"> <i class="fa fa-trash"></i> Excluir</button>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@stop

@section('js')
  <script>
    $(function () {
      $(".dataTable").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "order": [],
      });
    });
  </script>
@stop
