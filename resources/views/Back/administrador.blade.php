@extends('Back.layoutBack')

@section('content')

<button type="button" class="btn btn-primary newEmpleado" data-toggle="modal" data-target="#newModal">Nuevo Empleado</button>

<hr class="bg-light">

<h4>Empleados</h4>

<hr class="bg-light">

<table id="admon" class="table table-striped dt-responsive nowrap admon">
    <thead>
        <tr>
            <th>#</th>
            <th>dni</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>zona</th>
            <th>departamento</th>
            <th>coordinador</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>#</th>
            <th>dni</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>zona</th>
            <th>departamento</th>
            <th>coordinador</th>
        </tr>
    </tfoot>
</table>

{{-- Modal --}}
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-dark" id="newModalLabel">Nuevo Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrige los errores:</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('nuevo.empleado') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="dniModal" class=" text-dark">dni</label>
                                <input class="form-control dniModal" type="text" name="dniModal"
                                    placeholder="8 digitos y un caracter">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="emailModal" class=" text-dark">email</label>
                                <input class="form-control emailModal" type="email" name="emailModal"
                                    placeholder="tuemial@mail.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nombreModal" class=" text-dark">nombre</label>
                                <input class="form-control nombreModal" type="text" name="nombreModal" placeholder="tu nombre">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="apellidoModal" class=" text-dark">apellido</label>
                                <input class="form-control apellidoModal" type="text" name="apellidoModal" placeholder="tu apellido">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="zonaModal" class=" text-dark">zona</label>
                                <select name="zonaModal" id="zonaModal" class="custom-select zonaModal">
                                    <option value="">seleccione</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="departamentoModal" class=" text-dark">departamento</label>
                                <select name="departamentoModal" id="departamentoModal"
                                    class="custom-select departamentoModal">
                                    <option value="">seleccione</option>
                                    <option value="1">limpieza</option>
                                    <option value="2">mantenimiento</option>
                                    <option value="3">cuidado animal</option>
                                    <option value="4">seguridad</option>
                                    <option value="5">sanitarios</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="loginModal" class=" text-dark">login</label>
                                <input class="form-control loginModal" type="email" name="loginModal"
                                    placeholder="en formato emial">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="passwdModal" class=" text-dark">password</label>
                                <input class="form-control passwdModal" type="password" name="passwdModal" placeholder="mínimo 6 caracteres">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary save" name="save">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('js/Back/dataTableAdmon.js') }}"></script>
<script src="{{ asset('js/Back/admon.js') }}"></script>

@endsection