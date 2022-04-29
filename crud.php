<!DOCTYPE html>
<?php 
require 'assets/class/config.php';
require 'assets/class/select.php';




?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose - Panel admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/sl-1.2.6/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/sl-1.2.6/datatables.min.js"></script>
    <link rel="stylesheet" href="assets/css/crud.css">
  
</head>
<body>
<table id="table_id" class="display">
<div class="container-fluid">
      <table id="example" class="table table-striped table-bordered nowrap" width="100%">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Mail</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
    <tbody>
        <tr>
        <?php
            $rose = new rose;
            $result = $rose->index();
          foreach($result as $row)
            {
          ?>
        <tr>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['prenom'] ?></td>
          <td><?= $row['tel'] ?></td>
          <td><?= $row['mail'] ?></td>

          
          <td><button class="butUpdate" onclick="updateUser()">Update</button></td>
          <td><button class="butDelete" onclick="document.location.href='mesFonctionsSQL.php?id=<?php echo $row['id'] ?>' " ?>Delete</button></td>
          <?php
            }
            ?>
        </tr>
    </tbody>
</table>



<script src ="assets/js/table.js"></script> 
</body>
</html>