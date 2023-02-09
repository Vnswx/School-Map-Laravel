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
        <img src="{{ asset('forcss/img/Group 705.png') }}" alt="">
        <h1>SMK Taruna Bhakti</h1>
        <h2>Hi! {{ Auth::user()->name ?? 'none' }}</h2>

        <hr>

        <a href="/gedung/fash"><span class="material-symbols-outlined">database</span>  Dashboard</a>
        <a href="/gedung/gedungteori"><span class="material-symbols-outlined">domain</span>  Gedung Teori</a>
        <a href="/gedung/gedunglab"><span class="material-symbols-outlined">labs</span>  Gedung Lab</a>
        <a href="/gedung/gedungrps"><span class="material-symbols-outlined">location_away</span>  Gedung RPS</a>
        <p>Developed by SMK Taruna Bhakti</p>
    </div>


    <div class="container">
        <h1>Gedung Lab</h1>
        <hr>
        <div class="center">
            <a href="/tambah/gedunglab" class="k"><span class="material-symbols-outlined">add</span>Tambah Data</a> 
            @foreach ($dtgedunglab as $item)
            

            <div class="square">
            <h2>Lantai {{ $item->lantai->lantai }}</h2>
                <div class="h1">Ruang   {{ $item->ruang->ruang }}</div>
                <div class="oi">
                    <h2>Nama Walas : <br> {{ $item->walas }}</h2>
                    <h2>Kelas : <br> {{ $item->kelas }}</h2>
                    <h2>Jam Belajar : <br> {{ $item->jammulai }} - {{ $item->jamakhir }}</h2>
                    <a href="{{ url('delete',$item->id) }}" class="w"><span class="material-symbols-outlined">delete</span></a>
                    <a href="" class="z"><span class="material-symbols-outlined">edit</span></a> 
                </div>
            </div>
            @endforeach
        </div>
        
        {{ $dtgedunglab->links() }}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>