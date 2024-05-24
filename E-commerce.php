<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cart">
        <h2>Carrinho de Compras</h2>
        <ul id="item-list">
            <!-- Itens serão adicionados dinamicamente aqui -->
        </ul>
        <p>Total: <span id="total">0</span> reais</p>
        <button onclick="checkout()">Finalizar Compra</button>
    </div>
    <div class="ItensEcomm">
        <div class="products">
            <div class="product-card" onclick="addItemToCart('Camiseta', 50)">
                <img src="assets/shirt.webp" alt="Camisa">
                <h3>Camisa</h3>
                <p>R$ 50</p>
            </div>
        </div>
        <div class="products">
            <div class="product-card" onclick="addItemToCart('Pano de Chão', 99)">
                <img src="assets/panodechao.webp" alt="Camisa">
                <h3>Pano de Chão</h3>
                <p>R$ 99</p>
            </div>
        </div>
        <div class="products">
            <div class="product-card" onclick="addItemToCart('Ferro de Passar', 249)">
                <img src="assets/ferrodepassar.jpg" alt="Camisa">
                <h3>Ferro de Passar</h3>
                <p>R$ 249</p>
            </div> 
        </div>
        <div class="products">
            <div class="product-card" onclick="addItemToCart('Chaleira não Elétrica', 10)">
                <img src="assets/chaleira.webp" alt="Camisa">
                <h3>Chaleira Não Elétrica</h3>
                <p>R$ 10</p> <!-- ('Chaleira não Elétrica', 12) deveria ser 10 -->
            </div>
            // na linha 41, ('Chaleira não Elétrica', 12) deveria ser 10 //
        </div>
        <div class="products">
            <div class="product-card" onclick="addItemToCart('Banco de Dados', 453)">
                <img src="assets/bancodedados.jpeg" alt="Camisa">
                <h3>Banco de Dados</h3>
                <p>R$ 453</p> <!-- ('Banco de Dados', 456) deveria ser 453 -->
            </div>
        </div>     
    </div>
   

    <script src="script.js"></script>
</body>
</html>