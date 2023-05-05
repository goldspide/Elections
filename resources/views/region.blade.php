<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Region</title>
</head>

<body>
    <a href="participant" class="btn btn-outline-primary">liste</a>
    
    <div class="d-flex justify-content-center">
        <form action="" method="post" class="alert alert-success">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Label</label><br>
                <input type="text" class="form-control" id="label" 
                    placeholder="Label" name="label"><br>
                <small id="emailHelp" class="form-text text-muted">Etre une region</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
