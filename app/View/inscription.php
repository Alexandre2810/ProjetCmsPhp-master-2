<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>inscription</title>
    <meta name="description" content="Une phrase d'environ 170 caractères">
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href= "../css/style.css" rel="stylesheet">
</head>
<body>
    <form action="formulaire.php" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom d'utilisateur">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Mot de passe</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Confirmation mot de passe</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe">
        </div>
        <button type="button" class="btn btn-primary">Valider</button>
        <button type="button" class="btn btn-danger"><a href="../index.php">Retour</a></button>
    </form>
</body>
</html>