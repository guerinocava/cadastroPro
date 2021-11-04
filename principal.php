<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylle.css">
    <title>Prodec Geral</title>
</head>
<body> 
    O Ususario é: >?php echo $_SESSION['usuario'];?>
    <nav class="menu">
        <ul>
            <li>Cadastro de:
                <ul>
                    <li><a onclick='cadastrocliente()'>Cliente</a></li> 
                    <li><a onclick='cadastrofornecedor()'>Fornecedor</a></li>
                    <li><a onclick='cadastrofuncionar()'>Funcionário</a></li>
                    <li><a onclick='cadastroproduto()'>Produto</a></li>
                    <li><a onclick='cadastrousuario()'>Usuário</a></li>
                </ul>
            </li>
            <li>Editar
                <ul>
                    <li><a onclick='cadastrocliente()'>Cliente</a></li> 
                    <li><a onclick='cadastrofornecedor()'>Fornecedor</a></li>
                    <li><a onclick='cadastrofuncionar()'>Funcionário</a></li>
                    <li><a onclick='cadastroproduto()'>Produto</a></li>
                    <li><a onclick='cadastrousuario()'>Usuário</a></li>
                </ul>
            </li>        
           <li>Estoque
                <ul>
                    <li><a onclick=''>Entrada</a>
                        <ul>
                            <li><a onclick='cadestpecas()'>Peças</a></li>
                            <!--<li><a onclick=''>Acabado</a></li>
                            <li><a onclick=''>Defeito</a></li>-->
                        </ul>
                    </li>
                    <li><a onclick=''>Saída</a></li>
                    <li><a onclick=''>Refugo</a></li>
                    <li><a onclick=''>Retorno</a>
                        <ul>
                            <li><a onclick=''>Defeito</a></li>
                            <!--<li><a onclick=''>Acabado</a></li>
                            <li><a onclick=''>Defeito</a></li>-->
                        </ul>
                    </li>
                    <!--<li><a onclick=''>Compras</a></li>
                    <li><a onclick=''>Fornecedor</a></li>-->
                </ul>
            </li>
            <li>Pesquisa
                <ul>
                    <li><a onclick=''>Cliente</a></li>
                    <li><a onclick=''>Fornecedor</a></li>
                    <li><a onclick=''>Funcionário</a></li>
                    <li><a onclick=''>Produto</a>
                        <ul>
                            <li><a onclick=''>Pronto</a></li>
                            <!--<li><a onclick=''>Acabado</a></li>
                            <li><a onclick=''>Defeito</a></li>-->
                        </ul>
                    </li>
                    <li><a onclick=''>Peças</a>
                        <ul>
                            <li><a onclick=''>Peças</a></li>
                            <!--<li><a onclick=''>Acabado</a></li>
                            <li><a onclick=''>Defeito</a></li>-->
                        </ul>
                    </li>
                    <li><a onclick=''>Usuário</a></li>
                </ul>
            </li> 
        </ul>
    </nav>
<!-- **************************** cadastro de Cliente ********************************** -->
    
        <div class="modal" id="codcliente"> 
            <div class="modal-cont">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <label class="labelcliente">Nome</label>
                    <input name="nome" type="text" class="cadcliente" id="nome" placeholder="Nome" autocomplete="off">
                    <br>
                    <label class="labelforne">Fantasia   </label>
                    <input name="Fantasia" type="text" class="cadcliente" id="Fantasia" placeholder="Nome Fantasia" autocomplete="off">
                    <br>
                    <label class="labelcliente">Endereço</label>
                    <input name="Endereço" type="text" class="cadcliente" id="Endereço" placeholder="Endereço" autocomplete="off">
                    <br>
                    <label class="labelcliente">Complemento</label>
                    <input name="Complemento" type="text" class="cadcliente" id="Complemento" placeholder="Complemento" autocomplete="off">
                    <br>
                    <label class="labelcliente">Bairro</label>
                    <input name="Bairro" type="text" class="cadcliente" id="Bairro" placeholder="Bairro" autocomplete="off">
                    <br>
                    <label class="labelcliente">Cep</label>
                    <input name="Cep" type="text" class="cadcliente" id="Cep" placeholder="Cep" autocomplete="off">
                    <br>
                    <label class="labelcliente">Cidade</label>
                    <input name="Cidade" type="text" class="cadcliente" id="Cidade" placeholder="Cidade" autocomplete="off">
                    <br>
                    <label class="labelcliente">Estado</label>
                    <input name="Estado" type="text" class="cadcliente" id="Estado" placeholder="Estado" autocomplete="off">
                    <br>
                    <label class="labelcliente">UF</label>
                    <input name="UF" type="text" class="cadcliente" id="UF" placeholder="UF" autocomplete="off">
                    <br>
                    <label class="labelcliente">CNPJ / CPF</label>
                    <input name="CNPJ" type="text" class="cadcliente" id="CNPJ" placeholder="CNPJ / CPF" autocomplete="off">
                    <br>
                    <label class="labelcliente">Insc. Est. / RG</label>
                    <input name="InscEst" type="text" class="cadcliente" id="InscEst" placeholder="Insc. Est. / RG" autocomplete="off">
                    <br>
                    <label class="labelcliente">Fone 1</label>
                    <input name="Fone1" type="text" class="cadcliente" id="Fone1" placeholder="Fone 1" autocomplete="off">
                    <br>
                    <label class="labelcliente">Contato 1</label>
                    <input name="Contato1" type="text" class="cadcliente" id="Contato1" placeholder="Contato 1" autocomplete="off">
                    <br>
                    <label class="labelcliente">Fone 2</label>
                    <input name="Fone2" type="text" class="cadcliente" id="Fone2" placeholder="Fone 2" autocomplete="off">
                    <br>
                    <label class="labelcliente">Contato 2</label>
                    <input name="Contato2" type="text" class="cadcliente" id="Contato2" placeholder="Contato 2" autocomplete="off">
                    <br>
                    <label class="labelcliente">E-mail</label>
                    <input name="email" type="email" class="cadcliente" id="email" placeholder="Seu E-mail" autocomplete="off">
                    <br>
                    <label class="labelcliente">Site</label>
                    <input name="Site" type="text" class="cadcliente" id="Site" placeholder="Site" autocomplete="off">
                    <br>
                <button onclick="" class="btnA" >Cadastrar</button>
                <button onclick="" class="btnC" >Editar</button>
                <button onclick="" class="btnD" >Pesquisar</button>
                <button onclick="hideModal()" class="btnB" >Sair</button>
            </div>
        </div>
        <!-- **************************** cadastro de fornecedor ********************************** -->
        <div class="cadfornec" id="cadfornecedor"> 
            <div class="fornec">
                <h2 class="cadfor">Cadastro de Fornecedor</h2>
                    <label class="labelforne">Nome</label>
                    <input name="labelforne" type="text" class="cadforne" id="nome" placeholder="Nome" autocomplete="off">
                    <br>
                    <label class="labelcliente">Fantasia   </label>
                    <input name="Fantasia" type="text" class="cadforne" id="Fantasia" placeholder="Nome Fantasia" autocomplete="off">
                    <br>
                    <label class="labelforne">Endereço</label>
                    <input name="Endereço" type="text" class="cadforne" id="Endereço" placeholder="Endereço" autocomplete="off">
                    <br>
                    <label class="labelforne">Complemento</label>
                    <input name="Complemento" type="text" class="cadforne" id="Complemento" placeholder="Complemento" autocomplete="off">
                    <br>
                    <label class="labelforne">Bairro</label>
                    <input name="Bairro" type="text" class="cadforne" id="Bairro" placeholder="Bairro" autocomplete="off">
                    <br>
                    <label class="labelforne">Cep</label>
                    <input name="Cep" type="text" class="cadforne" id="Cep" placeholder="Cep" autocomplete="off">
                    <br>
                    <label class="labelforne">Cidade</label>
                    <input name="Cidade" type="text" class="cadforne" id="Cidade" placeholder="Cidade" autocomplete="off">
                    <br>
                    <label class="labelforne">Estado</label>
                    <input name="Estado" type="text" class="cadforne" id="Estado" placeholder="Estado" autocomplete="off">
                    <br>
                    <label class="labelforne">UF</label>
                    <input name="UF" type="text" class="cadforne" id="UF" placeholder="UF" autocomplete="off">
                    <br>
                    <label class="labelforne">CNPJ / CPF</label>
                    <input name="CNPJ" type="text" class="cadcliente" id="CNPJ" placeholder="CNPJ / CPF" autocomplete="off">
                    <br>
                    <label class="labelforne">Insc. Est. / RG</label>
                    <input name="InscEst" type="text" class="cadcliente" id="InscEst" placeholder="Insc. Est. / RG" autocomplete="off">
                    <br>
                    <label class="labelforne">Fone 1</label>
                    <input name="Fone1" type="text" class="cadforne" id="Fone1" placeholder="Fone 1" autocomplete="off">
                    <br>
                    <label class="labelforne">Contato 1</label>
                    <input name="Contato1" type="text" class="cadforne" id="Contato1" placeholder="Contato 1" autocomplete="off">
                    <br>
                    <label class="labelforne">Fone 2</label>
                    <input name="Fone2" type="text" class="cadforne" id="Fone2" placeholder="Fone 2" autocomplete="off">
                    <br>
                    <label class="labelforne">Contato 2</label>
                    <input name="Contato2" type="text" class="cadforne" id="Contato2" placeholder="Contato 2" autocomplete="off">
                    <br>
                    <label class="labelforne">Email</label>
                    <input name="email" type="email" class="cadforne" id="email" placeholder="Seu E-mail" autocomplete="off">
                    <br>
                    <label class="labelforne">Site</label>
                    <input name="Site" type="text" class="cadforne" id="Site" placeholder="Site" autocomplete="off">
                    <br>
                    <button onclick="" class="btncadfor">Salvar</button>
                    <button onclick="cadfornec()" class="btncadforA">Sair</button>
            </div>
        </div>
        <!-- **************************** cadastro de Funcionario ********************************** -->
        <div class="cadfuncio" id="cadfuncion"> 
            <div class="cadfunc">
                <h2 class="modal_funcio">Cadastro de Funcionário</h2>
                    <br>
                    <label class="labelfuncio">Nome</label>
                    <input name="nome" type="text" class="cadfuncionario" id="nome" placeholder="Nome" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Data</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="data" placeholder="Data" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Idade</label>
                    <input name="idade" type="text" class="cadfuncionario" id="idade" placeholder="Idade" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Dia</label>
                    <input name="dia" type="text" class="cadfuncionario" id="dia" placeholder="Dia" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Aniversário</label>
                    <input name="aniversario" type="text" class="cadfuncionario" id="aniversario" placeholder="Aniversario" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Sexo</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="sexo" placeholder="Sexo" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Estado Civil</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="estadocivil" placeholder="Estado Civil" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Naturalidade</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="naturalidade" placeholder="Natural de" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Nome da Mãe</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="nomemae" placeholder="Nome da Mãe" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Nome do Pai</label>
                    <input name="Fantasia" type="text" class="cadfuncionario" id="nomepai" placeholder="Nome do Pai" autocomplete="off">
                    <br>
                    <label class="labelfuncio">CPF:</label>
                    <input name="CNPJ" type="text" class="cadfuncionario" id="CPF" placeholder="CPF" autocomplete="off">
                    <br>
                    <label class="labelfuncio">RG:</label>
                    <input name="CNPJ" type="text" class="cadfuncionario" id="RG" placeholder="RG" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Endereço</label>
                    <input name="Endereço" type="text" class="cadfuncionario" id="Endereço" placeholder="Endereço" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Complemento</label>
                    <input name="Complemento" type="text" class="cadfuncionario" id="Complemento" placeholder="Complemento" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Bairro</label>
                    <input name="Bairro" type="text" class="cadfuncionario" id="Bairro" placeholder="Bairro" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Cep</label>
                    <input name="Cep" type="text" class="cadfuncionario" id="Cep" placeholder="Cep" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Cidade</label>
                    <input name="Cidade" type="text" class="cadfuncionario" id="Cidade" placeholder="Cidade" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Estado</label>
                    <input name="Estado" type="text" class="cadfuncionario" id="Estado" placeholder="Estado" autocomplete="off">
                    <br>
                    <label class="labelfuncio">UF</label>
                    <input name="UF" type="text" class="cadfuncionario" id="UF" placeholder="UF" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Celular</label>
                    <input name="Fone1" type="text" class="cadfuncionario" id="Celular" placeholder="Fone 1" autocomplete="off">
                    <br>
                    <label class="labelfuncio">Email</label>
                    <input name="email" type="email" class="cadfuncionario" id="E-mail" placeholder="Seu E-mail" autocomplete="off">
                    <br>
                    <button onclick="" class="btncadfuncisalva">Salvar</button>
                    <button onclick="cadfuncios()" class="btncadfunsair">Sair</button>
            </div>
        </div>
        <!-- **************************** cadastro de Produto ********************************** -->       
        <div class="cadprodu" id="cadprodutos"> 
            <div class="cadpro">
                <h2 class="modal_produ">Cadastro de Produtos</h2>
                    <br>
                    <label class="labelproduto">Produto</label>
                    <input name="nome" type="text" class="cadproduto" id="produto" placeholder="Nome" autocomplete="off">
                    <br>
                    <label class="labelproduto">Modelo</label>
                    <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Data" autocomplete="off">
                    <br>
                    <label class="labelproduto">Cor</label>
                    <input name="idade" type="text" class="cadproduto" id="cor" placeholder="Idade" autocomplete="off">
                    <br>
                    <label class="labelproduto">Tamanho</label>
                    <input name="dia" type="text" class="cadproduto" id="tamanho" placeholder="Dia" autocomplete="off">
                    <br>
                    <button onclick="" class="btncadprodusalva">Salvar</button>
                    <button onclick="cadprodu()" class="btncadprodusair">Sair</button>
            </div>
        </div>
        <!-- **************************** cadastro de Usuario ********************************** -->
        <div class="cadusuari" id="cadusuario"> 
            <div class="cadusuar">
                <h2 class="modal_usuario">Cadastro de Usuário</h2>
                    <br>
                    <label class="labelproduto">Usuário:</label>
                    <input name="idade" type="text" class="cadproduto" id="cor" placeholder="Usuário" autocomplete="off">
                    <br>
                    <label class="labelproduto">Senha:</label>
                    <input name="dia" type="text" class="cadproduto" id="tamanho" placeholder="Senha" autocomplete="off">
                    <br>
                    <button onclick="" class="btncadusuasalva">Salvar</button>
                    <button onclick="cadusuari()" class="btncadusuasair">Sair</button>
            </div>
        </div>
        <!-- **************************** aqui fecha a coluna de cadastro geral e 
                            começa a coluna de estoque geral        ********************************** -->         
        <!-- **************************** estoque entrada de peca ********************************** -->
        <div class="cadpeca" id="cadpecas"> 
            <div class="cadpec">
                <h2 class="modal_cadpeca">Cadastro de Peças</h2>
                <label class="labelproduto">Produto</label>&nbsp;
                <input name="nome" type="text" class="cadproduto" id="produto" placeholder="Produto" autocomplete="off">
                <br>
                <label class="labelproduto">Modelo</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Modelo" autocomplete="off">
                <br>
                <label class="labelproduto">Cor</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Cor" autocomplete="off">
                <br>
                <label class="labelproduto">Tamanho</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Tamanho" autocomplete="off">
                <br>
                <label class="labelproduto">Quantidade</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Quantidade" autocomplete="off">
                <br>
                <label class="labelproduto">Valor Unit.</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Valor Unit." autocomplete="off">
                <br>
                    <button onclick="" class="btncadpecasalva">Salvar</button>
                    <button onclick="cadusuari()" class="btncadpecasair">Sair</button>
            </div>
        </div>
                <!-- **************************** compemento do modal estoque ********************************** -->
         <div class="cadpecavalor" id="cadpecas"> 
            <div class="cadpecvalo">
                <h2 class="modal_cadpecaval">Cadastro de Peças</h2>
                <label class="labelproduto">Produto</label>&nbsp;
                <input name="nome" type="text" class="cadproduto" id="produto" placeholder="Produto" autocomplete="off">
                <br>
                <label class="labelproduto">Modelo</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Modelo" autocomplete="off">
                <br>
                <label class="labelproduto">Cor</label>&nbsp;
                <input name="Fantasia" type="text" class="cadproduto" id="modelo" placeholder="Cor" autocomplete="off">
                <br>
            </div>
        </div>
        
        
        <!-- **************************** estoque saida ********************************** -->
      <!--  <div class="modalA2" id=""> 
            <div class="modal-conte">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <p>aqui vamos fazer um teste               
                    </p>
                    <br>
                    <button onclick="hideModalA2()" >Fechar</button>
            </div>
        </div>
        <!-- **************************** estoque refugo ********************************** -->
      <!--  <div class="modalA2" id=""> 
            <div class="modal-conte">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <p>aqui vamos fazer um teste               
                    </p>
                    <br>
                    <button onclick="hideModalA2()" >Fechar</button>
            </div>
        </div>
        <!-- **************************** estoque retorno ********************************** -->
      <!--  <div class="modalA2" id=""> 
            <div class="modal-conte">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <p>aqui vamos fazer um teste               
                    </p>
                    <br>
                    <button onclick="hideModalA2()" >Fechar</button>
            </div>
        </div>
        <!-- **************************** estoque fornecedor ********************************** -->
      <!--  <div class="modalA2" id=""> 
            <div class="modal-conte">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <p>aqui vamos fazer um teste               
                    </p>
                    <br>
                    <button onclick="hideModalA2()" >Fechar</button>
            </div>
        </div>
        <!-- **************************** estoque saida ********************************** -->
     <!--   <div class="modalA2" id=""> 
            <div class="modal-conte">
                <h2 class="modal_title">Cadastro de Cliente</h2>
                    <p>aqui vamos fazer um teste               
                    </p>
                    <br>
                    <button onclick="hideModalA2()" >Fechar</button>
            </div>
        </div> -->
</body>

<script src="js/fun.js"></script>
</html>
