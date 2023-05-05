<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modif_Participant</title>
</head>

<body>
    <h1>Modification du participant {{ $participant->id }}</h1>
    <a href="participant_liste" class="btn btn-outline-primary">liste</a>

    <div class="d-flex justify-content-center">
        <form action="/participant_edite" method="post" class="alert alert-success">
            @csrf
            <div class="form-group">
                <label for="">Id</label><br>
                <input type="number" value="{{ $participant->id}}" name="id"><br>
                <label for="">Id_region</label><br>
                <input type="hidden" value="{{ $participant->id_region}}" name="id"><br>
                <label for="">Nom</label><br>
                <input type="text" value="{{ $participant->nom}}" name="nom"><br>
                <label for="">Numero de cni</label><br>
                <input type="text" value="{{ $participant->num_cni}}" class="form-control" id="num_cni"
                    placeholder="Label" name="num_cni"><br>
                <label for="">Age</label><br>
                <input type="number" value="{{ $participant->age}}" name="age"><br>
                <label for="">Sexe</label><br>
                <input type="text" value="{{ $participant->sexe}}" name="sexe"><br>
                <label for="">Status</label><br>
                <input type="text" value="{{ $participant->status}}" name="status"><br>
                <label for="">Login</label><br>
                <input type="text" value="{{ $participant->login}}" name="login"><br>
                <label for="">Etat</label><br>
                <input type="text" value="{{ $participant->etat}}" name="etat"><br>
                <label for="">Numero de Telephone</label><br>
                <input type="text" value="{{ $participant->telephone }}" name="telephone"><br>
                <label for="">Email</label><br>
                <input type="text" value="{{ $participant->email }}" name="Email"><br>

                <small id="emailHelp" class="form-text text-muted">Etre une participant</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
