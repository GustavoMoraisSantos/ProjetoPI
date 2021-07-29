<?php if(!isset($_GET['editar'])){?>

<h2>Inserir novo curso</h2>

<form method="post" action="envia_curso.php">
      <br>
    <label>Nome do curso:</label><br><br>
    <input type="text" name="nome_curso">
    <br>
    <label>Carga horaria:</label><br><br>
    <input type="text" name="carga_horaria">
    <br><br>
    <input type="submit" value="Inserir curso">

</form>

<?php } else{ ?>
  <?php while($linha = mysqli_fetch_array($conexao_cursos)){ ?>
    <?php if($linha['id_curso'] == $_GET['editar']){?>  
     
 <h2>Editar curso</h2>

<form method="post" action="editar_curso.php">
    <input type="hidden" name="id_curso" value="<?php
    echo $linha['id_curso']; ?>">
    <br>
    <label>Nome do curso:</label><br><br>
    <input type="text" name="nome_curso" value="<?php
    echo $linha['nome_curso'];?>">
    <br>
    <label>Carga horaria:</label><br><br>
    <input type="text" name="carga_horaria" value="<?php
    echo $linha['carga_horaria'];?>">
    <br><br>
    <input type="submit" value="Editar curso">

</form>

<?php } ?>
<?php } ?>
<?php } ?>

