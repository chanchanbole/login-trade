<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLIENTE - Sesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" href="http://www.trademediaagency.com/trade_wp/wp-content/themes/trade/favicon.png" type="image/png">
    <link rel="icon" href="http://www.trademediaagency.com/trade_wp/wp-content/themes/trade/favicon.png" type="image/png">
    
</head>
<body>
   
   
   <div class="welcome">

       <!--<img src="image/logotrade.png" >
        <h1>Bienvenido, <span class="cliente">Cliente</span></h1>-->
        <h1>Bienvenido&nbsp<span class="cliente"><?php echo $_SESSION["usuario"];  ?></span></h1>
        <a href="cerrar.php">Cerrar sesion</a>

    <?php if ($_SESSION["usuario"] == "Tglt") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1BI6U46MGxNVcrx-osFfW22xpSxWdXOxR/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "Subaru") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1PWYR3of31DE_S6eXWjFQ52qov9XxceD8/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "Suzuki") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1iXTPnvEqzG_ScJhVpVUm_k7aEqgDCSap/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

        <?php if ($_SESSION["usuario"] == "Vaio") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1WhFGtSYejYXGySAxNoOD38B8Bi9PRHov/page/y4lV" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

        <?php if ($_SESSION["usuario"] == "PositivoBGH") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1YKrlI9QNSNx1TVwNnyBqOASwIcPxapom/page/20qT" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

        <?php if ($_SESSION["usuario"] == "Lidherma") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1WfEIVnm4dumDnSGmqFeob6GPLGrrYfVR/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

        <?php if ($_SESSION["usuario"] == "Sodastream") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1CcZKZaLu2zUMKMNiovO3HiyQTM_Wg9sc/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

     <?php if ($_SESSION["usuario"] == "Ginevra") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1XyASf0OuIp8fz5IGcEppXQRWKD1AWfYz/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GamaAR") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1abqc7mu9kmPl5KM48bKtFaGe-Ib4a6xJ/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GamaRegional") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1JuUAIHNMrDbct8FZzqRddpAa6VqhnJOo/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GamaCL") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1GDk5dMt3COeviMuNct4zA0WVvaLmzwZQ/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GamaCO") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1jN0jH0lO7K-YeNzhGdxGTZb2HA0e7Kd-/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GamaUY") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1sQ8c9JvSTHc4G9yOmS-YEc0-XCUaj9-g/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GammaHerramientas") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1tOWsOX9kXEEXrTDSYPmQKMJMhiaG0bMO/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "Bonafide") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1rMV8pJonMzP0aWETFslk9eMo_SVtoCLq/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "JACMotors") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/11IawJR-2y98Q3MDTAEJKsnnRxgzz2u-2/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "VeniceTigre") : ?>

            <iframe src="https://datastudio.google.com/embed/reporting/1pa3VFJWh9yIsLALM-scxUR77M_wtZ_IB/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>

    <?php if ($_SESSION["usuario"] == "GobRioNegro") : ?>

        <iframe src="https://datastudio.google.com/embed/reporting/100cp96yXREYRPJZawO7GZz5bvQ1OebyB/page/sPPB" frameborder="0" style="border:0" allowfullscreen></iframe>

    <?php endif; ?>
        
      
   </div>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>


