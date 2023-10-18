<h1>Editar Produto</h1>

<form method="POST" action="{{ route('products.update',$product->id) }}">
    @method('PUT')
    @csrf
    <div>
        <label for="title">Nome do Produto</label>
        <input type="text" name="name" 
               placeholder="Digite o nome do Produto" value="{{$product->name }}">
        <input type="text"  name="description" 
               placeholder="Descriçao" value="{{ $product->descprition }}">
        <input type="text"  name="price" 
               placeholder="Preço do  Produto" value="{{ $product->price }}">

    </div>
    <div>
        <select name="category_id" >
            @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{"$category->name"}}</option>
    @endforeach
    </select>
      </div>  
    
    
    <button type="submit">Criar produto</button>
</form>