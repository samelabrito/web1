<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
        echo "O meu nome é ".$_POST['nome']. " ,tenho " .$_POST['idade'].
        " anos e gosto de carros da marca "
        .$_POST['marca'];
    ?>
    </body>
</html> -->

<!-- exemplo_7 -->
<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'test';
$ligax=mysqli_connect($host, $user, $pwd) or die ('Não conseguiu fazer a conexão ao servidor');
mysqli_select_db($ligax,$db);
?>

<!-- <html>
<head> 
    <title> EXEMPLO_7 </title> 
</head>
    <body> 
    <h2> Novo cliente </h2>
    <?php /*inserir.php*/
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        echo 'Dados recebidos: <br />';
        echo 'Nome: '.$nome.'<br />';
        echo 'Cargo: '.$cargo.'<br />';
        $insere = "insert into usuarios ( nome, cargo )
        VALUES ('$nome', '$cargo')";
        $result = mysqli_query($ligax, $insere);
        if ($result==1) echo "<p>Dados inseridos<br>";
        else "<p>Dados não inseridos<br>";
    ?>
    <p> <a href="/">Voltar à entrada</a>
    </body>
</html>  -->


<html>
<head> 
    <title> EXEMPLO_8 </title> 
</head>
    <body> 
        <h2> Remover cliente </h2>
        <?php
        $id = $_POST['id'];
        if (!$id) {echo 'Volte atrás e escreva o nome do cliente a remover.'; }
        echo "Cliente a remover: $id. <p>";
        $remove = "delete from usuarios where id='$id'";
        echo $remove;
        $get = "select nome from usuarios where id='$id'";
        $nome = mysqli_query($ligax, $get);
        $nome = mysqli_fetch_assoc($nome);
        $nome = $nome['nome'];
        $result = mysqli_query($ligax, $remove);
        if ($result==0){
            echo "<p>Não removido<br>";
        }
        else{
            echo "<p>$nome removido com sucesso<br>";
        }
        ?>
        <p> <a href="/"> voltar </a>
    </body>
</html> 