<?php
    $sql = "SELECT * FROM   cadastro";
    $res = $conn->query($sql);
    $qtd = $res -> num_rows;

    if ($qtd > 0) {
        print "<table class='table'>";
            print"<tr>";
            print"<th>Nome</th>";
            print"<th>Versão</th>";
            print"<th>Descrição</th>";
            print"<th>Categoria</th>";
            print"<th>Finalidade</th>";
            print"<th>#</th>";
            print"<tr>";
        while ($row = $res -> fetch_object()){
            print"<tr>";
            print"<td>".$row->nome."</td>";
            print"<td>".$row->versao."</td>";
            print"<td>".$row->descricao."</td>";
            print"<td>".$row->categoria."</td>";
            print"<td>".$row->finalidade."</td>";
            print"<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn'>Excluir</button>
            </td>";
            print"<tr>";
        }
        print "</table>";
    }else {
        print"<p class='alert'>Não encontrou resultados!!!</p>";
    }
?>
<style>
.table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}
.table th {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}
.table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}
.table tr:nth-child(even) {
    background-color: #f2f2f2;
}
.table tr:hover {
    background-color: #ccc;
}
</style>