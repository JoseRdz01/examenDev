@extends('layouts.main', ['activePage' => 'listPermission', 'titlePage' => 'Lista de Permisos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Permisos</h4>
                                    <p class="card-category">Permisos Registrados</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a href="{{route('admin.company')}}" class="btn btm-sm btn-facebook">Agregar Permiso</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Permiso</th>
                                            </thead>
                                            <tbody>
                                                @foreach($permissions as $p)
                                                <tr>
                                                    <td>{{$p->id}}</td>
                                                    <td>{{$p->name}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection