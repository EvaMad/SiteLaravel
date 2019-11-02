<!DOCTYPE html>
<html>
  <head>

    <title>Article {{ $article->id }}</title>

  </head>
  <body>

    <h1>Article {{ $article->id }}</h1>
    
    <ul>
      <li>Name: {{ $article->make }}</li>
      <li>Price: {{ $article->model }}</li>
      <a href="/articles/{{ $article->id }}/delete"> delete </a>
    </ul>

  </body>
</html>