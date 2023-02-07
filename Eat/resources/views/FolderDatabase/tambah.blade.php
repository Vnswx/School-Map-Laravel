<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('forcss/css/tambah.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4 class="y">Tambah</h4>
        <h4 class="x">Gedung RPS</h4>
        <h4 class="a">@if($gedung == 'gedungrps'){{'Gedung Rps'}} @elseif($gedung == 'gedungteori'){{ 'Gedung Teori' }} @endif</h4>
        <hr>
        <form action="/simpan/{{ $gedung }}" method="post">
            {{ csrf_field() }}
            <label for="0" class="c">Ruang:</label>
            <br>
            <br>
            <select name="ruang_id" id="ruang_id">
                <option disabled value>Pilih Ruang</option>
                @foreach ($dtgedunglab as $item)
                <option value="{{ $item->id }}">{{ $item->ruang }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <br>
            <label for="1" class="c">Wali Kelas:</label>
            <br>
            <br>
            <input type="text" name="walas" id="walas" placeholder="Wali Kelas">
            <br>
            <br>
            <br>
            <label for="2" class="v">Kelas:</label>
            <br>
            <br>
            <input type="text" name="kelas" id="kelas" placeholder="Kelas">
            <br>
            <br>
            <br>
            <label class="AT1" for="3" class="b">Jam Mulai:</label>
            <br>
            <br>
            <input class="A1" type="number" id="jammulai" name="jammulai" placeholder="Jam Mulai">
            <br>
            <br>
            <br>
            <label class="AT2" for="3" class="n">Jam Akhir:</label>
            <br>
            <br>
            <input class="A2" type="number" id="jamakhir" name="jamakhir" placeholder="Jam Akhir">
            
            <button type="submit">Simpan Data</button>
        </form>
    </div>
    <div class="container2">
        <h4 class="TDL">Upload File:</h4>
        <input class="TD" type="file" placeholder="File 3D"> 
        <input class="TD2" type="file" placeholder="File 3D">
        <a href="#"><span class="material-symbols-outlined">
        </span></a>
    </div>
</body>
</html>