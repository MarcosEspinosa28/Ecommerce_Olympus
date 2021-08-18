@extends('layouts.landing.app2')
@section('content')





    <!-- NEW-->
    <div class="container px-4 px-lg-5 mt">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5 mt">
            <div class="col-lg-7 mt-4"><img src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->nombre_producto}}" width="100%" height="90%"></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light mt-4">{{$producto->nombre_producto }}</h1>
                <p>Nuestros productos son totalmente hechos en COLOMBIA, Con materiales 100% originales, Hechos a medida uno de Nuestros Servicios Caracteristicos</p>
                <table class="table ">
                    <tr>
                        <th scope="col">Talla</th>
                        <td>{{$producto->Talla->talla }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Color</th>
                        <td><input type="color" disabled value="{{$producto->color}}"></td>
                    </tr>
                    <tr>
                        <th scope="col">Material</th>
                        <td>{{$producto->Material->material }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Categoria</th>
                        <td>{{$producto->Categoria->Nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Clasificación</th>
                        <td>{{$producto->Clasificacion->Nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Precio</th>
                        <td>$ {{number_format($producto->valor,2) }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Cantidad</th>
                        <td>{{$producto->cantidad }}</td>
                    </tr>

                </table>
                @if(session('correo') && session('id'))
                <form action="{{route('carrito.store')}}" method="post">
                @csrf
                <input type="hidden" name="usuario_id"  value="{{session('id')}}">
                <input type="hidden" name="producto_id"  value="{{$producto->id}}">
                <input type="hidden" name="cantidades" value="1">
                <button class="btn btn-primary" type="submit">Añadir al carrito</button>
                </form>
                @else
                    <p style="color:#d40606" ;>Para realizar compras o acceder al carrito debes iniciar sesión</p>
                <a class="btn btn-primary" href="{{route('login.login')}}">Añadir al carrito</a>
                @endif


                @if(session('correo') && session('id'))
                          <form action="{{route('usuariologueado.index')}}" method="post">
            @csrf
            <input type="hidden" name="email" value="{{session('correo')}}">
            <input type="hidden" name="id" value="{{session('id')}}">
            <button class="btn btn-warning mt-4 btn-lg">Volver</button>
            </form>
            @else
            <a href="{{route('index.index')}}" class="btn btn-warning">Volver</a>
            @endif



            </div>

        </div>

    </div>

@endsection
