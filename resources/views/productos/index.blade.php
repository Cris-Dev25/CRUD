 @extends('layouts.app')
 
 @section('content')
 <h1>Todos los productos</h1>
 <div class="grid grid-cols-4 gap-4">
    @foreach ($products as $product)
        <x-target-product :product="$product" />
    @endforeach

    {{-- <a href="{{route('cursos.create')}}">Crear producto</a> --}}
    {{-- <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul> --}}

    {{-- {{ $products->links() }} --}}
</div>

<div class="flex justify-center">
    {{-- <x-target-product/> --}}
</div>
     
 @endsection
