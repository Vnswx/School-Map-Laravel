<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('forcss/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <img src="{{ asset('forcss/img/logo-tb.png') }}" alt="">
        <h1>SMK Taruna Bhakti</h1>
        <h2>Admin Guru</h2>

        <hr>

        <a href="#"><span class="material-symbols-outlined">database</span>  Dashboard</a>
        <a href="#"><span class="material-symbols-outlined">domain</span>  Gedung Teori</a>
        <a href="#"><span class="material-symbols-outlined">labs</span>  Gedung Lab</a>
        <a href="#"><span class="material-symbols-outlined">location_away</span>  Gedung RPS</a>
        <p>Developed by SMK Taruna Bhakti</p>
    </div>


    <div class="container">
        <h1>Gedung Teori</h1>
        <hr>
        <h2>Lantai 2</h2>
        <div class="center">


            <table>
                <tr>
                    <th>Ruang 1</th>
                    <th>Ruang 2</th>
                    <th>Ruang 3</th>
                    <th>Ruang 4</th>
                </tr>
                <tr>
                    <td>Nama Walas 
                        Kelas
                        jam belajar
                    </td>
                    <td>Nama Walas 
                        Kelas
                        jam belajar
                    </td>
                    <td>Nama Walas 
                        Kelas
                        jam belajar
                    </td>
                    <td>Nama Walas 
                        Kelas
                        jam belajar
                    </td>
                </tr>
            </table>
        </div>
        
        <button>Next</button>
    </div>
</body>
</html>