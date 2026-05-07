<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILE STORAGE</title>
</head>
<body>
    <a href="{{ route('index') }}">Regresar</a>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name"/>
        <input type="file" name="file" placeholder="file"/>
        <input type="submit" value="send"/>
    </form>
</body>
</html>
