<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ManoManoExpress</title>
</head>

<body>
    <div class="header bg-white">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img class="logoExpress" src="assets/images/logoManomano.png" alt="logo">
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

    <section class="articles">
        <div class="intro container d-flex flex-column justify-content-around align-items-center">
            <input type="text" class="research form-control" id="inputPassword" placeholder="🔍 Faire votre recherche sur ManoMano Express">
            <button type="button" class="btn btn-light">Plomberie chauffage</button>
            <h6 class="fst-italic text-warning">Articles éligibles pour la livraison par drône :</h6>
        </div>
        <div class="container bg-light pb-3">
            <h3 class="text-center">Corps thermostatique equerre 15/21 mâle / femelle laiton nickelé DANFOSS</h3>
            <p class="mb-0">Ref : 68383602</p>
            <p class="text-end mb-0 text-decoration-underline">Prix : 12,59 euros / HT</p>
            <div class="article d-flex justify-content-around">
                <img src="assets/images/danfoss-équerre.jpeg" id="img1-1" class="img-thumbnail pb-2" width="150">
                <div class="buttons d-flex flex-column justify-content-around align-items-center">
                    <input class="btn btn-warning" type="button" value="achat immédiat" id="button_ecart">
                    <input class="btn btn-warning" type="button" value="ajouter au panier" id="add">
                </div>
            </div>
        </div>
        <div class="container bg-light pb-3 mt-4">
            <h3 class="text-center">Corps thermostatique equerre 15/21 mâle / femelle laiton chromé DANFOSS</h3>
            <p class="mb-0">Ref : 68383595</p>
            <p class="text-end mb-0 text-decoration-underline">Prix : 21,69 euros / HT</p>
            <div class="article d-flex justify-content-around">
                <img src="assets/images/danfoss-équerre2.jpeg" id="img1-1" class="img-thumbnail pb-2" width="150">
                <div class="buttons d-flex flex-column justify-content-around align-items-center">
                    <input class="btn btn-warning" type="button" value="achat immédiat" id="button_ecart">
                    <input class="btn btn-warning" type="button" value="ajouter au panier" id="add2">
                </div>
            </div>
        </div>
        <div id="myAlert" class="alert alert-warning collapse">
            <a id="linkClose" class="close">&times;</a>
            <strong>Article ajouté au panier</strong>
        </div>
        <div class="mon panier mt-4 text-center">
            <a href="/finalpage.php"><button type="button" class="btn btn-light">Valider mon Panier</button></a>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#add').click(function() {
                $('#myAlert').show('fade');

                setTimeout(function(){
                    $('#myAlert').hide('fade');
                }, 1500);
            });
       
            $('#linkclose').click(function(){
                $('#myAlert').hide('fade');
            });
        });

        $(document).ready(function() {
            $('#add2').click(function() {
                $('#myAlert').show('fade');

                setTimeout(function(){
                    $('#myAlert').hide('fade');
                }, 1500);
            });
       
            $('#linkclose').click(function(){
                $('#myAlert').hide('fade');
            });
        });
    </script>
</body>

</html>