<!DOCTYPE HTML>
<html>
<body>

<FORM method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname"><br>
    Senha: <INPUT type="password" name="senha" size="10" maxlength="150"><br>
    Selecione:<br>
    <SELECT name="select">
        <option value="RS">RS</option>        
        <option value="SC">SC</option>          
        <option value="PR">PR</option>      
    </SELECT><br>
    Comentario:<br>
    <TEXTAREA name="COMENTARIO" cols="30" rows="10" wrap="physical"></TEXTAREA><br>
    Selecione:<br>
    <INPUT type="checkbox" name="fds" value="FDS"> FDS<br>
    <INPUT type="checkbox" name="lgr" value="LGR"> LGR<br>
    Marque:<br>
    <INPUT type="radio" name="noticias" value="sim"> Sim<br>
    <INPUT type="radio" name="noticias" value="nao"> Não<br>
    <INPUT TYPE="submit" value="Enviar os dados acima">      
    <INPUT TYPE="reset" value="Limpar"><br>
</FORM>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Coletar valores dos campos de entrada
        $name = $_POST['fname'];
        $senha = $_POST['senha'];
        $select = $_POST['select'];
        $comentario = $_POST['COMENTARIO'];
        $fds = isset($_POST['fds']) ? $_POST['fds'] : 'Não selecionado';
        $lgr = isset($_POST['lgr']) ? $_POST['lgr'] : 'Não selecionado';
        $noticias = isset($_POST['noticias']) ? $_POST['noticias'] : 'Não selecionado';
       
        if (empty($name) || empty($senha)){
            echo "Nome ou senha está vazio";
        } else {
            echo "Nome: " . $name . "<br>";
            echo "Senha: " . $senha . "<br>";
            echo "Selecionado: " . $select . "<br>";
            echo "Comentário: " . $comentario . "<br>";
            echo "FDS: " . $fds . "<br>";
            echo "LGR: " . $lgr . "<br>";
            echo "Notícias: " . $noticias . "<br>";
        }
    }
?>
</body>
</html>