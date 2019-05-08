<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Projekt IIS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">PIIS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <li class="nav-item dropdown osnovni-podatki">
                <a class="nav-link dropdown-toggle" href="#" id="mainNavDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Osnovni podatki
                </a>
                <div class="dropdown-menu" aria-labelledby="mainNavDropdown">
                    <a class="dropdown-item" href="/delavec">tabela Delavec</a>
                    <a class="dropdown-item" href="/kupec">tabela Kupec</a>
                    <a class="dropdown-item" href="/operacija">tabela Operacija</a>
                    <a class="dropdown-item" href="/izdelek">tabela Izdelek</a>
                    <a class="dropdown-item" href="/izdelek_opis">master/detail forma: tabeli izdelek + opis_izdelka</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/izdelek+struktura">master/detail forma: tabeli izdelek + struktura</a>
                    <a class="dropdown-item" href="/izdelek+operacija">master/detail forma: tabeli izdelek + izdelek_operacije</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Obračun dela
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/delovniNalog">poročilo in vnosni obrazec: delovni_nalog</a>
                <a class="dropdown-item" href="/vrstica-obracun">poročilo in vnosni obrazec: vrstica_obracuna</a>
                <a class="dropdown-item" href="/izpolnjevanje-norme">poročilo: izpolnjevanje norme v obdobju</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kalkulacije">Kalkulacije</a>
            </li>
        </ul>
        </form>
    </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

