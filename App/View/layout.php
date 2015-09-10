<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sollos</title>
        <!-- Bootstrap core CSS -->
        <link href="/public/resources/css/bootstrap.css" rel="stylesheet"/>
        <link href="/public/resources/css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="/public/resources/css/app.css" rel="stylesheet"/>
    </head>

    <body>
        <nav class="navbar navbar-inverse visible-lg visible-md" style="height: 150px;">
            <div class="container">
                <div class="navbar-header">
                    <p><a class="navbar-brand" href="#"><span>Sollos</span></a></p>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="menu active" pagina='index'><a href="#">Home</a></li>
                        <li class="menu" pagina='servicos'><a href="#">Serviços</a></li>
                        <li class="menu" pagina='equipe'><a href="#">Equipe</a></li>
                        <li class="menu" pagina='clientes'><a href="#">Clientes</a></li>
                        <li class="menu" pagina='contato'><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="conteudo">
            <?php
            $this->conteudo();
            ?>
        </div>
        <hr>
        <div class="container">
            <footer>
                <p>&copy; Desenvolvido por Antonio Allan e Gilm&aacute;rio</p>
            </footer>
        </div>
        <script src="/public/resources/js/jquery/jquery.js"></script>
        <script src="/public/resources/js/bootstrap.js"></script>
        <script src="/public/resources/js/npm.js"></script>
        <script src="/public/resources/js/app.js"></script>
    </body>
</html>
