
<!DOCTYPE html>

<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

        <link rel="stylesheet" href="http://ipvtransito.com.br/styles/main.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="/custom/js/custom.js"></script>


    </head>
    <body>


        <br><br>

        <div id="dados-inscricao" ng-controller="InscricaoCtrl" class="container">
            <div class="row">
                <div class="col-xs-12"><h1 class="page-title">Inscreva-se já:</h1><p>Preencha os campos a seguir:</p></div>
            </div>
            <div class="row">
                <form  id='signup'>
                    <div class="coluna-esq col-xs-3" >
                        <div class="form-group"><label>Nome</label><input type="text" name="name" ng-model="inscricao.name" required="" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"></div>
                        <div class="form-group"><label>CPF</label><input type="text" name="cpf" ng-model="inscricao.cpf" ui-mask="999.999.999-99" required="" minlength="11" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="___.___.___-__"></div>
                        <div class="form-group"><label>Data de Nascimento</label><input type="text" name="nascimento" ng-model="inscricao.nascimento" ui-mask="99/99/9999" required="" minlength="8" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__/__/____"></div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group"><label>Endereço</label><input type="text" name="address" ng-model="inscricao.address" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group"><label>Núm.</label><input type="text" name="address_num" ng-model="inscricao.address_num" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>Bairro</label><input type="text" name="address_neighbourhood" ng-model="inscricao.address_neighbourhood" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                        <div class="form-group"><label>Telefone</label><input type="text" name="phone" ng-model="inscricao.phone" ui-mask="(99) 9999-9999" minlength="10" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="(__) ____-____"></div>
                        <div class="form-group"><label>Nr. CNH</label><input type="text" name="nr_cnh" ng-model="inscricao.nr_cnh" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                        <div class="form-group"><label>E-mail</label><input type="email" name="email" ng-model="inscricao.email" required="" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required"></div>
                        <div class="form-group"><label>Formulário Renach <small>(Protocolo fornecido pelo DETRAN)</small></label><input type="text" name="renach" ng-model="inscricao.renach" ui-mask="AA ********" required="" minlength="6" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__ ________"></div>
                    </div>
                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="form-group"><label>Sexo</label>
                            <div class="clearfix"></div><label><input type="radio" name="sex" value="Masculino" ng-model="inscricao.sex" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> Masculino</label><label><input type="radio" name="sex" value="Feminino" ng-model="inscricao.sex" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> Feminino</label></div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group"><label>RG</label><input type="text" name="rg" ng-model="inscricao.rg" ui-mask="99.999.999-9" required="" minlength="9" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__.___.___-_"></div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group"><label>Órgão Expedidor/UF</label><input type="text" name="orgao_expedidor" ng-model="inscricao.orgao_expedidor" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>Nome Completo da Mãe</label><input type="text" name="mom_name" ng-model="inscricao.mom_name" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                        <div class="form-group"><label>Complemento</label><input type="text" name="address_complement" ng-model="inscricao.address_complement" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                        <div class="form-group"><label>CEP</label><input type="text" name="address_cep" ng-model="inscricao.address_cep" ui-mask="99999-999" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required" placeholder="_____-___"></div>
                        <div class="form-group"><label>Celular</label><input type="text" name="cell_phone" ng-model="inscricao.cell_phone" ui-mask="(99) 9999-9999?9" minlength="10" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="(__) ____-_____"></div>
                        <div class="form-group"><label>Categoria</label><select name="categoria" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" ng-model="inscricao.categoria" required=""><option value="">Selecionar</option><option value="A">A</option></select></div>
                        <div class="form-group"><label>Senha</label><input type="password" name="password" ng-model="inscricao.password" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                        <div class="form-group" style="text-align: center;">


                        </div>

                    </div>
                </form>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="HZ8PZKUZZEQMY">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </body>
</html>
