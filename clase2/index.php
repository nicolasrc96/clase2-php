<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase2</title>
    <link rel="stylesheet" href="static/css/formato.css">
    <script src="static/js/eventos.js"></script>
</head>
<body>
    <main>
        <header>
        </header>
            <div id="franja">

            </div>
            <section>
                <nav>
                    <br><br>
                    <hr>
                    <center><h2>panel de control</h2></center>
                    <hr>
                    <br>
                    <input type="button" value="articulos1" class="fbotones" onclick="cargar_url(1);"/>
                    <input type="button" value="articulos2" class="fbotones" onclick="cargar_url(2);"/>
                    <input type="button" value="articulos3" class="fbotones" onclick="cargar_url(3);"/>
                    <input type="button" value="articulos4" class="fbotones" onclick="cargar_url(4);"/>
                    <input type="button" value="articulos5" class="fbotones" onclick="cargar_url(5);"/>
                </nav>
                <article>
                    <?php
                    include("templates/controlador.php");
                    ?>

                </article>
            </section>
            <footer>
                
            </footer>
        
    </main>
</body>
</html>