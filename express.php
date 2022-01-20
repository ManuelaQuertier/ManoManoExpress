<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>ManoManoExpress</title>
</head>

<body>
    <div class="header bg-white">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/index.php"><img class="logoExpress" src="assets/images/logoManomano.png" alt="logo"></a>
                <div class="localisation d-flex align-items-center">
                    <img class="logoLoca" src="assets/images/localisation.png" alt="localisation">
                    <p class="mb-0">ma position</p>
                </div>
                <div class="user">
                    <img src="assets/images/person-circle.svg" alt="user">
                    <a href="/finalpage.php"><img src="assets/images/caddie.png" alt="caddie" width="15px" height="15px"></a>
                </div>
            </div>
        </nav>
    </div>
    <div class="drone container-fluid d-flex justify-content-between">
        <p class="text-end align-self-center">Livraison express<br> de petits outillages<br> et matériaux par<br> drône.</p>
        <h1 class="align-self-end pb-3">ManoMano Express</h1>
    </div>
    <div class="searchNav container d-flex flex-column justify-content-around">
        <div class="container d-flex flex-column justify-content-between align-items-center">
            <button type="button" class="urgence btn btn-light">
                <h2 class="mb-0">Une Urgence?</h2>
                <p class="mb-0">Contactez-nous par téléphone 📞</p>
            </button>
            <input type="text" class="research form-control mt-3" placeholder="🔍 Faire une recherche sur ManoMano Express">
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary">Outillages</button>
            <button type="button" class="btn btn-secondary">Plomberie chauffage</button>
            <button type="button" class="btn btn-secondary">Electricité</button>
        </div>
    </div>
    <div class="formAdress container bg-white mt-4">
        <h5 class="mb-0 text-center">Saisissez votre adresse de livraison</h5>
        <p class="text-center mb-5"> ou activez la localisation</p>
        <div class="row mb-4">
            <div class="col-12">
                <input class="form-control form-control-sm" type="text" placeholder="Entreprise ou nom du destinataire">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-2">
                <input class="form-control form-control-sm" type="text" placeholder="n°">
            </div>
            <div class="col-10">
                <input class="form-control form-control-sm" type="text" placeholder="nom de rue">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
                <input class="form-control form-control-sm" type="text" placeholder="code postal">
            </div>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" placeholder="ville">
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <a href="/articles.php"><button type="button" class="btn btn-dark commander">Commander</button></a>
        </div>

    </div>
</body>

</html>