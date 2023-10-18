
<table>
    <thead>
        <tr>
            <th>
                Produtos
            </th>
            <th>Quantidade de Produtos</th>
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
        
        </tr>
        @endforeach
     
    </tbody>
</table>
<button><a href="{{route('products.create')}}">Criar produto</a></button>
<button><a href="{{route('categories.create')}}">Criar Categoria</a></button>