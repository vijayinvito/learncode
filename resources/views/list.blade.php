<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data List</title>
    <style>
    .page-item{
        display:inline-block;

    }
    </style>
</head>
<body>
    <div>
    <ul>
    @foreach($data as $list)
    <li>{{ $list->Company_name}}
    </li>
    @endforeach
    </ul>

    </div>
    <div class="page-link"> {{$data->links()}} </div>
</body>
</html>