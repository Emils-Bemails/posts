<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create new Post</h1>

    <form action="/posts" method="get">
        @csrf
        <div>
            <label for="title">Virstraksts </label>
            <input type="text" name="title" id="title" />
        </div>
        <div>
            <label for="email">Saturs </label>
            <textarea name="content" id="content"></textarea>
        </div>
        <div>
            <input type="submit" value="Izveidot!" />
        </div>
    </form>

</body>
</html>