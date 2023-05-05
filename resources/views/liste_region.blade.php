<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<div>
    <div class="ent">
        <h2>Regions list</h2>
        <a class="btn btn-success tbn" href="/region" style="justify-self: flex-end">Ajouter</a>
    </div>
    @if ($list->count() > 0)
    <table class="table table-bordered" style="width: 1000px">
        <thead>
            <th>ID</th>
            <th>LABEL</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($list as $r)
            <tr>
                <th>{{$r->id}}</th>
                <th>{{$r->label}}</th>
                <td>
                    <a href="/region_delete/{{$r->id}}" class="btn btn-danger">supprimer</a>
                    <a href="/form_update_region/{{$r->id}}" class="btn btn-info">Editer</a>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>

    @endif

    <style>
        body{
            padding: 32px;
        }
        table{
            justify-self: center;
            margin-left: 32px;
            margin-right: 100px;
            margin-top:32px;
        }
        thead{
            background-color: black;
            color: white;

        }
        .ent{
            display: flex;
            flex-direction: row;
        }
        .tbn{
            margin-left: 43%;
        }
    </style>
</div>
</form>
</body>
</html>
