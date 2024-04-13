<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Isa Boutique and Fashion Style</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    
<header class="header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('img/isabelogo.jpeg') }}" alt="">
    </a>
    
    <nav class="navbar">
        <a href="{{ url('/') }}">INICIO</a>
        
        <div class="dropdown">
            <a href="#" class="dropbtn">CATALOGO</a>
            <div class="dropdown-content">   
                <a href="{{ url('Hombres.php') }}"><i class="fas fa-male"></i> HOMBRES</a>
                <a href="{{ url('Mujeres.php') }}"><i class="fas fa-female"></i> MUJERES</a>
                <a href="{{ url('Niños.php') }}"><i class="fas fa-child"></i> NIÑOS</a>
            </div>
        </div>
        <a href="{{ url('Sucursal.php') }}">SUCURSALES</a>
        <a href="{{ url('Contacto.php') }}">CONTACTO</a>
        <a href="{{ url('About.php') }}">ACERCA DE</a>
    </nav>
    
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="dropdown">
            <button class="fas fa-user dropbtn" id="profile-btn"></button>
            <div class="profile-options" id="profile-options">
                <a href="{{ url('login.php') }}">Identifícate</a>
                <a href="{{ url('historial.php') }}">Historial de Búsqueda</a>
            </div>
        </div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
</header>

    <section class="home" id="home">
        <div class="content">
            <h2 class="text1">Descubre tu estilo único en nuestra tienda de moda</h2>
            <h2 class="text2">Descubre tu estilo único en nuestra tienda de moda</h2>
        </div>
        <a href="Hombres.php" class="btn">Order now</a>
    </section>


    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="credit">© 2024 isa boutique and fashion style | Todos los derechos reservados</div>
    </section>

    

</body>
</html>
