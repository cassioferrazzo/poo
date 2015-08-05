
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de clientes</title>
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
                <table class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th data-field="_id">Código</th>
                            <th data-field="_nome">Nome</th>                                                  
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $array = include'dados.php';
                        $index = 0;
                        foreach (json_decode($array) as $cliente) {

                            echo "<tr><td>$cliente->_id</td><td><a href='informacao.php?index=$index'>$cliente->_nome</a></td></tr>";
                            $index++;
                        }
                        ?>               
                    </tbody>
                </table>
            </article>
        </div>
    </body>
</html>