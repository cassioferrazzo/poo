
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Informações sobre o cliente</title>
        <!-- BOOTSTRAP -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script> 

        <!-- Script de terceiros - TABELA ORDENADA -->    
        <script src="js/jquery.tablesorter.min.js"></script>

        <!-- PERSONALIZADO -->        
        <link href="css/padrao.css" rel="stylesheet" type="text/css"/>               
        <script src="js/scripts.js"></script>        
    </head>
    <body>            
        <div class='container'>
            <article>
                <div class="panel panel-default">
                    <div class="panel-body">                        
                        <?php
                        $informar = array_key_exists('index', $_GET);

                        if (!$informar) {
                            header('Location:index.php');
                        }

                        $array = include'dados.php';
                        $cliente = json_decode($array)[$_GET['index']];
                        echo "<p><h1>Cliente</h1>$cliente->_id - $cliente->_nome<br></p>";
                        echo "<p><h3>Endereço</h3> $cliente->_endereco<br></p>";
                        echo "<p><h3>CPF/CNPJ</h3> $cliente->_inscricaoFederal<br></p>";                        
                        ?>
                        <a href='index.php'><button type="button" class="btn btn-default">Voltar</button></a>
                    </div>
                </div>
            </article>
        </div>
    </body>
</html>