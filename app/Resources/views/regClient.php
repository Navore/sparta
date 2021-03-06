<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("header.php");?>
        <title>Cadastro de clientes</title>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <!-- MENUS LATERAIS E SUPERIOR -->
                <?php include_once("Menus.php");?>

                <!-- CONTEUDO DA PAGINA -->
                <div class="right_col" role="main">
                    <div class="">
                        <!-- CABE�ALHO DO CONTEUDO DA PAGINA -->
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Cadastro de cliente</h3>
                            </div>
                        </div>
                        <!-- /FIM DO CABE�ALHO DO CONTEUDO DA PAGINA -->

                        <div class="clearfix"></div>
						
                        <div class="row">
                            <!-- FORMULARIO DADOS PESSOAIS DO CLIENTE -->
                            <div class="col-md-6 col-xs-12">
                                <div class="x_panel">
                                    <!-- CABE�ALHO DO FORMULARIO -->
                                    <div id="x-title" class="x_title">
                                        <h2>Dados pessoais <small>informações pessoais do cliente</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    <div class="clearfix"></div>
                                    </div>
                                    <!-- /FIM DO CABE�ALHO DO FORMULARIO -->

                                    <!-- CONTEUDO DO FORMULARIO -->
                                    <div class="x_content form-horizontal form-label-left input_mask">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3"  name="cpf_cnpj" placeholder="Cpf ou Cnpj">
                                            <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="rg_ie" placeholder="Rg ou Ie">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="nome" placeholder="Nome ou Razão social">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="nome_fantasia" placeholder="Nome fantasia">
                                            <span class="fa fa-user-plus form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" placeholder="Data nascimento" name="data_nasc" data-inputmask="'mask': '99/99/9999'">
                                            <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="form-group pull-right">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>&nbsp;
                                            <div id="gender" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="masc"> Masc
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="femi"> Femi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /FIM DO CONTEUDO DO FORMULARIO -->
                                </div>
                            </div>
                            <!-- /FIM DO FORMULARIO DADOS PESSOAIS -->
						
                            <!-- FORMULARIO ENDERE�O DO CLIENTE -->
                            <div class="col-md-6 col-xs-12">
                                <div class="x_panel">
                                    <!-- CABE�ALHO DO FORMULARIO -->
                                    <div class="x_title">
                                        <h2>Endereço <small>informações dos endereços do cliente</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- /FIM DO CABE�ALHO DO FORMULARIO -->
		                  				
                                    <!-- CONTEUDO DO FORMULARIO ENDERE�O-->
                                    <div class="x_content form-horizontal form-label-left input_mask">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" placeholder="Cep" name="cep" data-inputmask="'mask' : '9999999-999'">
                                            <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="rg_ie" placeholder="Rg ou Ie">
                                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="nome" placeholder="Nome ou Raz�o social">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="nome_fantasia" placeholder="Nome fantasia">
                                            <span class="fa fa-user-plus form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" placeholder="Data nascimento" name="data_nasc" data-inputmask="'mask': '99/99/9999'">
                                            <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="form-group pull-right">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>&nbsp;
                                            <div id="gender" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="masc"> Masc
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="femi"> Femi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /FIM DO CONTEUDO DO FORMULARIO ENDERE�O-->
                                </div>
                            </div>
                            <!-- /FIM DO FORMULARIO ENDERE�O DO CLIENTE -->
                        </div>
                    </div>
                </div>
                <!-- /FIM DO CONTEUDO DA PAGINA -->
		        
                <!-- RODAPÉ -->
                <?php include_once("footer.php");?>
            </div>
        </div>
        <!-- SCRIPTS -->
        <?php include_once("scripts.php");?>
    </body
</html>