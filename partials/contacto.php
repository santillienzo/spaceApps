<section class="contacto" id="contact">
    <div class="title">
        <h3>CONTACTO</h3>
    </div>
    <div class="form_container">
        <form action="service/email.php" method="POST">
            <div class="sobre_img">
                <img src="Images/decoracion/sobre.png" alt="">
            </div>
            <p class="title-info">Envíanos un e-mail</p>
            
            <input type="text" placeholder="Nombre y Apellido" name="name_personal">
            <input type="email" placeholder="Dirección de correo electrónico" name="email">
            <input type="phone" placeholder="Número telefónico" name="phone">
            <input type="text" name="asunto" placeholder="Asunto">
            <textarea name="mensaje" placeholder="Escribe tu mensaje aquí"></textarea>
            <?php
                if (isset($_GET["e"])) {
                    switch ($_GET['e']) {
                        case '1':
                            echo 
                            '<p class="error_enviar">Por favor complete todos los campos.</p>';
                            break;
                        case '2':
                            echo 
                            '<p class="error_enviar">Número de teléfono inválido.</p>';
                            break;
                        case '3':
                            echo 
                            '<p class="error_enviar">Dirección de correo inválida.</p>';
                            break;														
                            default:
                            break;
                        }
                }
            ?>
            <button name="btn">Enviar</button>
        </form>
    </div>
    
    <div class="more_info-container">
        <div class="ayuda_contacto">
            <div class="email_img">
                <img src="Images/decoracion/email.png" alt="">
            </div>
            <p>Una vez enviado el e-mail o mensaje nos contactaremos con usted para brindarle información relacionada al precio del trabajo, métodos de cobro y demás.</p>
        </div>
        <div class="redes_sociales">
            <ul>
                <li><a href="https://wa.me/542634786580"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="https://www.facebook.com/spaceappsdev"><i class="fab fa-facebook-f"></a></i></li>
                <li><a href="https://www.instagram.com/spaceappsdev/?hl=es-la"><i class="fab fa-instagram"></a></i></li>
                <li><a href="https://twitter.com/spaceappsdev"><i class="fab fa-twitter"></a></i></li>
                <li><a href="https://www.youtube.com/channel/UCF3KM2RqfJmg-bJLQoOTMuQ"><i class="fab fa-youtube"></a></i></li>
            </ul>
        </div>
    </div>
</section>