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
                    <option value="9">Cerveja</option>
                    <option value="8">Coquetel</option>
                    <option value="7">Diversos</option>
                    <option value="6">Drinks</option>
                    <option value="5">Energético</option>
                    <option value="4">Petiscos</option>
                    <option value="3">Refrigerantes</option>
                    <option value="2">Sobremesa</option>
                    <option value="1">Suco</option>
                    <option value="9">Sushi</option>
                    <option value="9">Vinho</option>
                </select>
            </div>
            <div><button type="submit">Adicionar</button></div>
        </form>
    </div>

    <table>
    <thead>
         <tr>
           <th>ID</th>
                <th>Foto</th>
                    <th>Descrição</th>
                    <th>Preco</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                    <td>0001</td>
                    <td>foto</td>
                    <td>Budweiser</td>
                     <td>R$ 6,00</td>
                    <td>CERVEJA</td>
                    <td>
                        <button className="buttonView" id="view">Visualizar</button>
                        <button className="buttonEdit" id="edit">Editar</button>
                        <button className="buttonDelete" id="delete">Excluir</button>
                    </td>
                </tr>  
        </tbody>
    </table>
</div>