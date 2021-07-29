<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Crud</title>
    <link rel="stylesheet" href="css/teste.css">

    <!-- importando framework de tabelas -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!--importa font awesome-->
    <script src="https://kit.fontawesome.com/0194a74b8e.js" crossorigin="anonymous"></script>
    <!--Importa biblioteca do JQuery-->
    <script src="JS/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
    
    <script>
        $(document).ready( function () {
            $('#cursos').DataTable();
            $('#alunos').DataTable();
            $('#matriculas').DataTable();
        } );
    </script>
    
</head>
<body>
    <header>
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
        
        <nav>
            <ul>
               
                <li><a href="?pagina=cursos">Cursos</a></li>
                <li><a href="?pagina=alunos">Alunos</a></li>
                <li><a href="?pagina=matriculas">Matriculas</a></li>
                <?php  if(isset($_SESSION['login'])){ ?>
                  <li><a href="logout.php">
                <?php
                    echo $_SESSION['usuario'];?>
                    (sair)
                  </a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
</body>
<div id="conteudo" class="container">
   