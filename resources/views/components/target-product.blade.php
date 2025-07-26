@props(['product'])
<div
     class="w-64 border-4 bg-[#dcd8d7] rounded-lg shadow-lg py-5 hover:scale-105 transform transition-all duration-300 ease-in-out ">
     <div class="flex justify-center items-center w-fit px-2 border border-black rounded-full bg-[#e5e8e8] ml-1 mx-auto">
         <p class="text-sm">categoria</p>
     </div>
     <h1 class="text-center m-1 text-3xl font-bold">{{ $product->name }}</h1>
     <div class="flex justify-center">
         <img class="w-40 h-40 rounded-lg mx-auto"
             src="https://images.pexels.com/photos/7646667/pexels-photo-7646667.jpeg" alt="producto">
     </div>
     <p class="m-1 mx-2 mt-2 text-sm">{{$product->description}}</p>
     <p class="text-base font-semibold text-center mt-2">${{$product->price}}</p>
     <div class="flex justify-center mt-2">
         <button
             class="bg-gray-900 text-white px-4 py-1 rounded hover:bg-black hover:scale-105 transform transition-all duration-300 ease-in-out w-44 h-10">
             Agregar al carrito
         </button>
     </div>
 </div>
