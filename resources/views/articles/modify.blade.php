<!DOCTYPE html>
<html>
<head>
    <title>Modifier Article #{{ $article->id }}</title>
</head>

<body>
<h1>Modifier Article #{{ $article->id }}</h1>

<form action="/articles/{{ $article->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    
<div>
    <label>Nom</label>
    <input type="text" name="name" value="{{ $article->name }}"/>
</div>

<div>
    <label>Prix</label>
    <input type="number" name="price" value="{{ $article->price }}"/>
</div>

<div>
    <label>Description</label>
    <textarea rows="30" cols="20" name="description">{{ $article->description }}</textarea>
    </div>

    <button type="submit">Valider</button>
    <input type="hidden" name="id" value="{{ $article->id }}"/>
    
</form>

</body>
</html>