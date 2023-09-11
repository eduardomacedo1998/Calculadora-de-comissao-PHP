<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <form action="./index.php" method="POST">


         <span>Valor da conta total</span>
         <input type="text" name="valor" id="valor">


         <span>Valor da comissão em %</span>
         <input type="text" name="porcentagem" id="porcentagem">


         <button type="submit">Calcular o valor</button>


    </form>

    <h1>Resultado Aqui Abaixo: </h1>


    <h1>
    <?php 

if($_SERVER["REQUEST_METHOD"]== 'POST'){

    $valor = $_POST['valor'];
    $porcentagem = $_POST['porcentagem'];


    if ($porcentagem > 100) {
        echo " esta acima de 100%";
    }else{
        
        $valornum = floatval($valor);
    $porcentagemnum = floatval($porcentagem);


    $result = ($porcentagemnum / 100) *  $valornum;
    
    echo  " comissão em R$:  " , $result;

    }


    

}
?>


    </h1>
    
    
  
    
    




</body>
</html>