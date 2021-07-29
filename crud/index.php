<?php
    
    session_start();

    include 'database.php';
    include 'header.php';


    if (isset($_SESSION['login'])){
        if (isset($_GET['pagina'])){
        $pagina= $_GET ['pagina'];
    }else{
        $pagina= 'cursos';
    }
    }else{
        $pagina= 'home';
    }
    if($pagina == 'cursos'){
        include 'cursos.php';
    }else if($pagina == 'alunos'){
        include 'alunos.php';
    }else if($pagina == 'inserir_curso'){
        include 'inserir_curso.php';
    }else if($pagina == 'inserir_aluno'){
        include 'inserir_aluno.php';
    }else if($pagina == 'inserir_matricula'){
        include 'inserir_matricula.php';
    }else if($pagina == 'matriculas'){
        include 'matriculas.php';
    }else{
        include 'home.php';
    }

    include 'footer.php';
?>




