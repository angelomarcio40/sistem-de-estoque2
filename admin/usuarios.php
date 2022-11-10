<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashvoard</title>
    <link rel="sytelsheet" href="../css/style.css">
</head>
<body>
    <main class="admin-corpo">
        <h2>Dashboard</h2>

        <div class="div-usuarios">
            <div class="tabs">
                <div id="aba-cadstro" onclick="abaCadastro()">
                    <p class="titulo-texto">Cadastro de Usuários</p>
                </div>
                <div id="aba-listagem" onclick="abaListagem">
                    <p class="titulo-texto">Listagem</p>
                </div>
            </div>

            <form id="form-clientes">
                <div class="grid-clientes">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>

                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone">
                    </div>
                    <div>
                        <label for="cpf"></label>
                        <input type="text" name="cpf" id="cpf">
                    </div>

                    <div>
                        <label for="data_nascimento">Data Nascimento</label>
                        <input type="date" name="data_nascimento" id="data_nascimento">
                    </div>

                    <div>
                        <label for="tipo">Tipo</label>
                        <select nmame="tipo" id="tipo">
                            <option value=""disable select>Selecione...</option>
                        </select>
                    </div>

                    <div>
                        <label for="cep">CEP</label>
                        <div class="div-cep">
                            <input class="input-cep" type="text" name="cep" id="cep">
                            <button class="btn-cep" type="button" onclick="consultaCEP()"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <div>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" id="rua">
                        </div>

                        <div>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro">
                        </div>

                        <div>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade">
                        </div>

                        <div>
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado">
                                <option value="" disabled select>Aguarde...</option>
                                <option value="SP">SP</option>
                                <opiton value="RJ">RJ</opiton>
                                <option value="MG">MG</option>
                            </select>
                        </div>

                        <div>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento">
                        </div>
                    </div>

                    <button class="btn-cadastrar" type="button" onclick="addUsuarios()">Cadastrar</button>

                </div>
            </form>

            <div id="div-listagem">
                <h4>Listagem de produtos</h4>

                <form id="form-listagem">
                    <div>
                        <label for="">Pesquisa de Produtos</label>
                        <div class="div-produtos">
                            <input class="input-produtos" type="text" name="pesquisar" id="pesquisar">
                            <button class="btn-produtos" type="button" onclick="pesquisarProdutos()"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>

                <div id="resultado-listagem">

                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://kit.fontawesome.com/d1a9a58100.js" crossorigin="anonymous"></script>

</html>