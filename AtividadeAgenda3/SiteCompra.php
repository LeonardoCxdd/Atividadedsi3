<link rel="stylesheet" href="EstilizacaoPagamento.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<main class="container">
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $valorCompra = $_POST["valor"];
    $formaPagamento = $_POST["Pagamento"];
    $desconto = 0;

    // ERRO: cálculo incorreto para boleto e depósito
    if ($formaPagamento == "Cartão De Crédito") {
        $desconto = 0;
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com cartão de crédito. Não há desconto.";
    } elseif ($formaPagamento == "boleto") {
        $desconto = $valorCompra * 0.08; // erro resolvido
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com boleto. Seu desconto é de R$ $desconto.";
    } elseif ($formaPagamento == "deposito") {
        $desconto = $valorCompra * 0.10; // erro resolvido
        $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com depósito. Seu desconto é de R$ $desconto.";
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

   
    echo "<div class='w3-panel w3-blue'>$mensagem</div>";
}
?>
// eu tinha percebi que o valor que esta vendo feito para utilizar no desconto estava errado, entao coloquei o valor certo e resvolveu.