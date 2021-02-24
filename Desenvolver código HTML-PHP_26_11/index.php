<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php 
            $X=5; $Y=3; $Z=$X+$Y;
            echo "Total ";
            echo "= $Z";
        ?>
    </body>
</html> -->


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
    <form enctype="multipart/form-data" method="POST" action="php_2.php">
        <p> Nome <input type="text" name="nome" size=30> </p>
        <p> Idade <input type="text" name="idade" size=2> </p>
        <p> Qual o carro que mais gostas?
        <select name="marca">
        <option> Ferrari </option>
        <option> Mercedes </option>
        <option> BMW </option>
        </select> </p>
        <p> <input type="submit" value="OK"> </p>
    </form>
    </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        arrays
        <?php 
            $arr = [12,13, 14, 15, 16, 17];
            foreach ($arr as $value) {
                echo "$value; ";
            }
        ?>
    </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <table border=”1”>
        <?php
            for($i=1; $i<6; $i++)
                {
                echo '<tr>';
                $q=$i*$i*$i;
                echo "<td> $i </td>";
                echo "<td> $q </td>";
                echo '</tr>';

                }
        ?>
    </table>
    </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_4</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <table border=”1”>
        <?php
            for($i=1; $i<6; $i++)
                {
                echo '<tr>';
                $q=$i*$i*$i;
                echo "<td> $i </td>";
                echo "<td> $q </td>";
                echo '</tr>';

                }
        ?>
    </table>
    </body>
</html> -->

<!-- <?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'test';
$ligax=mysqli_connect($host, $user, $pwd) or
die ('Não conseguiu fazer a conexão ao servidor');
mysqli_select_db($ligax,$db);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_5</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h2> Lista de clientes: </h2> <br>
    <?php
        $consulta = "Select * From usuarios";
        $result = mysqli_query($ligax, $consulta);
        $nregistos = mysqli_num_rows($result);
        echo "Nº de registos encontrados: $nregistos ";
        ?>
        <br> <table border="1">
        <tr><td> Codigo: <td> Nome: <td> Cargo: </tr>
        <?php
        for ($i=0; $i <$nregistos; $i++) {
        $registo = mysqli_fetch_assoc($result);
        echo '<tr>';
        echo '<td>'.$registo['id'].'</td>';
        echo '<td>'.$registo['nome'].'</td>';
        echo '<td>'.$registo['cargo'].'<td>';
        echo '</tr>'; echo '</p>';
        }
    ?>
    </table> <br> <a href="index.htm">Voltar à entrada</a>
    </body>
</html> -->

<!-- <?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'test';
$ligax=mysqli_connect($host, $user, $pwd) or die ('Não conseguiu fazer a conexão ao servidor');
mysqli_select_db($ligax,$db);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_6</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>Mostrar cliente procurado</h3>
        <?php
            $nomeproc = 'João';
            if (!$nomeproc)
            {echo "Volte atrás e escreva o nome.";}

            echo "<p>Nome procurado: $nomeproc. </p>";
            $procura = "Select * from usuarios
            where nome like '%".$nomeproc."%'";
            $result = mysqli_query($ligax, $procura);
            $nregistos = mysqli_num_rows($result);
            echo "Nº de registos encontrados: $nregistos";
        ?>
        <table border="1">
        <tr><td> Codigo: <td> Nome: <td> Cargo: </tr>
        <?php
        for ($i=0; $i <$nregistos; $i++) {
        $registo = mysqli_fetch_assoc($result);
        echo '<tr> <td>' .$registo['id']. '</td>';
        echo '<td>' .$registo['nome']. '</td>';
        echo '<td>' .$registo['cargo']. '<td> </tr>'; }
        ?> </table>
        <p> <a href="listar.php"> Listar registos </a>
    </body>
</html> -->

<!-- <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_7</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST" action="php_2.php">
            <p> Nome <input type="text" name="nome" size=30> </p>
            <p> Cargo <input type="text" name="cargo" size=2> </p>
            <p> <input type="submit" value="OK"> </p>
        </form>
    </body>
</html> -->

<!-- <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXEMPLO_8</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST" action="php_2.php">
            <p> ID <input type="number" name="id" size=30> </p>
            <p> <input type="submit" value="OK"> </p>
        </form>
    </body>
</html> -->