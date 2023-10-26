<?php
switch ($_REQUEST["acao"]){
    case 'cadastrar':   
        $nome = $_POST["nome"];
        $versao = $_POST["versao"];
        $descricao = $_POST["descricao"];
        $seleccat = $_POST["seleccat"];
        $finalidade = $_POST["finalidade"];
        $info = $_POST["info"];
        $func = $_POST["func"];
        $acessaWeb = $_POST["acessaWeb"];
        $informacaoSigilosa = $_POST["informacaoSigilosa"];
        $qualInfoSigilosa = $_POST["qualInfoSigilosa"];
        $senhaexclusiva = $_POST["senhaexclusiva"];
        $manual = $_POST["manual"];
        $plataformadesenvolvimento = $_POST["plataformadesenvolvimento"];
        $plataformaexecucao = $_POST["plataformaexecucao"];
        $tempoutilizacao = $_POST["tempoutilizacao"];
        $propriooucontrato = $_POST["propriooucontrato"];
        $tipocontratacao= $_POST["tipocontratacao"];
        $fabricante = $_POST["fabricante"];
        $custolicenciamento= $_POST["custolicenciamento"];
        $numerolicencas = $_POST["numerolicencas"];
        $numerocontratoeaditivos = $_POST["numerocontratoeaditivos"];
        $usuariofinal = $_POST["usuariofinal"];
        $desenvolvedor= $_POST["desenvolvedor"];
        $estadoproprietario = $_POST["estadoproprietario"];
        $soluçaocompartilhada = $_POST["soluçaocompartilhada"];
        $solucaoemuso= $_POST["solucaoemuso"];
        $tempodeuso = $_POST["tempodeuso"];
        $comoaconteceentradadedados = $_POST["comoaconteceentradadedados"];
        $volumesuportado = $_POST["volumesuportado"];
        $suportedeatualizacao= $_POST["suportedeatualizacao"];
        $qmrealizamanutencao = $_POST["qmrealizamanutencao"];
        $licencacodigo = $_POST["licencacodigo"];
        $interfaceAoPainel = $_POST["interfaceAoPainel"];
        $qualInterfaceAoPainel= $_POST["qualInterfaceAoPainel"];
        $aplicacoesapi = $_POST["aplicacoesapi"];
        $permiteplugins = $_POST["permiteplugins"];
        $observacoes = $_POST["observacoes"];

        $sql = "INSERT INTO cadastro (nome, versao, descricao, categoria,finalidade, info, func, acessaweb, possuinfosig, qualinfosig, senhaexclusiva, manuel,
        plataformadedesenvolvimento, plataformadeexecucao, tempodeutilizacao, propriooucontrato, tipodecontratacao, fabricante, custoanual, numerodelicencas, numerodecontrato, 
        usuariofinal, desenvolvedor, oestadoeproprietario, asoluçaoecompartilhada, asoluçaoestaemuso, quantotempoestaemuso, comosedaaentradadedados, qualovolumesuportado,
        exitesuportedeutilizacao, quemrealizaamanutencao, licençadocodigo, 	existeinterfacepublica, qual, permiteapi, permiteplugins, observacoes)
        VALUES ('{$nome}','{$versao}','{$descricao}','{$seleccat}','{$finalidade}','{$info}','{$func}','{$acessaWeb}','{$informacaoSigilosa}','{$qualInfoSigilosa}','{$senhaexclusiva}','{$manual}',
        '{$plataformadesenvolvimento}','{$plataformaexecucao}','{$tempoutilizacao}','{$propriooucontrato}','{$tipocontratacao}','{$fabricante}','{$custolicenciamento}','{$numerolicencas}',
        '{$numerocontratoeaditivos}','{$usuariofinal}','{$desenvolvedor}','{$estadoproprietario}','{$soluçaocompartilhada}','{$solucaoemuso}','{$tempodeuso}','{$comoaconteceentradadedados}',
        '{$volumesuportado}','{$suportedeatualizacao}','{$qmrealizamanutencao}','{$licencacodigo}','{$interfaceAoPainel}','{$qualInterfaceAoPainel}','{$aplicacoesapi}','{$permiteplugins}',
        '{$observacoes}')";

        $res = $conn->query($sql);
        if($res===true){
            print"<script>alert('Cadastrado com sucesso');</script>";
            print"<script>location.href='?page=consulta';</script>";
        }else{
            print"<script>alert('ERRO ao cadastrar');</script>";
            print"<script>location.href='?page=novo';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $versao = $_POST["versao"];
        $descricao = $_POST["descricao"];
        $seleccat = $_POST["seleccat"];
        $finalidade = $_POST["finalidade"];
        $info = $_POST["info"];
        $func = $_POST["func"];
        $acessaWeb = $_POST["acessaWeb"];
        $informacaoSigilosa = $_POST["informacaoSigilosa"];
        $qualInfoSigilosa = $_POST["qualInfoSigilosa"];
        $senhaexclusiva = $_POST["senhaexclusiva"];
        $manual = $_POST["manual"];
        $plataformadesenvolvimento = $_POST["plataformadesenvolvimento"];
        $plataformaexecucao = $_POST["plataformaexecucao"];
        $tempoutilizacao = $_POST["tempoutilizacao"];
        $propriooucontrato = $_POST["propriooucontrato"];
        $tipocontratacao= $_POST["tipocontratacao"];
        $fabricante = $_POST["fabricante"];
        $custolicenciamento= $_POST["custolicenciamento"];
        $numerolicencas = $_POST["numerolicencas"];
        $numerocontratoeaditivos = $_POST["numerocontratoeaditivos"];
        $usuariofinal = $_POST["usuariofinal"];
        $desenvolvedor= $_POST["desenvolvedor"];
        $estadoproprietario = $_POST["estadoproprietario"];
        $soluçaocompartilhada = $_POST["soluçaocompartilhada"];
        $solucaoemuso= $_POST["solucaoemuso"];
        $tempodeuso = $_POST["tempodeuso"];
        $comoaconteceentradadedados = $_POST["comoaconteceentradadedados"];
        $volumesuportado = $_POST["volumesuportado"];
        $suportedeatualizacao= $_POST["suportedeatualizacao"];
        $qmrealizamanutencao = $_POST["qmrealizamanutencao"];
        $licencacodigo = $_POST["licencacodigo"];
        $interfaceAoPainel = $_POST["interfaceAoPainel"];
        $qualInterfaceAoPainel= $_POST["qualInterfaceAoPainel"];
        $aplicacoesapi = $_POST["aplicacoesapi"];
        $permiteplugins = $_POST["permiteplugins"];
        $observacoes = $_POST["observacoes"];

        $sql = "UPDATE cadastro SET 
            nome='{$nome}', 
            versao='{$versao}', 
            descricao='{$descricao}', 
            categoria='{$seleccat}',
            finalidade='{$finalidade}', 
            info='{$info}', 
            func='{$func}', 
            acessaweb='{$acessaWeb}', 
            possuinfosig='{$informacaoSigilosa}', 
            qualinfosig='{$qualInfoSigilosa}',
            senhaexclusiva='{$senhaexclusiva}', 
            manuel='{$manual}',
            plataformadedesenvolvimento='{$plataformadesenvolvimento}', 
            plataformadeexecucao='{$tempoutilizacao}', 
            tempodeutilizacao='{$tempoutilizacao}', 
            propriooucontrato='{$propriooucontrato}', 
            tipodecontratacao='{$tipocontratacao}', 
            fabricante='{$fabricante}', 
            custoanual='{$custolicenciamento}', 
            numerodelicencas='{$numerolicencas}', 
            numerodecontrato='{$numerocontratoeaditivos}', 
            usuariofinal='{$usuariofinal}', 
            desenvolvedor='{$desenvolvedor}', 
            oestadoeproprietario='{$estadoproprietario}', 
            asoluçaoecompartilhada='{$soluçaocompartilhada}', 
            asoluçaoestaemuso='{$solucaoemuso}', 
            quantotempoestaemuso='{$tempodeuso}', 
            comosedaaentradadedados='{$comoaconteceentradadedados}', 
            qualovolumesuportado='{$volumesuportado}',
            exitesuportedeutilizacao='{$suportedeatualizacao}', 
            quemrealizaamanutencao='{$qmrealizamanutencao}', 
            licençadocodigo='{$licencacodigo}', 	
            existeinterfacepublica='{$interfaceAoPainel}', 
            qual='{$qualInterfaceAoPainel}', 
            permiteapi='{$aplicacoesapi}', 
            permiteplugins='{$permiteplugins}', 
            observacoes='{$observacoes}'

        WHERE 
        id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res===true){
            print"<script>alert('Editado com sucesso');</script>";
            print"<script>location.href='?page=consulta';</script>";
        }else{
            print"<script>alert('ERRO ao Editar');</script>";
            print"<script>location.href='page=novo';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res===true){
            print"<script>alert('Excluido com sucesso');</script>";
            print"<script>location.href='?page=consulta';</script>";
        }else{
            print"<script>alert('ERRO ao Excluir');</script>";
            print"<script>location.href='page=novo';</script>";
        }  
        break;
}