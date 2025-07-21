 @extends('layouts.app')
 
 @section('content')
 <div>
    <h1>Todos los productos</h1>
    {{-- <a href="{{route('cursos.create')}}">Crear producto</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul> --}}

    {{-- {{ $products->links() }} --}}
</div>

<div class="flex justify-center">
    <x-target-product/>
</div>
     
 @endsection
