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
    <main class="main-final container">
        <h1 class="text-light pt-2 text-center"><em>Mon Panier</em></h1>
        <div class="article pt-2">
            <div class="d-flex">
                <div class="small-img">
                    <img class="small-img" src="/assets/images/danfoss-équerre.jpeg" />
                </div>
                <div class="detail-article">
                    <p class="text-light text-article px-2">Corps thermostatique equerre 15/21 mâle
                        / femelle laiton nickelé DANFOSS
                    </p>
                    <p class="text-light text-article px-2">Réf : 68383602</p>
                    <p class="text-light text-article px-2">Prix Unitaire : 12,59 euros/HT</p>
                </div>
            </div>
            <div class="total-article d-flex">
                <button class="btn btn-warning btn-sm btn-supp" type="button">Supprimer</button>
                <p class="text-light quantite">Quantités : </p>
                <div class="num-qt">
                    <p>1</p>
                </div>
            </div>
        </div>
        <div class="trait-dessus"></div>
        <div class="article pt-2">
            <div class="d-flex">
                <div class="small-img">
                    <img class="small-img" src="/assets/images/danfoss-équerre2.jpeg" />
                </div>
                <div class="detail-article">
                    <p class="text-light text-article px-2">Corps thermostatique equerre 15/21 mâle
                        / femelle laiton chromé DANFOSS
                    </p>
                    <p class="text-light text-article px-2">Réf : 68383595</p>
                    <p class="text-light text-article px-2">Prix Unitaire : 21,69 euros/HT</p>
                </div>
            </div>
            <div class="total-article d-flex">
                <button class="btn btn-warning btn-sm btn-supp" type="button">Supprimer</button>
                <p class="text-light quantite">Quantités : </p>
                <div class="num-qt">
                    <p>1</p>
                </div>
            </div>
        </div>
        <div class="trait-dessus"></div>
        <div class="Total d-flex flex-column align-item-center">
            <h2 class="text-light total-ht py-2">TOTAL HT : 34,28 Euros</h2>
        </div>
        <div class="validation d-flex flex-column align-items-center">
            <button onclick="window.location.href = 'http://localhost:8000/confirmation.php';"class="btn btn-warning my-2" type="button">Validation de la commande</button>
        </div>
        <div class="Estimation d-flex flex-column align-items-center py-2">
            <h2 class="text-light">Estimation livraison : 34 mn</h2>
            <p class="text-light">Vous serez alerté 5 mn avant l'arriver du drone</p>
        </div>
        <div class="géolocalisation">
            <img class="img-geo" src="/assets/images/Capture3.JPG">
        </div>
    </main>
</body>
</html>