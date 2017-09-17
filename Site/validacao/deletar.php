<?php 

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('dbusuarios');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
$senarray = $array['senha'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='deletando.php';</script>";

    }else{
      if($logarray == $login && $senarray == $senha){

      	$query = "DELETE FROM `usuarios` WHERE `usuarios`.`login` = '$login'";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário deletado com sucesso!');window.location.href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível deletar esse usuário');window.location.href='deletando.php'</script>";
        }

      }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível encontrar o usuario');window.location.href='deletando.php';</script>";
        die();
      }
    }
?>