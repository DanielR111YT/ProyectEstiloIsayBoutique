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
        <a href="{{ url('sucursal') }}">SUCURSALES</a>
        <a href="{{ url('contacto') }}">CONTACTO</a>
        <a href="{{ url('acercade') }}">ACERCA DE</a>
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

    <div class="sucursal">
        <h3>Direccion | 141- Sector, Cra. 45 Sur #1255, Ibagué, Tolima</h3>
        <div class="box">
            <div class="content-box">
                <div class="ubi">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7956.109919553865!2d-75.1505249!3d4.4008193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38daac36ef33ef%3A0xc4167c4b60b14a15!2sSENA%20Centro%20de%20Industria%20y%20de%20la%20Construcci%C3%B3n!5e0!3m2!1ses-419!2sco!4v1710054179368!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
       </div>
    </div>

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