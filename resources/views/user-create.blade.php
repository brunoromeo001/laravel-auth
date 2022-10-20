@extends('adminlte::page')

@section('title', 'Usuário Cadastro')

@section('content_header')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Usuários</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active"><a href="/users">Usuários</a></li>
        <li class="breadcrumb-item active">Cadastro</li>
      </ol>
    </div>
  </div>

@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Cadastro Usuário - </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="#" >
          <div class="card-body">
            <div class="row">
              <!-- col left -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="registration_user">Matrícula <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="registration_user" name="registration_user" placeholder="Matrícula...">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="name_user">Nome <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name_user" name="name_user" placeholder="Nome...">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="login_user">Login<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="login_user" name="login_user" placeholder="Login...">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email_user">E-mail<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="email_user" name="email_user" placeholder="E-mail...">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="department_user">Setor de Atuação<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="department_user" name="department_user" placeholder="Setor de Atuação...">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password_user">Senha<span class="text-danger">*</span></label>
                  <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Senha...">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <a href="/users" class="btn btn-danger"><i class="fas fa-sign-out-alt fa-rotate-180"></i> Cancelar</a>
            <button class="btn btn-success float-right"><i class="fas fa-save"></i> Salvar</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>

  </div>
  <!-- /.row -->
@stop
