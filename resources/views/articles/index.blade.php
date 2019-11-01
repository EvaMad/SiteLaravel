<!DOCTYPE html>
<html>
  <head>
    <title>Articles</title>
  </head>
  <body>
  <a href="/articles/create">create</a>

    @foreach ($article as $article)
    <h1> <a href="/articles/{{ $article->id }}">Article {{ $article->id }}</a> </h1>
    <ul>
      <li>Name: {{ $article->name }}</li>
      <li>Price: {{ $article->price }}</li>
      <li> <a href="/articles/{{ $article->id }}/edit">edit</a> </li>
      <li> <a href="/articles/{{ $article->id }}/delete">delete</a></li>
    </ul>
    @endforeach
  </body>
</html>