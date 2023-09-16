<link rel="stylesheet" href="/css/app.css">

<div class="showProduto">
    <div class="headerShow">
        <div>
            <h1>{{$products->description}}</h1>
        </div>
    
    </div>
    <div class="productDescri">
        <div>
            <img src="{{$products->img}}" alt="Imagem do Produto">
        </div>
    </div>
    <div class="footerShow">
        <div>
            <button>Voltar</button>
        </div>
        <div id="priceShow">
           <h2> Preço: R$ {{$products->price}}</h2>
        </div>
    </div>
</div>