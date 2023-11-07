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
                        <option value="Assistência Farmacêutica"<?php if ($row->categoria == "Assistência Farmacêutica") echo "selected"; ?>>Assistência Farmacêutica</option>
                        <option value="Atenção Especializada"<?php if ($row->categoria == "Atenção Especializada") echo "selected"; ?>>Atenção Especializada</option>
                        <option value="Atenção Hospitalar"<?php if ($row->categoria == "Atenção Hospitalar") echo "selected"; ?>>Atenção Hospitalar</option>
                        <option value="Doação de órgãos, sangue e transplante"  
                        <?php if ($row->categoria == "Doação de órgãos, sangue e transplante") echo "selected"; ?>>Doação de órgãos, sangue e transplante</option>
                        <option value="Educacional"  <?php if ($row->categoria == "Educacional") echo "selected"; ?>>Educacional</option>
                        <option value="Gerencial"  <?php if ($row->categoria == "Gerencial") echo "selected"; ?>>Gerencial</option>
                        <option value="Informática"  <?php if ($row->categoria == "Informática") echo "selected"; ?>>Informática</option>
                        <option value="Judicialização"  <?php if ($row->categoria == "Judicialização") echo "selected"; ?>>Judicialização</option>
                        <option value="Logístico"  <?php if ($row->categoria == "Logístico") echo "selected"; ?>>Logístico</option>
                        <option value="Outros"  <?php if ($row->categoria == "Outros") echo "selected"; ?>>Outros</option>
                        <option value="Prontuário Eletrônico"  <?php if ($row->categoria == "Prontuário Eletrônico") echo "selected"; ?>>Prontuário Eletrônico</option>
                        <option value="Regulação"  <?php if ($row->categoria == "Regulação") echo "selected"; ?>>Regulação</option>
                        <option value="Telessaúde"  <?php if ($row->categoria == "Telessaúde") echo "selected"; ?>>Telessaúde</option>
                        <option value="Vigilância Ambiental"  <?php if ($row->categoria == "Vigilância Ambiental") echo "selected"; ?>>Vigilância Ambiental</option>
                        <option value="Vigilância Epidemiológica"  <?php if ($row->categoria == "Vigilância Epidemiológica") echo "selected"; ?>>Vigilância Epidemiológica</option>
                        <option value="Vigilância Laboratorial"  <?php if ($row->categoria == "Vigilância Laboratorial") echo "selected"; ?>>Vigilância Laboratorial</option>
                        <option value="Vigilância Sanitária"  <?php if ($row->categoria== "Vigilância Sanitária") echo "selected"; ?>>Vigilância Sanitária</option>
                        </select><br><br>

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
                    <input type="radio" id="simAcessaWeb" name="acessaWeb" value="Sim" <?php if ($row->acessaweb == "Sim") echo "checked"; ?> required>Sim
                    <input type="radio" id="naoAcessaWeb" name="acessaWeb" value="Não" <?php if ($row->acessaweb == "Não") echo "checked"; ?> required>Não
                    <br><br>

                    <label for="informacaoSigilosa">Possui Informação Sigilosa? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="radio" id="simInfoSigilosa" name="informacaoSigilosa" value="Sim" <?php if ($row->possuinfosig == "Sim") echo "checked"; ?> required onclick="mostrarCampoSigiloso()" >Sim
                    <input type="radio" id="naoInfoSigilosa" name="informacaoSigilosa" value="Não" <?php if ($row->possuinfosig == "Não") echo "checked"; ?> required>Não
                    <br><br>
                    <div id="campoInfoSigilosa">
                        <label for="qualInfoSigilosa">Qual Informação Sigilosa? <span style="color: rgb(255, 0, 0);"> *</span></label>
                        <input type="text" id="qualInfoSigilosa" name="qualInfoSigilosa" required value="<?php print $row->qualinfosig;?>" class="form-control">
                    </div>
                    <br><br>

                    <label for="senha_exclusiva">Possui Senha Exclusiva para Consulta? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="senha_exclusiva" required name="senhaexclusiva">
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->senhaexclusiva == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->senhaexclusiva == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->senhaexclusiva == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="manual_disponivel">Existe Manual ou Curso Disponível? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="manual_disponivel" required name="manual">
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->manuel == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->manuel == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->manuel == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="plataforma_desenvolvimento">Plataforma de Desenvolvimento:</label>
                    <input type="text" id="plataformadesenvolvimento" name="plataformadesenvolvimento" value="<?php print $row->plataformadedesenvolvimento;?>"class="form-control">
                    <br><br>

                    <label for="plataforma_execucao">Plataforma de Execução:</label>
                    <input type="text" id="plataforma_execucao" name="plataformaexecucao" value="<?php print $row->plataformadeexecucao;?>"class="form-control">
                    <br><br>

                    <label for="tempo_utilizacao">Tempo de Utilização:</label>
                    <input type="text" id="tempo_utilizacao" name="tempoutilizacao" value= "<?php print $row->tempodeutilizacao;?>" class="form-control">
                    <br><br>

                    <label for="proprio_ou_contratado">Próprio ou Contratado? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="proprio_ou_contratado" name="propriooucontrato" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="Próprio" <?php if ($row->propriooucontrato == "Próprio") echo "selected"; ?>>Próprio</option>
                        <option value="Contratado" <?php if ($row->propriooucontrato == "Contratado") echo "selected"; ?>>Contratado</option>
                        <option value="Não Sei" <?php if ($row->propriooucontrato == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="tipo_contratacao">Tipo de Contratação ou Aquisição:</label>
                    <input type="text" id="tipo_contratacao" name="tipocontratacao" value="<?php print $row->tipodecontratacao;?>"class="form-control">
                    <br><br>

                    <label for="fabricante">Fabricante (Nome/CNPJ):</label>
                    <input type="text" id="fabricante" name="fabricante" value="<?php print $row->fabricante;?>"class="form-control">
                    <br><br>

                    <label for="custo_licenciamento">Custo Anual de Licenciamento:</label>
                    <input type="text" id="custolicenciamento" name="custolicenciamento" value="<?php print $row->custoanual;?>"class="form-control">
                    <br><br>

                    <label for="numero_licencas">Número de Licenças:</label>
                    <input type="number" name="numerolicencas" id="numerolicencas" value="<?php print $row->numerodelicencas;?>"class="form-control">
                    <br><br>

                    <label for="numero_contrato_e_aditivos">Número do Contrato e dos Aditivos: </label>
                    <input type="number" name="numerocontratoeaditivos" id="numerocontratoeaditivos" value="<?php print $row->numerodecontrato;?>"class="form-control">
                    <br><br>

                    <label for="usuario_final">Usuário Final: <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="usuario_final" name="usuariofinal" required value="<?php print $row->usuariofinal;?>"class="form-control">
                    <br><br>

                    <label for="desenvolvedor">Desenvolvedor:</label>
                    <input type="text" id="desenvolvedor" name="desenvolvedor" value="<?php print $row->desenvolvedor;?>"class="form-control">
                    <br><br>

                    <label for="estado_proprietario">O Estado é proprietário da solução? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="estado_proprietario" name="estadoproprietario" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->oestadoeproprietario == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->oestadoeproprietario == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->oestadoeproprietario == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="solucao_compartilhada">A solução é compartilhada com outros órgãos/instituições? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="solucao_compartilhada" name="soluçaocompartilhada" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->asoluçaoecompartilhada == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->asoluçaoecompartilhada == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->asoluçaoecompartilhada == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="soluçao">A solução está atualmente em uso? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select id="soluçao" name="solucaoemuso" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->asoluçaoestaemuso == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->asoluçaoestaemuso == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->asoluçaoestaemuso == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="tempo_de_uso">Há quanto tempo a solução é utilizada (anos)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="number" id="tempo_de_uso" name="tempodeuso" required value="<?php print $row->quantotempoestaemuso;?>"class="form-control">
                    <br><br>

                    <label for="como_acontece_entrada_de_dados">Como se dá a entrada de dados?</label>
                    <input type="text" id="como_acontece_entrada_de_dados" name="comoaconteceentradadedados" value="<?php print $row->comosedaaentradadedados;?>"class="form-control">
                    <br><br>

                    <label for="volume_suportado">Qual o volume suportado pela solução hoje? </label>
                    <input type="text" name="volumesuportado" id="volumesuportado" value="<?php print $row->qualovolumesuportado;?>"class="form-control">
                    <br><br>

                    <label for="suporte_de_atualizacao">Existe suporte de atualização? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="suportedeatualizacao" id="suporte_de_atualizacao" required> 
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->exitesuportedeutilizacao == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->exitesuportedeutilizacao == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->exitesuportedeutilizacao == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="qm_realiza_manutencao">Quem realiza a manutenção e atualização da solução?</label>
                    <input type="text" name="qmrealizamanutencao" id="qm_realiza_manutencao" value="<?php print $row->quemrealizaamanutencao;?>"class="form-control">
                    <br><br>

                    <label for="licenca_codigo">Licença do Código:</label>
                    <input type="text" name="licencacodigo" id="licenca_codigo" value="<?php print $row->licençadocodigo;?>"class="form-control">
                    <br><br>

                    <label for="interfaceAoPainel">Existe interface pública que permite acesso aos dados(painel)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="radio" id="simInterfaceAoPainel" name="interfaceAoPainel" value="Sim" <?php if ($row->existeinterfacepublica == "Sim") echo "checked"; ?> required onclick="mostrarCampoInterfaceAoPainel()">Sim
                    <input type="radio" id="naoInterfaceAoPainel" name="interfaceAoPainel" value="Não" <?php if ($row->existeinterfacepublica == "Não") echo "checked"; ?> required>Não
                    <br><br>

                    <div id="qualInterfaceAoPainel">
                    <label for="qualInterfaceAoPainel">Qual? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="qualInterfaceAoPainel" name="qualInterfaceAoPainel" value="<?php print $row->qual;?>"class="form-control"></div>
                    <br><br>

                    <label for="aplicacoes_api">Permite API (Aplicações)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="aplicacoesapi" id="aplicacoes_api" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->permiteapi == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->permiteapi == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->permiteapi == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="permite_plugins">Permite Plugins (Extensões)? <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <select name="permiteplugins" id="permite_plugins" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="Sim" <?php if ($row->permiteplugins == "Sim") echo "selected"; ?>>Sim</option>
                    <option value="Não" <?php if ($row->permiteplugins == "Não") echo "selected"; ?>>Não</option>
                    <option value="Não Sei" <?php if ($row->permiteplugins == "Não Sei") echo "selected"; ?>>Não Sei</option>
                    </select>
                    <br><br>

                    <label for="observacoes">Observações: <span style="color: rgb(255, 0, 0);"> *</span></label>
                    <input type="text" id="observacoes" name="observacoes" required value="<?php print $row->observacoes;?>"class="form-control">
                    <br><br>
                    
                    <button type="submit" class="btn">Salvar</button>
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
                    campoInterfaceAoPainel.required= false
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
.btn{
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