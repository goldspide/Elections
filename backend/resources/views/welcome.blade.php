

<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app')
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Region</title>
</head>

<body>
    {{-- <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Label</label><br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Label"><br>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyoneelse.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}
    <h1>Bienvenu A tous</h1>

    <a href="participant" class="btn btn-outline-primary">Ajoute un participant</a>
    <a href="region_liste" class="btn btn-outline-primary">liste des region</a>
    <a href="participant_liste" class="btn btn-outline-primary">liste des participant</a>
    <a href="region" class="btn btn-outline-primary">Ajouter une region </a>
    

</body>

</html>
