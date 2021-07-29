<h1>Matriculas</h1>
<a href="?pagina=inserir_matricula">Inserir nova matricula</a>
<table id="matriculas">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Nome curso</th>
            <th>Remover</th>
        </tr>
    </thead>  
    <tbody>
        <?php
             while($linha = mysqli_fetch_array($conexao_matriculas)){
                echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                echo '<td>' . $linha['nome_curso'] . '</td>';
        
         ?>

        <td>
            <a href="excluir_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>" onclick="return confirm('Deseja realmente excluir?');">
                <span style="color:red"><i class="fas fa-trash-alt"></i></span>
            </a>
        </td>
        

            <?php
            }
            ?>
   
   </tbody> 
</table>



