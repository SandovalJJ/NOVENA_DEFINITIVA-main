<!DOCTYPE html>
<html>

<head>
  <title>Slot Machine</title>
  <link rel="stylesheet" href="css/stylee.css"/>
  <style>
    

    .modal-content {
    background-color: #fefefe;
    margin: 15% auto; 
    padding: 20px;
    border: 1px solid #888;
    width: 60%; /* Ajusta al tamaño que prefieras */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 15px; /* Bordes redondeados para menos cuadratura */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    }

    .modal-content p {
        font-size: 64px; /* Aumenta el tamaño de la fuente del texto del modal */
        color: #333; /* Color de texto más oscuro para mejor legibilidad */
        text-align: center; /* Centrar texto si es necesario */
        margin-top: 20px;
    }

    .close {
        color: #aaa;
        float: none; /* Quita el float para centrar el botón de cerrar si es necesario */
        font-size: 28px; /* Aumenta el tamaño si es necesario */
        font-weight: bold;
        position: absolute; /* Posiciona absolutamente para colocarlo en la esquina superior derecha */
        right: 20px; /* Espaciado desde el lado derecho del modal */
        top: 20px; /* Espaciado desde la parte superior del modal */
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }


        .canada-theme-button {
            background-color: #c50404; /* Rojo oscuro, similar al de la página */
            color: white; /* Texto en blanco para contraste */
            font-weight: bold; /* Letras en negrita */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            padding: 10px 20px; /* Espaciado interno */
            font-size: 36px; /* Tamaño de fuente */
            cursor: pointer; /* Cambiar cursor a puntero */
            transition: all 0.3s ease; /* Transición suave para efectos */
            box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.6); /* Sombra blanca */
            margin-right: 10px; /* Margen entre botones */
        }

        .canada-theme-button:hover {
            background-color: #ff0000; /* Rojo más brillante al pasar el mouse */
            box-shadow: 0px 4px 20px rgba(255, 255, 255, 0.8); /* Sombra blanca más grande en hover */
        }

        /* ... Resto de tus estilos ... */
</style>


  <style>
    .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
        }

            body {
        background-image: url('{{ asset("img/fondo-juego.png") }}');
        background-size: contain; /* Ajusta la imagen al 100% del alto y ancho del elemento */
        background-repeat: no-repeat;
        background-position: center; /* Centra la imagen de fondo */
            }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .slotcontainer {
            display:flex ;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .slot {
        width: 262.5px; /* 150px * 1.75 */
        height: 393.75px; /* 225px * 1.75 */
            border: 1px solid black;
            border-radius: 7.5px;
            display: inline-block;
            overflow: hidden;
            position: relative;
            background: #fafafa;
            box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.4) inset;
        }

        .slot .symbols {
            position: absolute;
            top: 0;
            left: 0;
            transition: top 5s;
        }

        .slot .symbol {
        width: 262.5px; /* Igual al ancho del .slot */
        height: 393.75px; /* Igual al alto del .slot */
        font-size: 157.5px; /* 90px * 1.75 */
        line-height: 262.5px; /* 150px * 1.75 */
            display: block;
            text-align: center;
            padding-top: 37.5px; /* Ajustado para el nuevo tamaño */
        }

        button {
            margin: 0 0px;
            padding: 10px 20px;
            font-size: 16px;
        }


        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .winners-container {
            width: 200px;
            margin-left: 20px;
            padding: 10px;
            background-color: #fff;
            border: 2px solid red;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            background-image: url('path_to_your_canadian_or_christmas_theme_image');
            background-size: cover;
        }

        .winners-container h2 {
            text-align: center;
            color: red;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 10px;
        }

        #winnersList {
            list-style: none;
            padding: 0;
        }

        #winnersList li {
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 5px;
            padding: 5px;
            border-radius: 5px;
            font-size: 14px;
        }


        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

  </style>
</head>

<body>
  <div class="container">
    <form action="{{ route('seleccionar.ganador') }}" method="POST">
        @csrf <!-- Protección CSRF -->
        <button type="submit" class="canada-theme-button">Seleccionar Ganador</button>
    </form>
  </div>
    
</body>

</html>

