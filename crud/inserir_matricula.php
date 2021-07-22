<h2>Inserir nova matricula</h2>
<form action="envia_matricula.php" method="post">
    <label>Aluno:</label>
    <select name="escolha_aluno" style="margin-bottom: 15px;">
        <option>Selecione o aluno</option>
        <?php
            while($linha = mysqli_fetch_array($conexao_alunos)){
                echo '<option value="'. $linha['id_aluno']. '">'. $linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <label>Curso:</label>
    <select name="escolha_curso" style="margin-bottom: 15px;">
        <option>Selecione o curso</option>
        <?php
            while($linha = mysqli_fetch_array($conexao_cursos)){
                echo '<option value="'. $linha['id_curso']. '">'. $linha['nome_curso'] . '</option>';
            }
        ?>
    </select>
    <input type="submit" value="Adicionar matricula" style="margin-top: 10px;">
</form>

