<link rel="stylesheet" href="/css/app.css">

@extends('layouts.main')

@section('title', 'Diversos')

@section('content')

<div class="general">
    <h1>Pagina Diversos</h1>
    @foreach ($products as $product)

        @if ($product->category == 3)
           
            <div class="card">
                <div class="card-inter">
                <div>
                        <img src="{{$product->img}}" alt="imagem">
                </div>
                    <div>
                        
                        <h2>{{$product->description}}</h2>
                        <h2>R$ {{$product->price}}</h2>
                        
                    </div>
                </div>
                <div>
                    <button>Ver</button>
                </div>
            </div> 
        @endif
    @endforeach 
</div>