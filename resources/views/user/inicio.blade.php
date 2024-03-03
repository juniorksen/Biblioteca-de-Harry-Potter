<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fandom de Harry</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <!-- Encabezado -->
    <header id="header">
        <a class="header-menu-button" id="menu-button"><img src="{{ asset('images/menu.png') }}"></a>
        <img class="header-imagen-titulo" src="./images.platzi-video.png" alt="Platzi Video">

 
        </form>
        <!-- Plantilla con Imagen y Nombre de Usuario -->
    </header>

    <!-- Seccion Menu -->
    <section id="seccion-menu">
        <div class="menu-container">
            <img class="menu-imagen-titulo" src="./images/icono.webp" alt="Platzi Video" width="50px" height="50px">
            
        </div>

        <div class="menu-capa" id="menu-capa"></div>
    </section>

    <!-- Seccion Peliculas -->
    <section id="seccion-peliculas">
        <span class="peliculas-subtitulo">Lee con calma</span>
        <div id="peliculas-accion" class="peliculas-container">
            <div class="pelicula-poster">
                <img src="{{ asset('images/Piedra.webp') }}" alt="First Movie Title">
                <div class="pelicula-info">
                  <h3>La piedra filosofal</h3>
                  <p>Year: 1997</p>
                  <button onclick="location.href='{{ route('user.piedra') }}'">Leer libro</button>
                </div>
              </div>
          
              <div class="pelicula-poster">
                <img src="{{ asset('images/camara.webp') }}" alt="Second Movie Title">
                <div class="pelicula-info">
                  <h3>Harry potter y la camara secreta</h3>
                  <p>Year: 1998</p>
                  <button onclick="location.href='{{ route('user.camara') }}'">Leer libro</button>
                </div>
              </div>

              <div class="pelicula-poster">
                <img src="{{ asset('images/prisionero.webp') }}" alt="Second Movie Title">
                <div class="pelicula-info">
                  <h3>Harry potter y el prisionero de azkaban </h3>
                  <p>Year: 1998</p>
                  <button onclick="location.href='{{ route('user.prisionero') }}'">Leer libro</button>
                </div>
            </div>
        </div>

        <div id="peliculas-accion" class="peliculas-container">
            <div class="pelicula-poster">
                <img src="{{ asset('images/caliz.webp') }}" alt="First Movie Title">
                <div class="pelicula-info">
                  <h3>Harry potter y el caliz de fuego</h3>
                  <p>Year: 1997</p>
                  <button onclick="location.href='{{ route('user.caliz') }}'">Leer libro</button>
                </div>
              </div>

              <div class="pelicula-poster">
                <img src="{{ asset('images/fenix.webp') }}" alt="First Movie Title">
                <div class="pelicula-info">
                  <h3>Harry potter y el orden del fénix</h3>
                  <p>Year: 1997</p>
                  <button onclick="location.href='{{ route('user.fenix') }}'">Leer libro</button>
                  
                </div>
              </div>

              <div class="pelicula-poster">
                <img src="{{ asset('images/principe.webp') }}" alt="First Movie Title">
                <div class="pelicula-info">
                  <h3>Harry potter y el misterio del príncipe</h3>
                  <p>Year: 1997</p>
                  <button onclick="location.href='{{ route('user.principe') }}'">Leer libro</button>
                 
                </div>
              </div>
            </div>

            <div id="peliculas-accion" class="peliculas-container">
                <div class="pelicula-poster">
                    <img src="{{ asset('images/reliquias.webp') }}" alt="First Movie Title">
                    <div class="pelicula-info">
                      <h3>Harry Potter y las reliquias de la muerte</h3>
                      <p>Year: 1997</p>
                      <button onclick="location.href='{{ route('user.reliquias') }}'">Leer libro</button>
                     
                    </div>
                  </div>
                </div>



        <!-- Modal -->
        <section id="modal">
            <!-- Plantilla con los datos de una pelicula seleccionada -->
        </section>
        <script src="/js/index.js"></script>
</body>

</html>