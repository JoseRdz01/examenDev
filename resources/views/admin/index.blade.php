@extends('layouts.main', ['activePage' => 'listCompany', 'titlePage' => 'Lista de Compañias'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Compañia</h4>
                                    <p class="card-category">Compañias Registradas</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a href="{{route('admin.company')}}" class="btn btm-sm btn-facebook">Agregar Compañia</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Compañia</th>
                                                <th>Razón Social</th>
                                                <th>Dirección</th>
                                            </thead>
                                            <tbody>
                                                @foreach($company as $c)
                                                <tr>
                                                    <td>{{$c->id}}</td>
                                                    <td>{{$c->nombre}}</td>
                                                    <td>{{$c->RSocial}}</td>
                                                    <td>{{$c->direccion}}</td>
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