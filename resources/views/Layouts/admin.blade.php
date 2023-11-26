<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <link rel="stylesheet" href="{{asset('fundacionAmor/css/Style.css')}}">
</head>

<body>
    <section class="icon">
        <a href="http://"><img src="icon.png" alt="" sizes="" srcset=""></a>
        
    </section>
    <section class="categorias">
        <div class="categoria">
            <a href="diseno-web.html">Quienes Somos</a>
        </div>
        <div class="categoria">
            <a href="desarrollo-web.html">Que hacemos?</a>
        </div>
        <div class="categoria">
            <a href="desarrollo-apps.html">Oferta laborales</a>
        </div>
        <div class="categoria">
            <a href="desarrollo-wordpress.html">Comentario</a>
        </div>
        <div class="categoria">
            <a href="marketing-digital.html">Contacto</a>
        </div>
        <div class="categoria">
          <a href="marketing-digital.html">Otros</a>
      </div>
    </section>
 
  <section class="hero">
    <h1>FUNDACION MANOS DE AMOR</h1>
    <p>NUESTRA MISIÓN PROMOVER Y DIGNIFICAR A LAS PERSONAS NOS PROPONEMOS MANIFESTAR EL AMOR, MÁS CON GENTE.</p>
    <a class="cta" href="https://wa.me/593969510399?text=HOLA%20BRO" target="_blank">Contacta conmigo</a>
  </section>

 

<section class="galeria">
    <div class="proyecto">
        <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 1">
        <a href="proyecto-1.html">Proyecto 1</a>
    </div>
    <div class="proyecto">
        <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 2">
        <a href="proyecto-2.html">Proyecto 2</a>
    </div>
    <div class="proyecto">
        <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 3">
        <a href="proyecto-3.html">Proyecto 3</a>
    </div>
    <div class="proyecto">
      <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 3">
      <a href="proyecto-3.html">Proyecto 4</a>
    </div>
    <div class="proyecto">
      <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 3">
      <a href="proyecto-3.html">Proyecto 5</a>
    </div>
    <div class="proyecto">
      <img src="https://api.lorem.space/image/dashboard?w=150&h=150" alt="Proyecto 3">
      <a href="proyecto-3.html">Proyecto 6</a>
    </div>
    <!-- Añade más proyectos según sea necesario -->
</section>

  <footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Nombre de la Empresa</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt quod, temporibus illo amet consectetur minima nesciunt atque ipsum laborum eveniet, modi mollitia id ullam quos voluptas. Eligendi, iste repellendus.</p>
        </div>
        <div class="footer-column">
            <h4>Servicios</h4>
            <ul>
                <li><a href="diseno-web.html">Diseño Web</a></li>
                <li><a href="desarrollo-web.html">Desarrollo Web</a></li>
                <li><a href="desarrollo-apps.html">Desarrollo de Apps</a></li>
                <li><a href="desarrollo-wordpress.html">Desarrollo WordPress</a></li>
                <li><a href="marketing-digital.html">Marketing Digital</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Proyectos</h4>
            <ul>
                <li><a href="proyecto-1.html">Proyecto 1</a></li>
                <li><a href="proyecto-2.html">Proyecto 2</a></li>
                <li><a href="proyecto-3.html">Proyecto 3</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Redes Sociales</h4>
            <div class="redes-sociales">
                <a href="https://www.youtube.com" target="_blank">YouTube</a>
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
            </div>
        </div>
    </div>
  </footer>




  <div id="comments-section">
    <h2>Comentarios</h2>
    <p>¿Qué te pareció nuestra página web? ¿Tienes alguna sugerencia o pregunta? Déjanos tu opinión aquí.</p>
    <form id="comment-form" method="post" action="submit-comment.php">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
      </div>
      <div class="form-group">
        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" placeholder="Escribe tu comentario aquí" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" id="submit" name="submit">Enviar comentario</button>
      </div>
    </form>
    <div id="comments-list">
      <h3>Comentarios recientes</h3>
      <!-- Aquí se mostrarán los comentarios de otros usuarios -->
    </div>
  </div>

</body>

</html>



