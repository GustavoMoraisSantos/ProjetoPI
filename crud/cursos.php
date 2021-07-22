<h1>Cursos</h1>
<a href="?pagina=inserir_curso">Inserir novo curso</a>
<table id="cursos">

    <thead>
        <tr>
            <th>Nome curso</th>
            <th>Carga horária</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($conexao_cursos)){
                echo '<tr><td>' . $linha['nome_curso'] . '</td>';
                echo '<td>' . $linha['carga_horaria'] . '</td>';
            
        ?>
        <!--link com o ícone-->
        <td><a href="?pagina=inserir_curso&editar=<?php
        echo $linha['id_curso'];?>"><i class="fas fa-edit"></i></a></td>


        <td>
            <a href="excluir_curso.php?id_curso=<?php
                echo $linha['id_curso'];?>" onclick="return confirm('Deseja realmente excluir?');">
                <span style="color:red">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
        </td>  

                <?php
                }
                ?>
   
   </tbody>        
</table>



