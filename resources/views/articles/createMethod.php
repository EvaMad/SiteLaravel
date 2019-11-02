<!DOCTYPE html>
<html>

<head> 
    <title> create <title> 
<head>

<body>
<!-- create method that sends a request 'POST' -->


<h2>Création d'un article</h2>
<form method="POST" action="/articles">
{{ csrf_field() }}

<div>
    <label>Nom<label>
    <input name="name" type="text" />
</div>

<div class="input-group">
    <label>Prix</label>
    <input type="number" name="price" />
</div>

<div class="input-group">
    <label>Description</label>
    <textarea rows="30" cols="20" name="description" ></textarea>
 </div>
            
            
<button type="submit">Ajouter</button>
 

</form>

</body>

</html>