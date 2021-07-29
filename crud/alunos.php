<h1>Alunos</h1>
<a href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table id="alunos">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Nascimento</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($conexao_alunos)){
                echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                echo '<td>' . $linha['data_nascimento'] . '</td>';
            
        ?>
            

        <td><a  href= "excluir_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>" onclick="return confirm('Deseja realmente excluir?');"><span style="color:red"><i class="fas fa-trash-alt"></i></span></a></td></tr>

                <?php
                }
                ?>
    
   </tbody>
</table>