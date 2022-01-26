<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Articals</title>
</head>
<style>
    body{
        background: #f7f7f7;
    }
</style>
<body>
    <div class="container">
        <form action="find" method="get">
            <div class="form-group"><br>
                <h3>Search</h3>
                <input type="search" name="search" class="form-control" id="formGroupExampleInput" value="{{request('find')}}" placeholder="search...">
            </div>
        </form>
        @foreach ($posts as $item)
        <div class="jumbotron">
            <h1 class="display-4">{!! $item->title !!}</h1>
            <p class="lead">{!! $item->content!!}</p>
        </div>
        @endforeach
    </div>
<script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</script>
</body>
</html>
