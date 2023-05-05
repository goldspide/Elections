<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modif_Region</title>
</head>

<body>
    <h1>Modification de la region {{$region->id}}</h1>
    <a href="region_liste" class="btn btn-outline-primary">liste</a>

    <div class="d-flex justify-content-center">
        <form action="region_update" method="post" class="alert alert-success">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Label</label><br>
                <input type="hidden" value="{{$region->id}} " name="id">
                <input type="text" value="{{$region->label}}" class="form-control" id="label"
                    placeholder="Label" name="label"><br>
                <small id="emailHelp" class="form-text text-muted">Etre une region</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
