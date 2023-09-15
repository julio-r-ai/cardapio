<link rel="stylesheet" href="/css/app.css">

@section('title', 'Admin')

@section('content')

<div class="admin">

    <div class="registerAdmin">

        <div><h1>Bem vindo! Administrador</h1></div>
        
        <form action="">
            <div>
                <label for="">Adicione uma foto</label>
                <input type="text" name="img">
            </div>
            <div>
                <label for="">Descrição</label>
                <input type="text" name="description">
            </div>
            <div>
                <label for="">Preço</label>
                <input type="text" name="price">
            </div>
            <div>
                <label for="">Categoria</label>
                <select name="categore">
                    <option selected disabled>Selecione</option>
                    <option value="1">Cerveja</option>
                    <option value="2">Coquetel</option>
                    <option value="3">Diversos</option>
                    <option value="4">Drinks</option>
                    <option value="5">Energético</option>
                    <option value="6">Petiscos</option>
                    <option value="7">Refrigerantes</option>
                    <option value="8">Sobremesa</option>
                    <option value="9">Suco</option>
                    <option value="10">Sushi</option>
                    <option value="11">Vinho</option>
                </select>
            </div>
            <div><button type="submit">Adicionar</button></div>
        </form>
    </div>

    <table>
    <thead>
         
        <th>ID</th>
        <th>Foto</th>
        <th>Descrição</th>
        <th>Preco</th>
        <th>Categoria</th>
        <th>Ações</th>

        @foreach ($products as $product)
            </tr>
                <td>{{$product->id}}</td>
                <td>imagem</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category}}</td>
                <td>
                    <button className="buttonView" id="view">Visualizar</button>
                    <button className="buttonEdit" id="edit">Editar</button>
                    <button className="buttonDelete" id="delete">Excluir</button>
                </td>
            </tr>  
        @endforeach  
    </tbody>
    </table>
</div>