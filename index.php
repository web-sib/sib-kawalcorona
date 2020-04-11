<?php
error_reporting(0);
function get_curl($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_curl("https://api.kawalcorona.com/indonesia/");
$getResult = $result[0];

$resultProv = get_curl("https://api.kawalcorona.com/indonesia/provinsi/");
$getProv = $resultProv;

$resultPositif = get_curl("https://api.kawalcorona.com/positif/");
$getPositif = $resultPositif;

$resultSembuh = get_curl("https://api.kawalcorona.com/sembuh/");
$getSembuh = $resultSembuh;

$resultMeninggal = get_curl("https://api.kawalcorona.com/meninggal/");
$getMeninggal = $resultMeninggal;

$resultGlobal = get_curl("https://api.kawalcorona.com/");
$getGlobal = $resultGlobal;


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <title>SIB-KawalCorona!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-3">
        <div class="container">
            <h1 class="navbar-brand">SIB-KawalCorona</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" style="border-right: 1px solid;" href="index.php?halaman=lokal">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="border-right: 1px solid;" href="index.php?halaman=global">Data Global</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/stay.jpg" class="d-block w-100 pt-4">
            </div>
        </div>
    </div>

    <?php
    $location = $_GET['halaman'];
    if ($location == 'lokal') {
        require "lokal.php";
    } elseif ($location == 'global') {
        require "global.php";
    } else {
        require "lokal.php";
    }

    ?>

    <div class="footer mt-5 pt-5 pb-5">
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <div class="row justify-content-center">
                        <div class="col">
                            <a href="#"><i class="fab fa-facebook mr-2" style="color: #000000;"></i></a> <a href="#"><i class="fab fa-instagram-square" style="color: #000000;"></i></a>
                        </div>
                    </div>
                    <span>WEB SIB</span>
                    <p>Powered by WEB SIB. Made With <i class="fas fa-book"></i> by Aji</p>
                    <p>
                        <h6>websib000@gmail.com</h6>
                    </p>
                </div>
            </div>
        </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#table1").DataTable();
        });
    </script>
</body>

</html>