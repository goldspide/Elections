<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Participant</title>
</head>

<body>


{{--
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>



 --}}

    <a href="participant_liste" class="btn btn-outline-primary">liste</a>

    <div class="d-flex justify-content-center">
        <form action="/participant_inscrit" method="post" class="alert alert-success">
            @csrf
            <div class="form-group">
                <label for=" ">Id_region</label><br>
                <input type="number" class="form-control" id="id_region" placeholder="Entre votre numero de region"
                    name="id_region"><br>

                <label for="">Nom</label><br>
                <input type="text" class="form-control" id="nom" placeholder="Entre votre nom"
                    name="nom"><br>

                <label for=" ">Numero de cni</label><br>
                <input type="text" class="form-control" id="num_cni" placeholder="Entre votre numero de cni"
                    name="num_cni"><br>

                <label for=" ">Age</label><br>
                <input type="number" class="form-control" id="age" placeholder="Entre votre age"
                    name="age"><br>

                <label for=" ">Sexe</label><br>
                <input type="text" class="form-control" id="sexe" placeholder="Entre votre sexe"
                    name="sexe"><br>

                <label for=" ">Status</label><br>
                <input type="text" class="form-control" id="status" placeholder="Entre votre status"
                    name="status"><br>

                <label for=" ">Login</label><br>
                <input type="text" class="form-control" id="login" placeholder="Entre votre login"
                    name="login"><br>

                <label for=" ">passeword</label><br>
                <input type="text" class="form-control" id="password" placeholder="Entre votre password"
                    name="password"><br>

                <label for=" ">etat</label><br>
                <input type="text" class="form-control" id="etat" placeholder="Entre votre etat"
                    name="etat"><br>

                <label for=" ">Numero de telephone</label><br>
                <input type="text" class="form-control" id="telephone" placeholder="Entre votr numero de telephone"
                    name="telephone"><br>

                <label for="exampleInputEmail1">Email</label><br>
                <input type="text" class="form-control" id="email" placeholder="Entre votr numero de cni"
                    name="email"><br>


                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
