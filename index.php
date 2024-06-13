<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <title>Pizzaria</title>
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stevepizza";

    //conexao

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO pedidos (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')";

        if($conn->query($sql) === true) {
            echo "Pedido Realizado Com Sucesso";
        } else{
            echo "preencha todos os dados corretamente" . $sql . "<br>" . $conn->error;
        }
        
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sabor = $_POST["sabor"];
        $tamanho= $_POST["tamanho"];
        $acompahamento = $_POST["acompanhamento"];
        $bebida= $_POST["bebida"];
        

        $sql2 = "INSERT INTO delivery (sabor, tamanho, acompanhamento, bebida) VALUES ('$sabor', '$tamanho', '$acompanhamento', '$bebida')";

        if($conn->query($sql2) === true) {
            echo "seu pedido sera entregue em ate 40 minutos";
        } else{
            echo "preencha seus dados corretamente" . $sql2 . "<br>" . $conn->error;
        }
            
    }

    $conn->close();

?>



    <header>
        
        <nav class="menu-nav">
            <ol class="list">
                <li> <a href="#home">HOME</a> </li>
                <li> <a href="#menu"> MENU</a> </li>
                <li> <a href="#about">CHEFFS</a> </li>
            </ol>
        </nav>


        <div class="big-msg">
            <h2> STEVE</h2>
            <h2> PIZZA </h2>
            <h3> <a href="#menu">  MENU </a> </h3>
        </div>
        <div class="open-hour">
            <h4>PIZZA NO FORNO À LENHA É UM AMOR À MODA ANTIGA!</h4>
        </div>
    </header>

    <!-- Cardápio -->
    <section id="menu">
        <div class="container">
            <h2 class="container__upper-text">Nosso Menu</h2>
            <div class="menu">
                <!-- Botões que aparecem no header -->
                
                    
                    
                </div>

                <!-- Conteudo -->
                 <div class="menu2">
                <div class="content-box">
                    <div class="content">
                        <span class="content__price-box">$79.99</span>
                        <h3 class="content__item-name">calabresa <span class="content__red-box">Promoção</span> </h3>                          
                        </h3>
                        <p class="content__item-description"></p>
                    </div>

                    <div class="content-box">
                    <div class="content">
                        <span class="content__price-box">$79.99</span>
                        <h3 class="content__item-name"> frango com catupiry  <span class="content__red-box">Promoção</span> </h3>                        
                        </h3>
                        <p class="content__item-description"></p>
                    </div>

                    <div class="content-box">
                    <div class="content">
                        <span class="content__price-box">$89.99</span>
                        <h3 class="content__item-name">coração <span class="content__red-box">preço da noite</span> </h3>                         
                        </h3>
                        <p class="content__item-description"></p>
                    </div>



                    <div class="content-box">
                    <div class="content">
                        <span class="content__price-box">$80.00</span>
                        <h3 class="content__item-name">portuguesa <span class="content__red-box">preço da noite</span> </h3> 
                           
                        </h3>
                         <p class="content__item-description"></p>
                    </div>


                    <div class="content">
                        <span class="content__price-box">13.99</span>
                        <h3 class="content__item-name">Coca-cola  <span class="content__red-box">2l</span> </h3> 
                        <p class="content__item-description"></p>
                    </div>

                    <div class="content">
                        <span class="content__price-box">11.99</span>
                        <h3 class="content__item-name">Fanta laranja  <span class="content__red-box">2l</span> </h3> 
                        <p class="content__item-description"></p>
                    </div>

                    <div class="content">
                        <span class="content__price-box">11.99</span>
                        <h3 class="content__item-name">Fanta uva <span class="content__red-box">2l</span> </h3> 
                        <p class="content__item-description"></p>
                    </div>

            

                    <div class="content3">
                    <span class="content__price-box">$21.99</span>
                        <h3 class="content__item-name"> Batata frita<span class="content__red-box">500gm</span> </h3> 
                        </div>

                        <div class="content3">
                    <span class="content__price-box">$15.99</span>
                        <h3 class="content__item-name"> cebolinha<span class="content__red-box">250gm</span> </h3> 
                        </div>


                    </div>
<br><br>
<div class="menu">
                    <h1> Registro de Usuários </h1>

<form action="" method="post">
    NOME: <input type="text" name="nome" id="" required><br>
    TELEFONE: <input type="number" name="telefone" id="" required><br>
    ENDEREÇO: <input type="text" name="endereco" id="" required><br>
    SABOR: <input type="text" name="sabor" id="" required><br>
    TAMANHO: <input type="text" name="tamanho" id="" required><br>
    ACOMPANHAMENTO: <input type="text" name="acompanhamento" id="" required><br>
    BEBIDA: <input type="text" name="bebida" id="" required><br>

    <input type="submit" value="pedidos">

</form>
</div>




                </div>
            </div>
        </div>
    </section>   
    <!-- Sobre -->
        <section id="about">
            <div class="corpo">
                <div id="mr-italiano">
                    <p id="the-chef"><b>The chef</b> mr.Matheus Santos</p>
                    <p id="the-chef"><b>The chef</b> mr.Rian Santos</p>
                    <p id="interior-title">
                </div>
                <div class="img-container">
                </div>
                <h4>horários de funcionamentos</h4>
                <div class="schedule">
                    <div class="column1">
                        <p>Segunda-Feira 18:00 - 02:00</p>
                        <p>Terça-Feira 18:00 - 02:00</p>
                        <p>Quarta-Feira 18:00 - 02:00</p>
                        <p>Quinta-Feira 18:00 - 02:00</p>
                        <p>Sexta-Feira 18:00 - 02:00</p>
                    </div>
                    <div class="column2">
                        <p>Sabádo 18:00 - 03:00</p>
                        <p>Domingo 18:00 - 03:00</p>
                        
                        
                    </div>
                </div>
            </div>
        </section>

  
    <script src="menu.js"></script>

    <footer>Desenvolvido por Matheus Santos e Rian Santos | 2024&copy;</footer>
</body>


</html>