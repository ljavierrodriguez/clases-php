<!-- Comentario HTML

    Etiqueta HTML

    <tag> // Etiqueta de Apertura
        contenido
    </tag> // Etiqueta de Cierre

 -->
<!DOCTYPE html> <!-- Indicamos al documento que vamos a trabajar con HTML5 -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titulo de la Pagina</title>
    <link rel="stylesheet" href="style.css">
    <style>
        li {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Titulo 1</h1>
    <p>Lorem ipsum dolor sit <b>amet consectetur adipisicing elit</b>. Cumque praesentium laboriosam molestias modi.
        Nostrum
        nisi saepe ratione harum id <a href="https://google.cl"><i>nesciunt voluptas</i></a> incidunt, sunt quisquam
        sapiente repudiandae dolores, sint odit
        ducimus.</p>

    <span>texto 1</span>
    <span>texto 2</span>

    <div class="box">
        contenido 1
    </div>
    <div class="box">
        contenido 2
    </div>

    <ul class="menu">
        <li>html</li>
        <li>javascript</li>
        <li>css</li>
    </ul>
    <?php for($i = 0; $i < 10; $i++): ?>
    <ul>
        <li>Python</li>
        <li>Java</li>
        <li>PHP</li>
    </ul>
    <?php endfor; ?>
    <ol>
        <li>Python</li>
        <li>Java</li>
        <li>PHP</li>
    </ol>

    <table border="1">
        <tr>
            <th>name</th>
            <th>lastname</th>
        </tr>
        <tr>
            <td>Luis</td>
            <td>Rodriguez</td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <th>name</th>
            <td>Luis</td>
        </tr>
        <tr>
            <th>lastname</th>
            <td>Rodriguez</td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <th colspan="2">Nombre Completo</th>
        </tr>
        <tr>
            <td>Luis</td>
            <td>Rodriguez</td>
        </tr>
    </table>

    <table border="1" style="color: red;" class="" id="" cellpadding="" cellspacing="">
        <tr>
            <th rowspan="2">Nombre Completo</th>
            <td>Luis</td>
        </tr>
        <tr>
            <td>Rodriguez</td>
        </tr>
    </table>

    <a href="https://facebook.com">Facebook</a>
    <a href="https://emmet.io">Emmet</a>
    <a href="https://google.cl">Google</a>

    <br />

    <img src="./images/img1.jpeg" alt="Cables" width="100" height="80" />

    <button>Enviar</button>

    <input type="text">

    <input type="password">

    <input type="checkbox" name="" id="">

    <input type="text">

    <header></header>
    <footer></footer>

    <main></main>

    <div id="header">
        encabezado
    </div>
    <div id="main">
        contenido principal
    </div>
    <div id="footer">
        <em>pie de pagina</em>
    </div>

    <section id="home">
        <header>

        </header>
        <main>

        </main>
        <footer>

        </footer>

    </section>
    <section id="about">
        <header>

        </header>
        <main>

        </main>
        <footer>

        </footer>

    </section>
</body>

</html>