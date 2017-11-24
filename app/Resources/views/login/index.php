<!DOCTYPE> 
<?php
//   INCLUDES   ////////////////////////////////////////////////////////
include_once ("../functions/functions.php");
//include_once("../functions/getcaptcha_CNPJ.php");
include_once("../class/html/classCreateHtml.php");
include_once("../class/html/classCreateButton.php");
///////////////////////////////////////////////////////////////////////
//   INSTANCIA DA CLASSE    ///////////////////////////////////////////
$createButton = new CreateButton;
///////////////////////////////////////////////////////////////////////
//   VARIAVEIS    /////////////////////////////////////////////////////
$form_cab = '<form action="../functions/get_Info_CNPJ.php" method="post">';
$erro = '';
$show = true;
$color = '#ddffcc';
////////////////////////////////////////////////////////////////////////
if(isset($_SESSION["status"])){
	$erro = $_SESSION["status"];
	$color = '#ccccff';
	unset ($_SESSION["status"]);
}
if($erro == "OK"){
	$show = false;
	$form_cab = '<form action="test.php" method="post">';
}
/////////////////////////
//verde-claro = '#ddffcc'
//azul-claro = '#ccccff'
//amarelo-claro = '#ffffcc'
//vermelho-claro = '#ffcccc'
//$color = '#ddffcc';
?>
<html lang="en">
    <head>
        <?php include_once("Header.php");?>
        <title>Sparta | Login</title>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    </head>
    <body id="body" class="login" style="background-color: <?php echo $color; ?>">

        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="control.php" method="post">
                            <h1>Login</h1>
                            <?php if($erro == 'erro_login'){?>
                            <label for="lastname" class="col-md-12 control-label margin-top-10">  
                                    Login ou senha incorretos.
                            </label>
                            <?php } ?>
                            <div class="col-md-19 col-sm-10 col-xs-10 pull-left" style="padding:0">
                                <input id="focus-signin" type="text" class="form-control" placeholder="Login" name="login" required autofocus/>
                            </div>
                            <!-- AJUDA LOGIN -->	
                            <div id="help" class="pull-right">
                                <span id="help-login" class="help"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            <div class="col-md-19 col-sm-10 col-xs-10 pull-left" style="padding:0">
                                <input type="password" class="form-control" placeholder="Senha" nome="senha" required/>
                            </div>
                            <!-- AJUDA SENHA -->	
                            <div id="help" class="pull-right">
                                <span id="help-senha" class="help"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            <div class="col-xs-12 margin-top-20">
                                <span class="pull-left">
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Relembrar senha
                                </span>
                                <span class="pull-right">
                                    <a href="#">Esqueceu sua senha?</a>
                                </span>
                            </div>
                            <div class="col-xs-14 margin-top-20">
                                <?php
                                echo $createButton->CreateButtonHtml(2, "", "Entrar", "play");

                                echo $createButton->CreateButtonHtml(1, "", "Novo","hand-up","onclick", "window.location.href='#signup'; Change_Color('#ccccff',2)");
                                ?>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="separator">
                                <p class="change_link"> Novo no site? Clique em novo </p>
                                <div class="clearfix"></div><br/>
                                <div>
                                    <!--<h1><i class="fa fa-lightbulb-o fa-2x"></i> Navore Desenvolvimento</h1>-->
                                    <h1><span class="glyphicon glyphicon-tree-deciduous"></span> Navore Desenvolvimento</h1>
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
<!--/////////////////////////////////////////////////////////-->
<!--///////////PARTE DO CADASTRO DA EMPRESA//////////////////-->
<!--/////////////////////////////////////////////////////////-->
                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <?php echo $form_cab; ?>
                        <!-- <form action="../functions/get_Info_CNPJ.php" method="post"> -->
                            <h1>Criar cadastro</h1>
                            <?php if($show == true){ 
                                    if($erro == 'erro_cad'){?>
                            <label for="lastname" class="col-md-12 control-label margin-top-10">  
                                Erro ao buscar infomações<br/>
                                CNPJ ou Captcha incorretos
                            </label>
                            <?php } ?>

                            <div class="form-group">
                                <div>
                                    <input id="focus-signup" class="form-control" type="text" placeholder="Insira seu CNPJ ou CPF" name="cnpj" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input class="form-control" type="text" placeholder="Insira a imagem abaixo" name="captcha_cnpj" required/>
                                </div>
                                <div>
                                    <img id="captcha_cnpj" src="<?php echo $imagem_cnpj; ?>" border="0">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($show == false){ ?>
                            <label for="lastname" class="col-md-12 control-label margin-top-10">  
                                Infomações recebidas com sucesso
                            </label>
                            <div class="form-group">
                                <div class="pull-left">
                                    <label for="lastname" class="col-md-12 control-label margin-top-10"> Nome Fantasia </label>
                                </div>
                                <div>
                                    <input id="focus-signup" type="form-control" class="form-control" placeholder="Insira o nome fantasia" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left">
                                    <label for="lastname" class="col-md-12 control-label margin-top-10"> Senha </label>
                                </div>
                                <div>
                                    <input type="password" class="form-control" placeholder="Insira a senha" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left">
                                    <label for="lastname" class="col-md-12 control-label margin-top-10"> Confirmar senha </label>
                                </div>
                                <div>
                                    <input type="password" class="form-control" placeholder="Confirme sua senha" required/>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-xs-14 margin-top-20">
                                <?php
                                echo $createButton->CreateButtonHtml(2, "", "Cadastar", "play");

                                echo $createButton->CreateButtonHtml(1, "", "Cadastar", "hand-up", "onclick", "window.location.href='#signin'; Change_Color('#ccccff',1)");
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link"> Já é cadastrado ?  Clique em login</p>
                                <p class="change_link"> Não tem CNPJ ?  Cadastre-se com o CPF</p>
                                <div class="clearfix"></div><br />
                                <div>
                                    <h1><span class="glyphicon glyphicon-tree-deciduous"></span> Navore Desenvolvimento</h1>
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <?php include_once("scripts.php");?>
    </body>
</html>