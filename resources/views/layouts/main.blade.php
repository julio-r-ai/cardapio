 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
    @yield('content')
    <header class="header">
        <div>
            <h1>Cardápio </h1>
        </div>
    </header>
    <div class="sidBar">
        <div>
            <li>
                <ul><a href="/">Cervejas</a></ul>
                <ul><a href=""></a>Coquetel</ul>
                <ul>Diversos</ul>
                <ul>Drinks</ul>
                <ul>Energeticos</ul>
                <ul>Petiscos</ul>
                <ul>Redfrigerantes</ul>
                <ul>Sobremesa</ul>
                <ul>Suco</ul>
                <ul>Sushi</ul>
                <ul>Vinho</ul>
            </li>
        </div>
    </div>
 </body>
 </html>
