<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="searchProd" method="POST">
    @csrf
    <input type="text" name="search_input">
    <button type="submit">Search</button>
</form>




</body>
</html>