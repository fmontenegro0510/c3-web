<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>CMyJE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>assets/img/v1/favicon/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <!-- chatbot -->
    <script src="<?php echo base_url(); ?>assets/js/chatbot.js" defer></script>


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">


    <!-- table -->
    <link href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <!-- end Table -->


    <!-- share script -->
    <!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65c62b763625b4001a8bcf67&product=inline-share-buttons&source=platform" async="async"></script> -->
    <!-- end share script -->


    <style>
        /* Estilos opcionales para el botón */
        /* Estilos para el botón */
        .print-button {
            background-color: transparent;
            /* Fondo transparente */
            border: none;
            /* Sin borde */
            color: black;
            /* Color del ícono */
            padding: 0px 2px;
            /* Espacio alrededor del ícono */
            text-align: center;
            /* Alineación del ícono */
            text-decoration: none;
            /* Sin subrayado */
            display: inline-block;
            /* Mostrar como un elemento en línea */
            font-size: 16px;
            /* Tamaño de fuente */
            margin: 4px 2px;
            /* Margen superior e inferior */
            cursor: pointer;
            /* Cambiar cursor al pasar el mouse */
            border-radius: 50%;
            /* Borde redondeado */
        }

        .centrado-impresion {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

        /* Estilo para impresión */
        /* 
                        /*
                text-align-last: center;
                
                margin-bottom: 0;
                */

        @media print {
            .centrado-impresion {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
    </style>

</head>

<body>