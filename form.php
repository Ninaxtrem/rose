<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post" action="assets/php/insert.php" id="form">

    <div class="mb-3">
     <label for="exampleInputRace1" class="form-label">Nom</label>
    <input type="nom" class="form-control" id="Nom" aria-describedby="nomHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">prenom</label>
    <input type="prenom" class="form-control" id="prenom" aria-describedby="prenom" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">tel</label>
    <input type="tel" class="form-control" id="tel" aria-describedby="tel" name="telephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>