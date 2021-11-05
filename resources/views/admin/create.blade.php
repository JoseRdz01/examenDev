@extends('layouts.main', ['activePage' => 'createPerm', 'titlePage' => 'Nuevo Permiso'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-labale">Nombre</label>
                                <div class="col-md-7">
                                    <input type="text" name="name" id="" class="form-control" placeholder="Ingrese el nombre" autofocus>

                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-labale">Nombre</label>
                                <div class="col-md-7">
                                    <input type="text" name="name" id="" class="form-control" placeholder="Ingrese el nombre" autofocus>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection