
<?php
    $sql ="SELECT * FROM cadastro WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<div class="modal-container">
            <div class="modal">
            <h1>Editar</h1>
                <img src="brasao.png" alt="brasao" class="logo">
                <form class="catalogar" action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row->id;?>" >

                    <label for="nome">Nome do Software: <span style="color: rgb(255, 0, 0);"> *</span> </label>
                    <input type="text" id="nome" name="nome" required value="<?php print $row->nome;?>" class="form-control">
                    <br><br>

                    <label for="versao">Versão:</label>
                    <input type="text" id="versao" name="versao" value="<?php print $row->versao;?>" class="form-control">
                    <br><br>

                    <label for="descricao">Descrição: <span style="color: rgb(255, 0, 0);"> *</span> </label>
                    <textarea id="descricao" name="descricao" required><?php echo $row->descricao; ?></textarea>
                    <br><br>

                    <label for="categoria">Selecione uma Categoria: <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="categoria" required name="seleccat" class="form-control">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="assistencia_farmacêutica">Assistência Farmacêutica</option>
                        <option value="atencao_especializada">Atenção Especializada</option>
                        <option value="atencao_hospitalar">Atenção Hospitalar</option>
                        <option value="doacao_orgaos_sangue_e_transplante">Doação de órgãos, sangue e transplante</option>
                        <option value="educacional">Educacional</option>
                        <option value="gerencial">Gerencial</option>
                        <option value="informatica">Informática</option>
                        <option value="judicializacao">Judicialização</option>
                        <option value="logistico">Logístico</option>
                        <option value="outros">Outros</option>
                        <option value="prontuario_eletronico">Prontuário Eletrônico</option>
                        <option value="regulacao">Regulação</option>
                        <option value="telessaude">Telessaúde</option>
                        <option value="vigilancia_ambiental">Vigilância Ambiental</option>
                        <option value="vigilancia_epidemiologica">Vigilância Epidemiológica</option>
                        <option value="vigilancia_laboratorial">Vigilância Laboratorial</option>
                        <option value="vigilicia_sanitaria">Vigilância Sanitária</option>
                    </select> <br><br>

                    <label for="finalidade">Finalidade: <span style="color: rgb(255, 0, 0) ;"> *</span></label>
                    <input type="text" id="finalidade" name="finalidade" required value="<?php print $row->finalidade;?>" class="form-control">
                    <br><br>

                    <label for="info">Principais Informações Armazenadas: <span style="color: rgb(255, 0, 0) ;">*</span></label>
                    <textarea id="info" name="info" required class="form-control"><?php print $row->info;?></textarea>
                    <br><br>

                     <label for="func">Lista de Funcionalidades: <span style="color: rgb(255, 0, 0) ;" > *</span></label>
                    <textarea id="func" name="func" required class="form-control"><?php print $row->func;?></textarea>
                    <br><br>

                    <label for="acessaWeb">Acessa via Web? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="radio" id="simAcessaWeb" name="acessaWeb" value="Sim" required>Sim
                    <input type="radio" id="naoAcessaWeb" name="acessaWeb" value="Não" required>Não
                    <br><br>

                    <label for="informacaoSigilosa">Possui Informação Sigilosa? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="radio" id="simInfoSigilosa" name="informacaoSigilosa" value="Sim" required onclick="mostrarCampoSigiloso()" >Sim
                    <input type="radio" id="naoInfoSigilosa" name="informacaoSigilosa" value="Não" required>Não
                    <br><br>

                    <div id="campoInfoSigilosa">
                        <label for="qualInfoSigilosa">Qual Informação Sigilosa? <span style="color: rgb(255, 0, 0);"> *</span></label>
                        <input type="text" id="qualInfoSigilosa" name="qualInfoSigilosa" required value="<?php print $row->qualinfosig;?>" class="form-control">
                    </div>
                    <br><br>

                    <label for="senha_exclusiva">Possui Senha Exclusiva para Consulta? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="senha_exclusiva" required name="senhaexclusiva">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="manual_disponivel">Existe Manual ou Curso Disponível? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="manual_disponivel" required name="manual">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="plataforma_desenvolvimento">Plataforma de Desenvolvimento:</label>
                    <input type="text" id="plataformadesenvolvimento" name="plataformadesenvolvimento" value="<?php print $row->plataformadedesenvolvimento;?>"class="form-control">
                    <br><br>

                    <label for="plataforma_execucao">Plataforma de Execução:</label>
                    <input type="text" id="plataforma_execucao" name="plataformaexecucao" value="<?php print $row->plataformadeexecucao;?>"class="form-control">
                    <br><br>

                    <label for="tempo_utilizacao">Tempo de Utilização:</label>
                    <input type="text" id="tempo_utilizacao" name="tempoutilizacao">
                    <br><br>

                    <label for="proprio_ou_contratado">Próprio ou Contratado? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="proprio_ou_contratado" name="propriooucontrato" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Próprio</option>
                        <option value="nao">Contratado</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="tipo_contratacao">Tipo de Contratação ou Aquisição:</label>
                    <input type="text" id="tipo_contratacao" name="tipocontratacao">
                    <br><br>

                    <label for="fabricante">Fabricante (Nome/CNPJ):</label>
                    <input type="text" id="fabricante" name="fabricante">
                    <br><br>

                    <label for="custo_licenciamento">Custo Anual de Licenciamento:</label>
                    <input type="text" id="custolicenciamento" name="custolicenciamento">
                    <br><br>

                    <label for="numero_licencas">Número de Licenças:</label>
                    <input type="number" name="numerolicencas" id="numerolicencas">
                    <br><br>

                    <label for="numero_contrato_e_aditivos">Número do Contrato e dos Aditivos: </label>
                    <input type="number" name="numerocontratoeaditivos" id="numerocontratoeaditivos">
                    <br><br>

                    <label for="usuario_final">Usuário Final: <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="usuario_final" name="usuariofinal" required>
                    <br><br>

                    <label for="desenvolvedor">Desenvolvedor:</label>
                    <input type="text" id="desenvolvedor" name="desenvolvedor">
                    <br><br>

                    <label for="estado_proprietario">O Estado é proprietário da solução? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="estado_proprietario" name="estadoproprietario" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="solucao_compartilhada">A solução é compartilhada com outros órgãos/instituições? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="solucao_compartilhada" name="soluçaocompartilhada" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="soluçao">A solução está atualmente em uso? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="soluçao" name="solucaoemuso" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="tempo_de_uso">Há quanto tempo a solução é utilizada (anos)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="number" id="tempo_de_uso" name="tempodeuso" required>
                    <br><br>

                    <label for="como_acontece_entrada_de_dados">Como se dá a entrada de dados?</label>
                    <input type="text" id="como_acontece_entrada_de_dados" name="comoaconteceentradadedados">
                    <br><br>

                    <label for="volume_suportado">Qual o volume suportado pela solução hoje? </label>
                    <input type="text" name="volumesuportado" id="volumesuportado">
                    <br><br>

                    <label for="suporte_de_atualizacao">Existe suporte de atualização? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="suportedeatualizacao" id="suporte_de_atualizacao" required> 
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="qm_realiza_manutencao">Quem realiza a manutenção e atualização da solução?</label>
                    <input type="text" name="qmrealizamanutencao" id="qm_realiza_manutencao">
                    <br><br>

                    <label for="licenca_codigo">Licença do Código:</label>
                    <input type="text" name="licencacodigo" id="licenca_codigo">
                    <br><br>

                    <label for="interfaceAoPainel">Existe interface pública que permite acesso aos dados(painel)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="radio" id="simInterfaceAoPainel" name="interfaceAoPainel" value="Sim" required onclick="mostrarCampoInterfaceAoPainel()">Sim
                    <input type="radio" id="naoInterfaceAoPainel" name="interfaceAoPainel" value="Não" required>Não
                    <br><br>

                    <div id="qualInterfaceAoPainel">
                    <label for="qualInterfaceAoPainel">Qual? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="qualInterfaceAoPainel" name="qualInterfaceAoPainel" required></div>
                    <br><br>

                    <label for="aplicacoes_api">Permite API (Aplicações)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="aplicacoesapi" id="aplicacoes_api" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="permite_plugins">Permite Plugins (Extensões)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="permiteplugins" id="permite_plugins" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não Sei</option>
                    </select>
                    <br><br>

                    <label for="observacoes">Observações: <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="observacoes" name="observacoes" required>
                    <br><br>
                    
                    <button type="submit" class="btn">Cadastrar</button>
                </form>
            </div>
        </div>
        <script>
            function mostrarCampoSigiloso() {
                const campoInfoSigilosa = document.getElementById("campoInfoSigilosa")
                const qualInfoSigilosa = document.getElementById("qualInfoSigilosa")
                const simInfoSigilosa = document.getElementById("simInfoSigilosa")
                if (simInfoSigilosa.checked) {
                    campoInfoSigilosa.style.display = "block"
                    qualInfoSigilosa.required = true
                }
            }
            function ocultarCampoSigiloso() {
                const campoInfoSigilosa = document.getElementById("campoInfoSigilosa")
                const qualInfoSigilosa = document.getElementById("qualInfoSigilosa")
                const naoInfoSigilosa = document.getElementById("naoInfoSigilosa")
                if (naoInfoSigilosa.checked) {
                    campoInfoSigilosa.style.display = "none"
                    qualInfoSigilosa.required = false
                    qualInfoSigilosa.value = ""
                }
            }
            document.getElementById("simInfoSigilosa").addEventListener("click", mostrarCampoSigiloso)
            document.getElementById("naoInfoSigilosa").addEventListener("click", ocultarCampoSigiloso)
            function mostrarCampoInterfaceAoPainel() {
                const campoInterfaceAoPainel = document.getElementById("campoInterfaceAoPainel")
                const qualInterfaceAoPainel = document.getElementById("qualInterfaceAoPainel")
                const simInterfaceAoPainel = document.getElementById("simInterfaceAoPainel")
                if (simInterfaceAoPainel.checked) {
                    qualInterfaceAoPainel.style.display = "block"
                    qualInterfaceAoPainel.required = true
                }
            }
            function ocultarCampoInterfaceAoPainel() {
                const campoInterfaceAoPainel = document.getElementById("campoInterfaceAoPainel")
                const qualInterfaceAoPainel = document.getElementById("qualInterfaceAoPainel")
                const naoInterfaceAoPainel = document.getElementById("naoInterfaceAoPainel")
                if (naoInterfaceAoPainel.checked) {
                    qualInterfaceAoPainel.style.display = "none"
                    campoInterfaceAoPainel.required = false
                    qualInterfaceAoPainel.value = ""
                }
            }
            document.getElementById("simInterfaceAoPainel").addEventListener("click", mostrarCampoInterfaceAoPainel)
            document.getElementById("naoInterfaceAoPainel").addEventListener("click", ocultarCampoInterfaceAoPainel)
        </script>
        <style>
.container{
    background-color: #ffffff;
    margin-inline: initial;
    padding-bottom: 20px;
}
.logo{  
    display: block; 
    margin: 20px auto;
    max-width: 200px;
}
.button {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #3498db;
    text-decoration: none;
}
form{
    margin-top: 20px;
}

label{
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}
textarea{
    font-family: "Arial", Helvetica, sans-serif;  
}
input[type="text"],
textarea {
    width: 90%;
    padding: 15px;
    margin-bottom: 2px;
    border: 2px solid #ccc;
    border-radius: 10px;
    resize: none;
}
input[type="radio"] {
    margin-right: 5px;
}
#campoInfoSigilosa {
    display: none;
}
#btn{
    background-color: #3498db;
    color: #ffffff;
    border: none;
    margin-top: 10px;
    border-radius: 5px;  
    padding: 14px;
    
}
.catalogar{
    margin-left: 200px;
}
h1 { 
    margin-left: 630px;  
    font-size: 35px;  
    height: 30px;
}

h1{
    text-align: center;
    background-color: #3498db;
    color: #fff;
    padding: 18px;
    margin-left: 30px;
    margin-bottom: 50px;
    border-radius: 10px 10px 0 0;
}
.required:after {
    content:" *"; 
    color: red;
}
        </style>