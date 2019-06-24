<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php

header("Content-Type: text/html; charset=ISO-8859-1", true);    

$erro     = "Erro de conexao com o BD";
$servidor ='localhost';
$banco    ='bd_academia';
$usuario  ='root';
$senha    ='vmKbWyZSXEsP4DGU';
$txt="";
$arquivo="";
$visitas="";
$msgerro = "";
$error = false;


$link = mysqli_connect($servidor,$usuario,$senha,$banco) or print(mysql_error());

if(!$link)
{
    printf("Erro. Não é possivel conectar com o Servidor Localhost.:%s/n",mysqli_connect_error());
    exit();
}

//fim bd


//vars

$name     = $_POST['name'];
$lastname = $_POST['lastname'];
$email    = $_POST['email'];
$peso     = $_POST['peso'];
$ano    = $_POST['ano'];
$sexo     = $_POST['sexo'];
$cdsenha    = $_POST['cdsenha'];

//virara um cont automatico igual o do user
$iddbiceps =2;
$iddtriceps =1;
$iddpeito =1;
$iddcostas =1;
$iddabdomem =1;
$iddperna = 1;

$triceps1 = $_POST['triceps1'];
$triceps2 = $_POST['triceps2'];
$triceps3 = $_POST['triceps3'];
$triceps4 = $_POST['triceps4'];
$triceps5 = $_POST['triceps5'];

$repeticoestriceps1 = $_POST['repeticoestriceps1'];
$repeticoestriceps2 = $_POST['repeticoestriceps2'];
$repeticoestriceps3 = $_POST['repeticoestriceps3'];
$repeticoestriceps4 = $_POST['repeticoestriceps4'];
$repeticoestriceps5 = $_POST['repeticoestriceps5'];

$cargatriceps1 = $_POST['cargatriceps1'];
$cargatriceps2 = $_POST['cargatriceps2'];
$cargatriceps3 = $_POST['cargatriceps3'];
$cargatriceps4 = $_POST['cargatriceps4'];
$cargatriceps5 = $_POST['cargatriceps5'];

$repeticoesbiceps1 = $_POST['repeticoesbiceps1'];
$repeticoesbiceps2 = $_POST['repeticoesbiceps2'];
$repeticoesbiceps3 = $_POST['repeticoesbiceps3'];
$repeticoesbiceps4 = $_POST['repeticoesbiceps4'];
$repeticoesbiceps5 = $_POST['repeticoesbiceps5'];

$cargabiceps1 = $_POST['cargabiceps1'];
$cargabiceps2 = $_POST['cargabiceps2'];
$cargabiceps3 = $_POST['cargabiceps3'];
$cargabiceps4 = $_POST['cargabiceps4'];
$cargabiceps5 = $_POST['cargabiceps5'];

$biceps1 = $_POST['biceps1'];
$biceps2 = $_POST['biceps2'];
$biceps3 = $_POST['biceps3'];
$biceps4 = $_POST['biceps4'];
$biceps5 = $_POST['biceps5'];

$peito1 = $_POST['peito1'];
$peito2 = $_POST['peito2'];
$peito3 = $_POST['peito3'];
$peito4 = $_POST['peito4'];
$peito5 = $_POST['peito5'];

$repeticoespeito1 = $_POST['repeticoespeito1'];
$repeticoespeito2 = $_POST['repeticoespeito2'];
$repeticoespeito3 = $_POST['repeticoespeito3'];
$repeticoespeito4 = $_POST['repeticoespeito4'];
$repeticoespeito5 = $_POST['repeticoespeito5'];

$cargapeito1 = $_POST['cargapeito1'];
$cargapeito2 = $_POST['cargapeito2'];
$cargapeito3 = $_POST['cargapeito3'];
$cargapeito4 = $_POST['cargapeito4'];
$cargapeito5 = $_POST['cargapeito5'];

$costas1 = $_POST['costas1'];
$costas2 = $_POST['costas2'];
$costas3 = $_POST['costas3'];
$costas4 = $_POST['costas4'];
$costas5 = $_POST['costas5'];

$repeticoescostas1 = $_POST['repeticoescostas1'];
$repeticoescostas2 = $_POST['repeticoescostas2'];
$repeticoescostas3 = $_POST['repeticoescostas3'];
$repeticoescostas4 = $_POST['repeticoescostas4'];
$repeticoescostas5 = $_POST['repeticoescostas5'];

$cargacostas1 = $_POST['cargacostas1'];
$cargacostas2 = $_POST['cargacostas2'];
$cargacostas3 = $_POST['cargacostas3'];
$cargacostas4 = $_POST['cargacostas4'];
$cargacostas5 = $_POST['cargacostas5'];

$abdomem1 = $_POST['abdomem1'];
$abdomem2 = $_POST['abdomem2'];
$abdomem3 = $_POST['abdomem3'];
$abdomem4 = $_POST['abdomem4'];
$abdomem5 = $_POST['abdomem5'];

$repeticoesabdomem1 = $_POST['repeticoesabdomem1'];
$repeticoesabdomem2 = $_POST['repeticoesabdomem2'];
$repeticoesabdomem3 = $_POST['repeticoesabdomem3'];
$repeticoesabdomem4 = $_POST['repeticoesabdomem4'];
$repeticoesabdomem5 = $_POST['repeticoesabdomem5'];

$cargaabdomem1 = $_POST['cargaabdomem1'];
$cargaabdomem2 = $_POST['cargaabdomem2'];
$cargaabdomem3 = $_POST['cargaabdomem3'];
$cargaabdomem4 = $_POST['cargaabdomem4'];
$cargaabdomem5 = $_POST['cargaabdomem5'];

$perna1 = $_POST['perna1'];
$perna2 = $_POST['perna2'];
$perna3 = $_POST['perna3'];
$perna4 = $_POST['perna4'];
$perna5 = $_POST['perna5'];

$repeticoesperna1 = $_POST['repeticoesperna1'];
$repeticoesperna2 = $_POST['repeticoesperna2'];
$repeticoesperna3 = $_POST['repeticoesperna3'];
$repeticoesperna4 = $_POST['repeticoesperna4'];
$repeticoesperna5 = $_POST['repeticoesperna5'];

$cargaperna1 = $_POST['cargaperna1'];
$cargaperna2 = $_POST['cargaperna2'];
$cargaperna3 = $_POST['cargaperna3'];
$cargaperna4 = $_POST['cargaperna4'];
$cargaperna5 = $_POST['cargaperna5'];

$name     = ucfirst($name);
$lastname = ucfirst($lastname);

$nameall = $name." ".$lastname;

$cdsenha = md5($cdsenha);

if($sexo == 'feminino')
{
    $sexo = 'F';
}
else
{
    $sexo = "M";
}

//echo ("Welcome ".$nameall." of email:".$email." your age is ".$sexo. $cdsenha) ;

//echo "<h3 align='center'>Now write your workout ".$nameall."</h3>";
//echo "<br><br>";

?>
</head>
<link rel="stylesheet" href="home.css">
<body>

<div id="header">

<h2>ROTINAS DE TREINOS</h2>

</div>

<div id="content">

<?php


//INSERIR OS DADOS NO BD"""""""""""
//varios inserts para cada treino usando while para isso informar o nome dos treinos no tb_triceps
$repetevezes = 1;

while($repetevezes <= 5)
{

    switch($repetevezes)

    {

    case 1:
        $inseretriceps = $link->query("insert into tb_triceps (cd_triceps,nm_triceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$triceps1',$cargatriceps1,$repeticoestriceps1,'1')");
        $idtriceps1 = mysqli_insert_id($link);

        if(!$inseretriceps)
        {
            //var_dump($link->error); 
            $error = true;
        }

        $inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$biceps1',$cargabiceps1,$repeticoesbiceps1,'1')");
        $idbiceps1 = mysqli_insert_id($link);

        if(!$inserebiceps)
        {
            $error = true;
            var_dump($error);    
        }

        $inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$peito1',$cargapeito1,$repeticoespeito1,'1')");
        $idpeito1 = mysqli_insert_id($link);
        if(!$inserepeito)
        {
            $error = true;
        }

        $inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$costas1',$cargacostas1,$repeticoescostas1,'1')");
        $idcostas1 = mysqli_insert_id($link);

        if(!$inserecostas)
        {
            $error = true;       
            var_dump($error);        
        }

        $insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$perna1',$cargaperna1,$repeticoesperna1,'1')");
        $idperna1 = mysqli_insert_id($link);

        if(!$insereperna)
        {
            $error = true;
            var_dump($error);    
        }

        $insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$abdomem1',$cargaabdomem1,$repeticoesabdomem1,'1')");
        $idabdomem1 = mysqli_insert_id($link);

        if(!$insereabdomem)
        {
            $error = true;
            var_dump($error);    
        }

        $insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
        cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
        values ('$idbiceps1', '$idtriceps1', '$idabdomem1','$idpeito1', '$idcostas1', '$idperna1',
        '$name', '$cdsenha', '$ano', '$peso', '$sexo')");
         $iduser1 = mysqli_insert_id($link);

        if(!$insereuser)
        {
            $error = true;
                //decrementa user
                var_dump($error);    
        }

        if($error == true)
        {
            echo "Erro ".$msgerro; 
            var_dump($link->error);
        }

        break;

    case 2:
    
        $inseretriceps = $link->query("insert into tb_triceps (cd_triceps,nm_triceps, qt_carga, qt_repeticoes, qt_vezes)
        values ('$repetevezes','$triceps2',$cargatriceps2,$repeticoestriceps2,'1')");
        $idtriceps2 = mysqli_insert_id($link);
        
        if(!$inseretriceps)
        {
            //var_dump($link->error);
            $error = true;
        }

        $inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$biceps2',$cargabiceps2,$repeticoesbiceps2,'1')");
        $idbiceps2 = mysqli_insert_id($link);

        if(!$inserebiceps)
        {
            $error = true;
            var_dump($error);    
        }   

        $inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$peito2',$cargapeito2,$repeticoespeito2,'1')");
        $idpeito2 = mysqli_insert_id($link);
        if(!$inserepeito)
        {
            $error = true;
        }

        $inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$costas2',$cargacostas2,$repeticoescostas2,'1')");
        $idcostas2 = mysqli_insert_id($link);

        if(!$inserecostas)
        {
            $error = true;       
            var_dump($error);        
        }

        $insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$perna2',$cargaperna2,$repeticoesperna2,'1')");
        $idperna2 = mysqli_insert_id($link);

        if(!$insereperna)
        {
            $error = true;
            var_dump($error);    
        }

        $insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$abdomem2',$cargaabdomem2,$repeticoesabdomem2,'1')");
        $idabdomem2 = mysqli_insert_id($link);

        if(!$insereabdomem)
        {
            $error = true;
            var_dump($error);    
        }

        $insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
        cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
        values ('$idbiceps2', '$idtriceps2', '$idabdomem2','$idpeito2', '$idcostas2', '$idperna2',
        '$name', '$cdsenha', '$ano', '$peso', '$sexo')");
         $iduser2 = mysqli_insert_id($link);

        if(!$insereuser)
        {
            $error = true;
                //decrementa user
                var_dump($error);    
        }

        if($error == true)
        {
            echo "Erro ".$msgerro; 
            var_dump($link->error);
        }

        break;

    case 3:

    $inseretriceps = $link->query("insert into tb_triceps (cd_triceps,nm_triceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$triceps3',$cargatriceps3,$repeticoestriceps3,'1')");
        $idtriceps3 = mysqli_insert_id($link);

        if(!$inseretriceps)
        {
            //var_dump($link->error);
            $error = true;
        }

        $inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$biceps3',$cargabiceps3,$repeticoesbiceps3,'1')");
        $idbiceps3 = mysqli_insert_id($link);

        if(!$inserebiceps)
        {
            $error = true;
            var_dump($error);    
        }

        $inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$peito3',$cargapeito3,$repeticoespeito3,'1')");
        $idpeito3 = mysqli_insert_id($link);
        if(!$inserepeito)
        {
            $error = true;
        }

        $inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$costas3',$cargacostas3,$repeticoescostas3,'1')");
        $idcostas3 = mysqli_insert_id($link);

        if(!$inserecostas)
        {
            $error = true;       
            var_dump($error);        
        }

        $insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$perna3',$cargaperna3,$repeticoesperna3,'1')");
        $idperna3 = mysqli_insert_id($link);

        if(!$insereperna)
        {
            $error = true;
            var_dump($error);    
        }

        $insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$abdomem3',$cargaabdomem3,$repeticoesabdomem3,'1')");
        $idabdomem3 = mysqli_insert_id($link);

        if(!$insereabdomem)
        {
            $error = true;
            var_dump($error);    
        }

        $insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
        cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
        values ('$idbiceps3', '$idtriceps3', '$idabdomem3','$idpeito3', '$idcostas3', '$idperna3',
        '$name', '$cdsenha', '$ano', '$peso', '$sexo')");
         $iduser3 = mysqli_insert_id($link);

        if(!$insereuser)
        {
            $error = true;
                //decrementa user
                var_dump($error);    
        }

        if($error == true)
        {
            echo "Erro ".$msgerro; 
            var_dump($link->error);
        }

        break;

    case 4:
    
        $inseretriceps = $link->query("insert into tb_triceps (cd_triceps,nm_triceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$triceps4',$cargatriceps4,$repeticoestriceps4,'1')");
        $idtriceps4 = mysqli_insert_id($link);

        if(!$inseretriceps)
        {
            //var_dump($link->error);
            $error = true;
        }

        $inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$biceps4',$cargabiceps4,$repeticoesbiceps4,'1')");
        $idbiceps4 = mysqli_insert_id($link);

        if(!$inserebiceps)
        {
            $error = true;
            var_dump($error);    
        }

        $inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$peito4',$cargapeito4,$repeticoespeito4,'1')");
        $idpeito4 = mysqli_insert_id($link);
        if(!$inserepeito)
        {
            $error = true;
        }

        $inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$costas4',$cargacostas4,$repeticoescostas4,'1')");
        $idcostas4 = mysqli_insert_id($link);

        if(!$inserecostas)
        {
            $error = true;       
            var_dump($error);        
        }

        $insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$perna4',$cargaperna4,$repeticoesperna4,'1')");
        $idperna4 = mysqli_insert_id($link);

        if(!$insereperna)
        {
            $error = true;
            var_dump($error);    
        }

        $insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$abdomem4',$cargaabdomem4,$repeticoesabdomem4,'1')");
        $idabdomem4 = mysqli_insert_id($link);

        if(!$insereabdomem)
        {
            $error = true;
            var_dump($error);    
        }

        $insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
        cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
        values ('$idbiceps4', '$idtriceps4', '$idabdomem4','$idpeito4', '$idcostas4', '$idperna4',
        '$name', '$cdsenha', '$ano', '$peso', '$sexo')");
         $iduser4 = mysqli_insert_id($link);

        if(!$insereuser)
        {
            $error = true;
                //decrementa user
                var_dump($error);    
        }

        if($error == true)
        {
            echo "Erro ".$msgerro; 
            var_dump($link->error);
        }

        break;

    case 5:
    
        $inseretriceps = $link->query("insert into tb_triceps (cd_triceps,nm_triceps, qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$triceps5',$cargatriceps5,$repeticoestriceps5,'1')");
        $idtriceps5 = mysqli_insert_id($link);

        if(!$inseretriceps)
        {
            //var_dump($link->error);
            $error = true;
        }
        
        $inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps,   qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$biceps5',$cargabiceps5,$repeticoesbiceps5,'1')");
        $idbiceps5 = mysqli_insert_id($link);

        if(!$inserebiceps)
        {
            $error = true;
            var_dump($error);    
        }

        $inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito,   qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$peito5',$cargapeito5,$repeticoespeito5,'1')");
        $idpeito5 = mysqli_insert_id($link);
        if(!$inserepeito)
        {
            $error = true;
        }

        $inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas,   qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$costas5',$cargacostas5,$repeticoescostas5,'1')");
        $idcostas5 = mysqli_insert_id($link);

        if(!$inserecostas)
        {
            $error = true;       
            var_dump($error);        
        }

        $insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna,   qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$perna5',$cargaperna5,$repeticoesperna5,'1')");
        $idperna5 = mysqli_insert_id($link);

        if(!$insereperna)
        {
            $error = true;
            var_dump($error);    
        }

        $insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem,   qt_carga, qt_repeticoes, qt_vezes)
        values ($repetevezes,'$abdomem5',$cargaabdomem5,$repeticoesabdomem5,'1')");
        $idabdomem5 = mysqli_insert_id($link);

        if(!$insereabdomem)
        {
            $error = true;
            var_dump($error);    
        }

        $insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
        cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
        values ('$idbiceps5', '$idtriceps5', '$idabdomem5','$idpeito5', '$idcostas5', '$idperna5',
        '$name', '$cdsenha', '$ano', '$peso', '$sexo')");
         $iduser5 = mysqli_insert_id($link);

        if(!$insereuser)
        {
            $error = true;
                //decrementa user
                var_dump($error);    
        }

        if($error == true)
        {
            echo "Erro ".$msgerro; 
            var_dump($link->error);
        }
        break;

}
    $repetevezes++;
}












//ok





//inserir os cds 

//$insereidtriceps = $link->query("insert into tb_triceps cd_triceps values ($iduser)");
//if(!$insereidtriceps)
//{
    //var_dump($link->error);
  //  $error = true;
//}





//select das informaçoes 
//tera que aparecer apos o cadastro e apos o login pegar o id do user e fazer
//////////////////////testes



//pegar todos os registros apos o cadastro e jogar na tela.
//ja temos todos os registros do BD no fonte. 

//id do user
$queryuser = $link->query("SELECT * FROM tb_user where cd_user = $iduser1");

while($reguser = $queryuser->fetch_array()) 
{
    echo "<h2>Seu cadastro foi Confirmado com exito ".$reguser["nm_user"]."</h2>";
}

//TRICEPS
$querytriceps = $link->query("SELECT * FROM tb_triceps where id_triceps = $idtriceps1");

while($regtriceps = $querytriceps->fetch_array())
{
    echo $regtriceps["nm_triceps"];
}

echo"<BR>";

//BICEPS
$querybiceps = $link->query("SELECT * FROM tb_biceps where id_biceps = $idbiceps1");

while($regbiceps = $querybiceps->fetch_array())
{
    echo $regbiceps["nm_biceps"];
}

echo"<BR>";

//PEITO
$querypeito = $link->query("SELECT * FROM tb_peito where id_peito = $idpeito1");

while($regpeito = $querypeito->fetch_array())
{
    echo $regpeito["nm_peito"];
}

echo"<BR>";

//COSTAS
$querycostas = $link->query("SELECT * FROM tb_costas where id_costas = $idcostas1");

while($regcostas = $querycostas->fetch_array())
{
    $nmperna = $regacostas["nm_perna"];
    $dstreinoperna = $regcostas["ds_treino"];
    $qtcargaperna = $regcostas["qt_carga"];
    $qtrepeticoesperna = $regcostas["qt_repeticoes"];
}

echo "<BR>";

//PERNA
$queryperna = $link->query("SELECT * FROM tb_perna where id_perna = $idperna1");

while($regperna = $queryperna->fetch_array())
{
    $nmperna = $regperna["nm_perna"];
    $dstreinoperna = $regperna["ds_treino"];
    $qtcargaperna = $regperna["qt_carga"];
    $qtrepeticoesperna = $regperna["qt_repeticoes"];
}
echo $nmperna;

echo "<BR>";

//ABDOMEM
$queryabdomem = $link->query("SELECT * FROM tb_abdomem where id_abdomem = $idabdomem1");

while($regabdomem = $queryabdomem->fetch_array())
{
    $nmabdomem = $regabdomem["nm_abdomem"];
    $dstreinoabdomem = $regabdomem["ds_treino"];
    $qtcargaabdomem = $regabdomem["qt_carga"];
    $qtrepeticoesabdomem = $regabdomem["qt_repeticoes"];
}

echo $nmabdomem;
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Triceps</th>
      <th scope="col">Biceps</th>
      <th scope="col">Costas/Ombro</th>
      <th scope="col">Peito</th>
      <th scope="col">Perna</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <td><?php echo $nmabdomem?></td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table> 
    
<?php








//$TESTT = (mysql_query("select  from tb_user where "));
//echo $query;


//$vezes=0;
//$i;

//dados digitados
/*$treinoA = ["Infra maquina", "Abd curtinho", "Abd esperar 55 segundos", 
    "Abd punho subindo 6kg", "Abd punho descendo 5kg", "Abd no calcanhar",
    "Puxador aberto maq 35"," Puxador fechado 105 10", "Em cima do obro 14kg 12 vezes"];
    

$treinoB = ["Corda 4x12", "Halteres puxando p trás  4x12", "Maq puxando p baixo 3x10",
    "Entradinha maq 12,5", "Cavalinho 14kg+10b", "Supino 12,5kg 12 vezes",
    "Peckdeck 70+10 15 vezes", "Declinado 7bb", "Perna abrindo 90kg", 
    "Perna fechando 90 .15 kg"];


$treinoC = ["Rosca direta com barra W 5kg", "Rosca scott 6kg ++", 
    "Rosca alternada c banco inclinado 6kg", "Rosca direta na polia baixa c corda 12,5kg",
    "Rosca direta concentrada", "Perna levantando 70+5",
    "Perna levantando deita 70+5",
    "Perna descendo 110+10"];


if (strtoupper($opTreino) == "A" )
{
    $tam = count($treinoA);
    for($i = 0; $i < $tam; $i++)
    {
        echo ($treinoA[$i]);
        echo "<BR>";
    }
}
    else if(strtoupper($opTreino) == "B")
    {
        $tam = count($treinoB);
        for($i = 0; $i < $tam; $i++)
        {
        echo ($treinoB[$i]);
        echo "<BR>";
        }
    }
        else if(strtoupper($opTreino) == "C")
        {
            $tam = count($treinoA);
            for($i = 0; $i < $tam; $i++)
            {
                echo ($treinoC[$i]);
                echo "<BR>";
            }
            $vezes ++;
            echo ("Parabens voce completou sua "+$vezes+"º jornada!");
            
                if($vezes == 30)
                {
                    $vezes = 0;
                    echo ("Esta na hora de renovar seus treinos");
                }
        }
        else
            {
                echo ($opTreino);
                //echo ("Digito invalido");
            }
            */
        
?>
</div>

<body>

</html>
