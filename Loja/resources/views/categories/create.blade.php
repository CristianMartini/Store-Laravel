<h2>Criar categoria</h2>
<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div>
        <label for="title">Nome da Categoria</label>
        <input type="text" name="name" 
               placeholder="Digite o nome da Categoria" value="{{ old('name') }}">
       

    </div>
    
         
    
    <button type="submit">Criar categoria</button>
   
</form>