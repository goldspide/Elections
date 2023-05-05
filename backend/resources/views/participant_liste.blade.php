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
<div>
    <div class="ent">
        <h2>participant liste</h2>
        <a class="btn btn-success tbn" href="/participant" style="justify-self: flex-end">Ajouter</a>
    </div>
    @if ($liste->count() > 0)
    <table class="table table-bordered" style="width: 1000px">
        <thead>
            <th>ID</th>
            <th>NOM</th>
            <th>AGE</th>
            <th>SEXE</th>
            <th>STATUS</th>
            <th>ID_REGION</th>
            <th>LOGIN</th>
            <th>EMAIL</th>
            <th>ETAT</th>
            <th>TELEPHONE</th>
            <th>ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($liste as $r)
            <tr>
                <th>{{$r->id}}</th>
                <th>{{$r->nom}}</th>
                <th>{{$r->age}}</th>
                <th>{{$r->sexe}}</th>
                <th>{{$r->status}}</th>
                <th>{{$r->id_region}}</th>
                <th>{{$r->login}}</th>
                <th>{{$r->email}}</th>
                <th>{{$r->etat}}</th>
                <th>{{$r->telephone}}</th>
                <td>
                    <a href="/participant_delete/{{$r->id}}" class="btn btn-danger">supprimer</a>
                    <a href="/participant_edite/{{$r->id}}" class="btn btn-info">Editer</a>
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
</body>
</html>