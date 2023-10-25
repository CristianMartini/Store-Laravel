<h1>Criar Novo Produto</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div>
        <label for="title">Nome do Produto</label>
        <input type="text" name="name"
               placeholder="Digite o nome do Produto" value="{{ old('name') }}">
        <input type="text"  name="description"
               placeholder="Descriçao" value="{{ old('description') }}">
        <input type="text"  name="price"
               placeholder="Preço do  Produto" value="{{ old('pri
               ce') }}">

    </div>

    <div>

        <select name="category_id" >
            @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{"$category->name"}}</option>
    </div>@endforeach
    </select>


    <button type="submit">Criar produto</button>
</form>
