<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Isa Boutique and Fashion Style</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="Views/js/script.js"></script>
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
    

    <section class="about" id="about">
        <h1 class="heading"> <span>Acerca De</span> Nosotros </h1>
        <div class="row">
            <div class="image">
                <img src="Views/img/ima344.jpg" alt="">
            </div>
            <div class="content">
                <h3>¿Quienes somos?</h3>
                <p>En Isa y Boutique, estamos comprometidos a ofrecerte lo último en moda y estilo. Fundada en [Año de Fundación], nos enorgullece ser una marca que celebra la individualidad, la creatividad y la expresión personal a través de la ropa.</p>
                <p>Desde nuestros modestos comienzos en [Ubicación], hemos crecido hasta convertirnos en un destino de moda confiable para hombres, mujeres y niños que buscan prendas de calidad que se ajusten a su estilo de vida único. Nos esforzamos por proporcionar una experiencia de compra excepcional, desde la selección de productos cuidadosamente curada hasta un servicio al cliente excepcional.</p>
                <p>En Isa y Boutique, creemos en la importancia de la sostenibilidad y la ética en la industria de la moda. Nos esforzamos por colaborar con marcas que comparten nuestros valores y están comprometidas con prácticas responsables en la producción de prendas de vestir.</p>
                <p>Nuestra misión es simple: ayudarte a lucir y sentirte lo mejor posible en cada ocasión. Ya sea que estés buscando un atuendo casual para el día a día o prendas elegantes para una ocasión especial, tenemos todo lo que necesitas para completar tu armario de manera elegante y asequible.</p>
                <p>¡Gracias por elegir a Isa Y Boutique como tu destino de moda preferido! Esperamos que disfrutes explorando nuestra colección y que encuentres algo que te inspire.</p>
        
            </div>
        </div>
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
