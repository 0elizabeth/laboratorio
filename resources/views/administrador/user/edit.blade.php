{!! Form::open(['route'=>['administrador.users.update',$user->id], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modaledit{{ $user->id }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="editar" class="modal-header btn btn-success">
                    <h4><i class="fas fa-marker"></i>Editar {{ $user->name }}</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                            <div class="card">
                              <div class="card-body">
                                <label  for="validationDefault01" class="form-label">Nombre</label>
                                <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="validationdefault1" required>
                                <label for="validationDefault02">Correo</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="validationDefault02" required>
                                <label for="validationDefault03">Contraseña</label>
                                <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="validationDefault03" required>
                                <label for="validationDefault04">Dirección</label>
                                <input type="text" name="direccion" value="{{ $user->direccion }}" class="form-control" id="validationDefault04" required>
                                <label for="validationDefault05">Telefono</label>
                                <input type="text" name="telefono" value="{{ $user->telefono }}" class="form-control" id="validationDefault05" required>
                                <label for="validationDefault06">Cargo</label>
                                <input type="select" name="cargo" value="{{ $user->cargo }}" class="form-control" id="validationDefault06" required>
                              </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" type="submit"><i class="fas fa-upload"></i> Guardar</button>
                                    <button data-dismiss="modal" class="btn btn-success"><i class="fas fa-ban"></i> Cancelar</button>                                </div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}