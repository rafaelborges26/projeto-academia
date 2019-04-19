<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css">
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
$idabdomem =1;
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


//inserir registros

$inseretriceps = $link->query("insert into tb_triceps (nm_triceps, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ('testee', 'teste', '30', '10','1')");
$idtriceps = mysqli_insert_id($link);

if(!$inseretriceps)
{
    //var_dump($link->error);
    $error = true;
}

$inserebiceps = $link->query("insert into tb_biceps (cd_biceps ,nm_biceps, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ($iddbiceps, 'testee', 'testee', '30', '10','1')");
$idbiceps = mysqli_insert_id($link);

if(!$inserebiceps)
{
    $error = true;
    var_dump($error);    
}

$inserepeito = $link->query("insert into tb_peito (cd_peito, nm_peito, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ($iddpeito, 'testee', 'testee', '30', '10','1')");
$idpeito = mysqli_insert_id($link);
if(!$inserepeito)
{
    $error = true;
}

$inserecostas = $link->query("insert into tb_costas (cd_costas ,nm_costas, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ($iddcostas ,'testee', 'testee', '30', '10','1')");
$idcostas = mysqli_insert_id($link);

if(!$inserecostas)
{
    $error = true;       
    var_dump($error);        
}


$insereperna = $link->query("insert into tb_perna (cd_perna, nm_perna, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ($iddperna, 'testee', 'testee', '30', '10','1')");
$idperna = mysqli_insert_id($link);

if(!$insereperna)
{
    $error = true;
    var_dump($error);    
    
}

//ok
$insereabdomem = $link->query("insert into tb_abdomem (cd_abdomem, nm_abdomem, ds_treino, qt_carga, qt_repeticoes, qt_vezes)
values ($idabdomem, 'testee', 'testee', '30', '10','1')");
$idabd = mysqli_insert_id($link);

if(!$insereabdomem)
{
    $error = true;
    var_dump($error);    
}


$insereuser = $link->query("insert into tb_user (cd_biceps, cd_triceps, cd_abdomem, cd_peito, 
cd_costas, cd_perna, nm_user, cd_senha,  dt_ano, qt_kg, sg_sexo) 
values ('$idbiceps', '$idtriceps', '$idabd','$idpeito', '$idcostas', '$idperna',
'$name', '$cdsenha', '$ano', '$peso', '$sexo')");
 $iduser = mysqli_insert_id($link);

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

//inserir os cds 

$insereidtriceps = $link->query("insert into tb_triceps cd_triceps values ($iduser)");
if(!$insereidtriceps)
{
    //var_dump($link->error);
    $error = true;
}





//select das informaçoes 
//tera que aparecer apos o cadastro e apos o login pegar o id do user e fazer
//////////////////////testes

//pegar todos os registros apos o cadastro e jogar na tela.

//querys
$queryuser = $link->query("SELECT * FROM tb_user where cd_user = $iduser");
//ajustar o id para setar o id do usuario nele cd_triceps = id_user no bd para nao perder vinculo
//do usuario com os treinos
//$querytriceps = $link->query("SELECT * FROM tb_triceps where id_user = $idtriceps");
//$querytriceps = $link->query("SELECT * FROM tb_triceps where id_triceps = $id_user");


while($reguser = $queryuser->fetch_array()) 
{
    echo "<h2>Seu cadastro foi Confirmado com exito ".$reguser["nm_user"]."</h2>";
}

while($regtriceps = $querytriceps->fetch_array())
{
    echo $regtriceps["nm_triceps"];
}

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


