<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>  
<?php
$preco = 120;
$quantidade = 3;
$desconto = 30;
$parcelas = 2;
$um = $preco*$quantidade;
$dois = $um-$desconto;
$tres = $dois/$parcelas;
$quatro = $dois+15;
$cinco = $dois%2;
echo "Valor da compra:$um <br>";
echo "Valor após o desconto:$dois <br>";
echo "Valor de cada parcela:$tres <br>";
echo "Valor com taxa de 15:$quatro <br>";
echo "Resto da divisão por 2:$cinco <br>";
?>
    </body>
</html>
