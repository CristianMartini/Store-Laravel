<h2>{{$product->name}} - R${{$product->price}}</h2>
<p>Produto nome:{{$product->name}}</p>
<p>Descriçao do Produto: {{$product->description}}</p>
<p>Categoria do Produto:{{$product->Category->name}}</p>
<button><a href="{{route('products.edit',$product->id)}}">Editar</button>
    <button><a href="{{route('products.index')}}">Home</button>

    <form action="{{route('products.destroy',$product->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button>Deletar Produto</button>
    </form>
