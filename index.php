<?php
//esto llama a los idiomas para hacer el cambio automartico
require "idioma.php";

//este es el link de cpa si lo cambias aqui se cambia en la web siempre dentro de " "...
$linkcpa ="https://lov-me-bttr.com/tds/ae?tdsId=s1127pos_r&tds_campaign=s1127pos&s1=ps&utm_source=int&utm_sub=opnfnl&affid=b9915570&subid={Serie70}&subid2={subid2}&clickid={clickid}";

//este es el link del video de fondo igual siempre dentro de ""
$linkvideo = "https://cdn-dimi.akamaized.net/landings/290389/1723020901/images/video-1.mp4"; 

?>
<html lang="de">   
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Dating,Fotos</title>

    <meta content="https://i.postimg.cc/SQVxd77J/Vista-Uno-Sepia.png" property="og:image">
    <link rel="shortcut icon" href="https://cdn.jmpcdn.com/assets/3420/images/2.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.smrt-content.com/assets/1004/css/index.css">

    <script id="_wau02u">var _wau = _wau || []; _wau.push(["dynamic", "vitico", "02u", "c4302bffffff", "small"]);</script>
    <script async src="//waust.at/d.js"></script>
    <script async src="http://waust.at/c.js"></script>

    <script src="https://cdn.smrt-content.com/assets/1004/js/jquery.min.js"></script>
    <script src="https://cdn.smrt-content.com/assets/1004/js/device.min.js"></script>
    <script src="https://cdn.smrt-content.com/assets/1004/js/custom.js"></script>
    <script src="https://cdn.smrt-content.com/assets/1004/js/backoffer.js"></script>

    <style>
        /* --- ESTILOS DEL BOTÓN (COLOR MAGENTA A ROJO) --- */
        .btn-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            
            /* Ajustes de tamaño: Más ancho y más fino (Responsivo) */
            width: 90%; 
            max-width: 320px; 
            padding: 12px 0; 
            margin: 20px auto;
            box-sizing: border-box;
            
            font-size: 26px; 
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #ffffff !important;
            text-decoration: none;
            text-transform: uppercase;
            
            /* Degradado de magenta a rojo basado en la nueva imagen */
            background: linear-gradient(90deg, #c240a1 0%, #da1922 100%); 
            border: none; /* Sin borde blanco para igualar la imagen */
            border-radius: 50px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4); /* Sombra exterior para dar profundidad */
            
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* Alineación estricta del texto y la flecha en una sola línea */
        .btn-custom span {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Sombra en el texto */
            display: flex;
            align-items: center;
            gap: 10px; 
            white-space: nowrap; 
        }

        /* Efecto de movimiento blanco (brillo) al pasar el cursor */
        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.7) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg);
            transition: all 0.6s ease;
            z-index: 1;
        }

        /* Animación al pasar el mouse */
        .btn-custom:hover::before {
            left: 150%;
        }

        .btn-custom:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
        }

        /* Regla extra para pantallas muy pequeñas */
        @media (max-width: 360px) {
            .btn-custom {
                width: 95%;
                font-size: 24px;
            }
        }
    </style>
</head> 
  <body>        
        <div class="layer"></div>        
        <div class="wrap">                
                <div class="step-block">                        
                        <div class=" "><img src=" " alt=""></div>                        
                        <div class="step-item" style="display: block;">                                
                                <div class="question-title "><?php echo $texto0;?></div>                                
                                <div class="buttons-block">                                        
                                        <!-- Enlace modificado -->
                                        <a href="<?php echo $linkcpa;?>" class="step-btn submit-btn tr-submit-button showmail btn-custom">
                                            <span>SÍ &rarr;</span>
                                        </a>                                
                                </div>                        
                        </div>                        
                        <video autoplay muted loop id="VideoBg">                                
                                <source src="<?php echo $linkvideo;?>" type="video/mp4">                        
                        </video>                
                </div>        
        </div>        
  </body>
</html>
