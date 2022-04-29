<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Rose Etern'ails - Connexion admin</title>
</head>
<body>
    <section class="sectForm">
        
        <div class="divForm">
            
            <form class="formish" action="trait_connex_admin.php" method="post">
                <h1 class="titleAdmin">Panel Administrateur</h1>
                <input type="email" autocomplete="off" name="admin_mail" placeholder = "Entrez votre mail" required>
                <input type="password" name="admin_password" placeholder = "Entrez votre mot de passe" required>
                <button class="buttonFormAdmin" type="submit">Entrer</button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>