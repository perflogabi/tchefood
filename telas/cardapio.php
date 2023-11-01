
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" />

    <title>Pizzaria da Gabi</title>
    <link rel="stylesheet" href="style/cardapio.css">
</head>
<body>
    <?php
        include './telas/menu.php';
    ?>

    <!-- modelos de pizza na lista e no carrinho -->
    <div class="models">

        <!-- pizza na lista -->
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img src="" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price">R$ --</div>
            <div class="pizza-item--name">--</div>
            <div class="pizza-item--desc">--</div>
        </div>

        <!-- pizza no carrinho -->
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>

    </div>
    <!-- /models -->

    <!-- .menu-openner aparecera no modo mobile -->
    <header>
        
        <div class="menu-openner"><span>0</span>🛒</div>
    </header>
    <!-- /menu-openner -->

    <!-- conteudo principal -->
    <main>
        <button class='botaoVoltar' id='botao-voltar' href='/dashboard'>Voltar</button>
        <h2>Pizzas</h2>

        <div class="pizza-area"></div>
    </main>
    <!-- /conteudo principal -->

    <!-- aside do carrinho -->
    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Suas Pizzas</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar">Finalizar a compra</div>
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <p id="mensagem-finalizacao">Efetuado com sucesso</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- /aside do carrinho -->

    <!-- janela modal .pizzaWindowArea -->
    <div class="pizzaWindowArea">
        <div class="pizzaWindowBody">
            <div class="pizzaInfo--cancelMobileButton">Voltar</div>
            <div class="pizzaBig">
                <img src="" />
            </div>
            <div class="pizzaInfo">
                <h1>--</h1>
                <div class="pizzaInfo--desc">--</div>
                <div class="pizzaInfo--sizearea">
                    <div class="pizzaInfo--sector">Tamanho</div>
                    <div class="pizzaInfo--sizes">
                        <div data-key="P" class="pizzaInfo--size">PEQUENA <span>--</span></div>
                        <div data-key="M" class="pizzaInfo--size">MÉDIA <span>--</span></div>
                        <div data-key="G" class="pizzaInfo--size selected">GRANDE <span>--</span></div>
                    </div>
                </div>
                <div class="pizzaInfo--pricearea">
                    <div class="pizzaInfo--sector">Preço</div>
                    <div class="pizzaInfo--price">
                        <div class="pizzaInfo--actualPrice">R$ --</div>
                        <div class="pizzaInfo--qtarea">
                            <button class="pizzaInfo--qtmenos">-</button>
                            <div class="pizzaInfo--qt">1</div>
                            <button class="pizzaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="pizzaInfo--addButton">Adicionar ao carrinho</div>
                <div class="pizzaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>
    <!-- /janela modal .pizzaWindowArea -->
    

    <script src="js/pizzas.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
