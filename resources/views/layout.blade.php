<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage School</title>
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .cardsShow{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin: 20px 200px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 30px;
            background-color: rgb(214, 188, 221);
        }
        .linkcolor{
            color: white !important;
            font-weight: bold !important;
            font-size: 18px;
        }
        table th{
            font-size: 16px;
            font-weight: bold;
            color:white;
            padding: 15px 5px ;
            background-color: rgb(117, 8, 117);
        }
        table td{
            font-size: 16px;
            padding: 10px 5px ;
            background-color: rgb(247, 247, 247);
        }
        .cardsEdit{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin: 10px 150px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 20px;
            background-color: rgb(214, 188, 221);
        }
        .cardsCreate{
            margin: 10px 150px;
            border:3px solid rgb(117, 8, 117);
            border-radius: 15px;
            padding: 20px;
            background-color: rgb(214, 188, 221);
        }
        .size{
            font-size: 20px;
        }
        .color{
            background-color: rgb(194, 19, 194) !important;
            border:3px solid rgb(121, 14, 121) !important;
            font-weight: bold!important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iN17C2tTGo5GOZSRXkaT9tiZcL21eY49F9RXpD5N5/6bz4l4+BMWI15Z5" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div>
                <img src="/images/logo2.PNG" width="100" height="80" style="border-radius: 40%; margin:5px">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active linkcolor">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item linkcolor">
                        <a class="nav-link" href="/students">Students</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Inclure Bootstrap JS et les dépendances -->
    <script src="js/bootstrap.bundle.min.js" ></script></head>
</body>
</html>
