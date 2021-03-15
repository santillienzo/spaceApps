<?php
    
if (isset($_POST['btn'])) {
    if (!empty($_POST['name_personal']) && !empty($_POST['email']) && 
        !empty($_POST['phone']) && !empty($_POST['asunto']) &&
        !empty($_POST['mensaje'])) {
            $destinatario = 'spaceappsdev@spaceapps.com.ar';
        
            $name = $_POST['name_personal'];
            $phone = $_POST['phone'];
            $correo = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            
            if (is_numeric($phone)) {

                if (filter_var($correo,FILTER_VALIDATE_EMAIL)) {
                    $header = "From: ".$correo. "\r\n";
                    $header .= "Reply-to: ".$correo. "\r\n";
                    $header .= "X-Mailer: PHP/". phpversion();
                    $mensajeCompleto = "Nombre: ".$name."\nNúmero de teléfono: ".$phone."\nMensaje: " .$mensaje;
                
                    $envio = mail($destinatario,$asunto,$mensajeCompleto,$header);
                    if ($envio) {
                        header("Location: ../?congrat=1");
                    }   
                }else{
                    header("Location: ../?e=3#contact");
                }

            }else{
            header("Location: ../?e=2#contact");
            }
    }else{
        header("Location: ../?e=1#contact");
    }
}