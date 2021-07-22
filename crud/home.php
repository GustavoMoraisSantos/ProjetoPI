
<h2>Tela de acesso</h2>

<div aling="center">
    <form action="login.php" method="POST">
        <table cellspacing="7">
            <tr>
                <td>Usuário:</td>
                <td><input type="text" name="usuario" placeholder="Nome do usuário"></td>
            
            </tr><br>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" placeholder="Senha do usuário"></td>
            
            </tr><br>
        
        </table>
        <input type="submit" value="Entrar">
    </form>

</div>

<?php
    if(isset($_GET['erro'])){
?>
    <div role="alert">Usuario e/ou senha inválidos</div>

<?php 
    }
?>