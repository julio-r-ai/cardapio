<link rel="stylesheet" href="/css/app.css">

@extends('layouts.main')

@section('title', 'Energeticos')

@section('content')

<div class="general">
    <h1>Pagina Energeticos</h1>
    @foreach ($products as $product)

        @if ($product->category == 4)
           
            <div class="card">
                <div class="card-inter">
                <div>
                        <img src="{{$product->img}}" alt="imagem">
                </div>
                    <div>
                        
                        <h2 id="descriH2">{{$product->description}}</h2>
                        <h2 id="descriH3">R$ {{$product->price}}</h2>
                        
                    </div>
                </div>
                <div>
                    <button id="buttonVer">Ver</button>
                </div>
            </div> 
        @endif
    @endforeach 
</div>