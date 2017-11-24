<?php
class CreateForm extends CreateHtml{
    //<editor-fold desc="NUMERO DO MODELO DO FORM (pElement[0])">
    // 1 = FORM PADRÃO CAD CLIENTE, FORNECEDOR
    //</editor-fold>
    //
    //<editor-fold desc="METODO PRINCIPAL">
///////////////////////////////////////////////////////////////////////////////////////////
//////                 METODO ONDE CHAMAS OS ELEMENTOS DO PROJETO                   ///////
//     O PARAMETRO $pElement É O NUMERO DO  ELEMENTO (_exemple = PAGINA COM EXEMPLO)     //
//AO ACRESCENTAR UM ELEMENTO APENAS ACRESCENTE O METODO E CHAME ELE NO SWITCH PELO NUMERO//
    public function CreateFormHtml($pElement=1, $pId="", $pText="", $pAwesome="", $pEvent="", $pScript=""){
        $return = "";
        ///// COMPARAÇÃO E EXISTE ALGUM EVENTO//////////////
        if($pEvent != ""){
            $pEvent=$pEvent.'="'.$pScript.'"';
        }
        //1 E DEFAULT É O ELEMENTO PADRÃO, SE MUDAR TEM QUE MUDAR NOS DOIS
        switch ($pElement[0]){
            case 1:
                $return = $this->CreateForm1($pElement[1], $pId, $pClass, $pText);
                break;
            case 2:
                
                break;
            case 3:
                
                break;
            DEFAULT:
                
                break;
        }
        return $return;
    }
    //</editor-fold>
    //
    //<editor-fold desc="METODO FORM 1">
///////////////////////////////////////////////////////////////////////////////////
//                                   FORM 1                                     ///
//      (FORMULARIO PADRÃO DO CADASTRO DO CLIENTE, FORNECEDOR, MERCADORIA)       //
    private function CreateForm1($pElement, $pId, $pClass, $pText){
        // <editor-fold desc="CABEÇALHO DO FORMULARIO">
        $return = 
        '<div id="'.$pId.'" class="col-md-6 col-xs-12">
            <div class="x_panel">
                <!-- CABEÇALHO DO FORMULARIO -->
                <div id="x-title" class="x_title">
                    <h2>'.$pText[0].'<small>'.$pText[1].'</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Campos atuais</a></li>
                                <li><a href="#">Todos os campos</a></li>
                            </ul>
                        </li>
                    </ul>
                <div class="clearfix"></div>
                </div>
                <!-- /FIM DO CABEÇALHO DO FORMULARIO -->

                <!-- CONTEUDO DO FORMULARIO -->
                <div class="x_content form-horizontal form-label-left input_mask">';
        // </editor-fold>
                    echo 
        //<editor-fold desc="RODAPÉ FO FORMULÁRIO">
                '</div>
                <!-- /FIM DO CONTEUDO DO FORMULARIO -->
            </div>
        </div>
        <!-- /FIM DO FORMULARIO DADOS PESSOAIS -->';
        //</editor-fold>
        
        return $return;
    }
    //</editor-fold>
    /////////////////////////////////////////////
    ////<editor-fold desc="NUMERO DO CONTEUDO DO FORM (pElement[1])">
    // 1 = CAD CLIENTE
    //</editor-fold>
    //
    //<editor-fold desc="CONTEUDO FORM CLIENTE">
///////////////////////////////////////////////////////////////////////////////////
//                       CONTEUDO DO FORM DO CLIENTE                            ///
///////////////////////////////////////////////////////////////////////////////////
    private function CreateFormCliente(){
        $return =
        '<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
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
            <input type="text" class="form-control" placeholder="Data nascimento" name="data_nasc" data-inputmask="\'mask\': \'99/99/9999\'">
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
        </div>';
        
        return $return;
    }
    //</editor-fold>
}