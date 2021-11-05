@extends('layouts.main', ['activePage' => 'company', 'titlePage' => 'Nueva Compañia'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.save')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Compañia</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-labale">Nombre</label>
                                <div class="col-md-7">
                                    <input type="text" name="nombre" id="" class="form-control" placeholder="Ingrese el nombre" autofocus>

                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-labale">Razón Social</label>
                                <div class="col-md-7">
                                    <input type="text" name="RSocial" id="" class="form-control" placeholder="Ingrese Razón Social" autofocus>

                                </div>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-labale">Dirección</label>
                                <div class="col-md-7">
                                    <input type="text" name="direccion" id="" class="form-control" placeholder="Ingrese Drección" autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection