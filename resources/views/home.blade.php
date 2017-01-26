@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   Bienvenido <b> {{ Auth::user()->name }} </b>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1 class="text-center">Entradas del blog</h1>
                <button class="pull-right">Crear</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>T&iacute;tulo</th>
                            <th>Body</th>
                            <th>Autor</th>
                            <th>Categor&iacute;a</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>T&iacute;tulo 1</td>
                            <td>Lorem ipsum dolor...</td>
                            <td>Autor 1</td>
                            <td>Cate 1</td>
                            <td><button>Crear</button> <button>Editar</button> <button>Borrar</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection