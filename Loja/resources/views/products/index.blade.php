
<table>
    <thead>
        <tr>
            <th>
                Produtos
            </th>
            <th>Descriçao</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>
            {{$product->name}}</a>
            </td>
            <td>{{$product->description}}</td>
            <td>R${{$product->price}}</td>
        <td><button><a href="{{route('products.edit',$product->id)}}">Editar</button></td>
            <td><button><a href="{{route('products.show',$product->id)}}">Ver Produto</button></td>
        </tr>

        @endforeach
     
    </tbody>
</table>
<button><a href="{{route('products.create')}}">Criar produto</a></button>
<button><a href="{{route('categories.create')}}">Criar Categoria</a></button>
