<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('forcss/css/one.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> 

    <!--  OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
   <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

    <!--  OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
 <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script> 
    
    <!--  OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types -->

   <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>
    <title>Denah</title>
</head>
<body>
    <div class="sub">
        <img src="{{ asset('forcss/img/logo-tb.png') }}">
        <p> SMK TARUNA BHAKTI</p>
    </div>
    <div class="nav">
        <div class="nao">
            <h1>Gedung Teori</h1>
        <h2>Lantai 1</h2>
        <a href="welcome" class="a6"><button>Ruang 1</button></a>
        <a href="#" class="a6"><button>Ruang 2</button></a>
        <a href="#" class="a6"><button>Ruang 3</button></a>
        <a href="#" class="a6"><button>Ruang 4</button></a>
        <h2>Lantai 2</h2>
        <a href="" class="a6"><button>Ruang 5</button></a>
        <a href="" class="a6"><button>Ruang 6</button></a>
        <a href="" class="a6"><button>Ruang 7</button></a>
        <a href="" class="a6"><button>Ruang 8</button></a>
        <h2>Lantai 3</h2>
        <a href="" class="a6"><button>Ruang 9</button></a>
        <a href="" class="a6"><button>Ruang 10</button></a>
        <a href="" class="a6"><button>Ruang 11</button></a>
        <a href=""><button>Ruang 12</button></a>
        <h2> Lantai 4</h2>
        <a href=""  class="a6"class="a6"><button>Ruang 13</button></a>
        <a href=""  class="a6"class="a6"><button>Ruang 14</button></a>
        <a href=""  class="a6"class="a6"><button>Ruang 15</button></a>
        <a href=""  class="a6"class="a6"><button>Ruang 16</button></a>
            <h1>Gedung Lab</h1>
        <h2>Lantai 1</h2>
        <a href=""  class="a6"class="a6"><button>Lab BRF R28</button></a>
        <a href=""  class="a6"class="a6"><button>Tata Usaha</button></a>
        <a href=""  class="a6"class="a6"><button>Sarpras</button></a>
        <h2>Lantai 2</h2>
        <a href="" class="a6"><button>Ruang 24</button></a>
        <a href="" class="a6"><button>Ruang 25</button></a>
        <a href="" class="a6"><button>Data Center TJKT</button></a>
        <a href="" class="a6"><button>Ruang BK</button></a>
        <h2>Lantai 3</h2>
        <a href="" class="a6"><button>Ruang 21</button></a>
        <a href="" class="a6"><button>Ruang 22</button></a>
        <a href="" class="a6"><button>Ruang 23</button></a>
        <a href="" class="a6"><button>Ruang MPK/OSIS</button></a>
        <h2>Lantai 4</h2>
        <a href="" class="a6"><button>Ruang 17</button></a>
        <a href="" class="a6"><button>Ruang 18</button></a>
        <a href="" class="a6"><button>Ruang 19</button></a>
        <a href="" class="a6"><button>Ruang 20</button></a>
            <h1>Gedung RPS</h1>
        <h2>Lantai 1</h2>
        <a href="" class="a6"><button>Ruang 29</button></a>
        <a href="" class="a6"><button>Ruang 30</button></a>
        <a href="" class="a6"><button>RPS TE 1</button></a>
        <a href="" class="a6"><button>Studio BRF</button></a>
        <h2>Lantai 2</h2>
        <a href="" class="a6"><button>RPS TE 2</button></a>
        <a href="" class="a6"><button>Data Center Animasi</button></a>
        </div>
    </div>  
    <div class="sda"></div>

    <div class="asd">
        <p>Lab Cobaan</p>
            <div class="sad">
                <model-viewer src="{{ asset('forcss/3d/Kelas.gltf') }}" alt="Denah" shadow-intensity="2" camera-controls auto-rotate ar>
                    <button id="hotspotButton"
                    slot="hotspot-one"
                    data-position="0.16 0.1 0.17" data-normal="-0.07 0.97 0.23">OOMaga</button>
                </model-viewer>
    </div>
    </div>
    <div class="minimap">
        <video controls>
            <source src="{{ asset('forcss/video/Earth.mp4') }}" type="video/mp4  ">
        </video>
        <div class="sdaa"></div>   
    </div>
    <div class="bawah">
        @foreach ($dtgedunglab as $item)
            
        <p>Ruang 28</p>
        <br>
        <p>{{ $item->id }}</p>
    </div>
    <div class="bawah2">
        <p>Jam Belajar</p>
        <br>
        <p>{{ $item->jammulai }} &nbsp; {{ $item->jamakhir }}</p>
    </div>
    <div class="bawah3">
        <p>Jurusan</p>
        <br>
        <p>{{ $item-> ruang }}</p>
    </div>
    @endforeach
    <script type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
	  </script>

	<!-- Loads <model-viewer> for old browsers like IE11: -->
	<script nomodule
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
	</script>

<script>
    hotspotButton.addEventListener('click', () => {
      if (modelViewer.paused) {
        modelViewer.play();
      } else {
        modelViewer.pause();
      }
    });
    </script>

<script type="module">
    const modelViewer = document.querySelector("model-viewer"); window.switchSrc = (element, name) => { const base = "../Assets/Models/" + name; modelViewer.src = base + '.glb'; const size = document.querySelectorAll(".size"); size.forEach((element) => {element.classList.remove("selected");
    var colors = document.getElementById("variant"); var colorButton = colors.firstChild; while( colorButton ) { colors.removeChild( colorButton ); colorButton = colors.firstChild; }}); element.classList.add("selected"); }; document.querySelector(".sizebuttons").addEventListener('beforexrselect',
    (ev) => { ev.preventDefault(); });
  </script>
  
  <!-- Color Script -->
  <script type="module">
    const modelViewerVariants = document.querySelector("model-viewer"); const select = document.querySelector('#variant'); modelViewerVariants.addEventListener('load', () => { const names = modelViewerVariants.availableVariants; for (const name of names)
    { const color = document.createElement('button'); color.value = name; color.textContent = name; select.appendChild(color); } }); document.getElementById('variant').addEventListener('click', (event) => { modelViewerVariants.variantName = event.target.value;
    });
  </script>
</body> 
</html>