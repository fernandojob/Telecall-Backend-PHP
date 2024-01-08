<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <link href="CSS/Style(index).css" rel="Stylesheet"  type="text/css"/>
      <link rel="icon" href="./image/icone.png" sizes="192x192">
      <meta name="description" content="" />
      <script src="JS/jquery.js" type="text/JavaScript"></script>
      <script src="JS/effects.js" type="text/JavaScript"></script>
      <script src="./JS/verificarLogin.js" type="text/JavaScript"></script> 
      <script src="https://kit.fontawesome.com/dac26df030.js" crossorigin="anonymous"></script> 
      <title>Ínicio</title>
   </head>
   <body>

   <?php include_once './Assets/config.php'; ?>
   
   <header>
      <div class="/-link">
         <a href="./index.php">
            <img src="./image/mini-logo.png">
         </a>
      </div>
      <nav>
         <button id="bnt-mobile" onclick="openmenu()"><i class="fa fa-bars"></i></button>
         <div class="menu" id="menu">
            <div class="sub-menu">
               <button id="menu-text" onclick="OpenSubMenu()">Funcionalidades </button>
               <i id="icone-sub-menu" class="fa fa-caret-down"></i>
               <div class="content-sub-menu" id="content-sub-menu">
                  <a href="./Pages/2fa.php">Autenticação de dois fatores</a>
                  <a href="./Pages/numero-mascara.php">Número Máscara</a>
                  <a href="./Pages/google-chamadas-verificadas.php">Chamadas verificadas do Google</a>
                  <a href="./Pages/sms-Programavel.php">SMS Programável</a>
               </div>
            </div>
            <a href="./Pages/modelo-BD.php" id="modeloBD">Modelo BD</a>
            <a href="./Pages/usuarios.php" id="users">Usuários</a>
            <a href="./Pages/registro.php" id="registrar" >Registre-se</a>
            <a href="./Pages/login.php" id="entrar">Entrar</a>
            <div class="menu-conta">
               <button id="logado" onclick="OpenMenuConta()"><i class="fa-solid fa-user-large"></i></button>
               <i id="icone-conta" class="fa fa-caret-down"></i>
               <div class="logado-content" id="logado-content">
               <p id="username">username</p>
               <a href="./PHP/logout.php" id="sair">Sair Da Conta</a>
            </div>
                  </div>
                  <button id="bnt-darkmode" onclick="darkmode()"><i class="fa-solid fa-circle-half-stroke"></i></button>
                  <button id="btnAumentar">A+</button>
                  <button id="btnDiminuir">A-</button>
         </div>
      </nav>
   </header>

      <section class="main">
         <div class="main-content">
            <h1 id="medidor">Melhor comunicação entre as empresas e seus clientes.</h1>
            <p class="controla-fonte">Conheça nossa plataforma De comunicações em nuvem nomeada De CPaaS.</p>
            <a href="Pages/Precos.php"><button>Assine já</button></a>
         </div>
         <div class="image-main">
            <img src="image/banner.png" alt=""/>
         </div>
      </section> <!--main-->

      <div class="divisor"></div>

      <section class="conteiner">
         <div class="image">
            <img src="image/home-second.png" alt="" />
         </div> <!--image-->
         <div class="content">
            <h2>O que é CPaaS?</h2>
            <h3>Com O CPaaS O futuro da comunicação chegou.</h3>
            <p>É uma solução de software de comunicação que atua
               como uma base sobre a qual desenvolvedores podem
               integrar uma variedade de aplicativos
            Métodos de comunicação típicos, como voz, chamadas
               de vídeo ou mensagens de texto SMS, podem ser
               incorporados em outros sistemas por meio de APIs que
               se conectam à plataforma CPaaS.</p>
         </div> <!--content-->
      </section> <!--conteiner-->

      <div class="divisor"></div>

      <aside class="lateral">
         <img src="image/teste.png" />
      </aside>
      <div class="mobile-flex"> 
         <section class="beneficios">
            <h2>Dentre os benefícios da CPaaS estão:</h2>
            <ul>
               <li id="margin"><p>Controle de custo: pois a empresa vai fazer o pagamento daquilo que usar;</p></li>
               <li id="margin"><p>Maior produtividade: isso porque o tempo usado para a Ti tradicional é reduzido com o uso da plataforma de serviço;</p></li>
               <li id="margin"><p>Escalabilidade: isso porque as infraestruturas das plataformas de serviços são flexíveis e se adequam a qualquer projeto ou necessidade;</p></li>
               <li id="margin"><p>Comunicação mais ampla: dentre os benefícios da CPaaS, está que há uma comunicação mais ampla devido a integração com os canais digitais que são os mais usados pelo consumidor;</p></li>
               <li><p>Empresas podem incorporar suas comunicações diretamente em seus aplicativos usados para agilizar processos que demandam maior comunicação.</p></li>
            </ul>
         </section> <!--beneficios-->

         <div class="divisor-mobile"></div>

         <section class="usabilidade">
            <h2>Usabilidade do CPaaS</h2>
            <ul>
               <li>Compromissos e lembretes</li>
               <p>A plataforma ajuda lembrar a equipe sobre alguns compromissos e oferece a confirmação de compromissos, dentre outros serviços.</p>
               <li>Segurança</li>
               <p>Há ainda os serviços de autenticação de 2 fatores que oferece mais segurança nas transações e comunicação.</p>
               <li>Comunicação</li>
               <p>Para as áreas de comunicação, marketing e vendas, esses serviços CPaaS são uma mão na roda, isso porque tem como enviar mensagens promocionais, ou de algum evento, lançamentos etc.</p>
               <li>Comunicação interna</li>
               <p>Nas empresas em geral, a comunicação contínua e assertiva é uma necessidade presente. Por isso, tem como facilitar a comunicação remota entre os times.</p>
            </ul>
         </section> <!--usabilidade-->
      </div>
      <div class="divisor"></div>

      <section class="propriedades">
         <h2>Nossas propriedades</h2>
         <div class="lado">
            <div class="soluction">
               <img src="" alt="" />
               <h3>Autenticação de dois fatores</h3>
               <p>É um procedimento de segurança que garante que serão
                  necessários 2 fatores únicos para liberação de uma ação.</p>
                  <a href="/Pages/Funcionalidades/2fa.php">Saiba-Mais</a>
            </div> <!--soluction-->
            <div class="soluction">
               <img src="" alt="" />
               <h3>Número máscara</h3>
               <p>Garanta aos seus clientes a capacidade de fazer chamadas e enviar
                  mensagens sem expor seus números de telefone pessoais.</p>
                  <a href="/Pages/Funcionalidades/numero-mascara.php">Saiba-Mais</a>
            </div> <!--soluction-->
            <div class="soluction">
               <img src="" alt="" />
               <h3>Chamadas verificadas do google</h3>
               <p>Recurso Que permite que empresas exibam
                  para o cliente na hora da chamada sua marca,
                  logotipo e até mesmo o motivo da chamada.</p>
                  <a href="/Pages/Funcionalidades/google-chamadas-verificadas.php">Saiba-Mais</a>
            </div> <!--soluction-->
            <div class="soluction">
               <img src="" alt="" />
               <h3>SMS programável</h3>
               <p>Ferramenta Para Enviar SMS que o seu cliente precisa e com a
                  segurança, a velocidade e a confiabilidade que você
                  espera.</p>
                  <a href="/Pages/Funcionalidades/sms-Programavel.php">Saiba-Mais</a>
            </div> <!--soluction-->
         </div> <!--lado-->
      </section> <!--propriedades-->
      
      <button onclick="backToTop()" id="bnt-top"><i class="fa-solid fa-angles-up"></i></button>

      <section class="footer">
         <div class="logo-footer">
             <a href="index.php">
                <img src="image/logorecortsm.png">
             </a>
          </div> <!--logo-footer-->
          <div class="contato">
             <h2> Entre Em Contato</h2>
                 <p>luidywertuly@souunisuam.com.br</p>
                 <p>pedrohenriquesilvaalmeida@souunisuam.com.br</p>
                 <p>fernandojorge@souunisuam.com.br</p>
          </div> <!--contato-->
          <div class="redes-sociais">
                <h2>Nossas Redes Sociais</h2>
             <a href="./Pages/erro.php">
               <i class="fa-brands fa-instagram fa-2xl"></i>
             </a>
             <a href="#">
                <i class="fa-brands fa-linkedin fa-2xl"></i>
             </a>
             <a href="#">
                <i class="fa-brands fa-github fa-2xl"></i>
             </a>
             <a href="#">
                <i class="fa-brands fa-facebook fa-2xl"></i>
             </a>
          </div> <!--redes-sociais-->
      </section><!--footer-->
      <footer class="copyright">
          <p>Copyright © 2023 | Telecall. Todos os direitos reservados.</p>
      </footer>
   </body>
</html>