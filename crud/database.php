<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);

    $query = "SELECT * FROM cursos";
    $conexao_cursos = mysqli_query($conexao, $query);

    $query = "SELECT * FROM alunos";
    $conexao_alunos = mysqli_query($conexao, $query);

    $query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_cursos WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso";
    $conexao_matriculas = mysqli_query($conexao, $query);


?>