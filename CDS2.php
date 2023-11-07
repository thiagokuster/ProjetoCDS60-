<div id="caixa_pesquisar" class="caixa azul">
    <input name="busca" id="barrapesquisar" placeholder="Pesquisar...">
    <button id="excel" onclick="">Exportar para Excel</button>
</div>
<div id="divtable">
    <table class="list">
        <tr>
            <thead>
                <th>Nome</th>
                <th>Versão</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Finalidade</th>
                <th>Principais informações</th>
                <th>#</th>
            </thead>
            <tbody>
            </tbody>
        </tr>
<?php
        $sql = "SELECT * FROM cadastro";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
        if ($qtd > 0) {
            while ($row = $res->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $row->nome . "</td>";
                echo "<td>" . $row->versao . "</td>";
                echo "<td>" . $row->descricao . "</td>";
                echo "<td>" . $row->categoria . "</td>";
                echo "<td>" . $row->finalidade . "</td>";
                echo "<td>" . $row->info . "</td>";
                echo "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn'>Editar</button>
                    <button onclick=\"location.href='?page=visualisar&id=" . $row->id . "'\" class='btn'>visualizar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn'>Excluir</button>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<p class='alert'>Não encontrou resultados!!!</p>";
        }
?>
    </table>
</div>
                <div class="pagination">
                    <button id="previousPage">Anterior</button>
                    <span id="currentPage">Página 1 de 1</span>
                    <button id="nextPage">Próximo</button>
                </div>
<style>
.caixa {
    display: flex;
    align-items: center;
    padding: 10px;
    border-radius: 5px;
    width:115%;
}
#excel{
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    border: solid;
    border-color: black;
    margin: 5px;
    cursor: pointer;
    padding: 5px 10px;
    width: 20%;
}
.azul {
    background-color: #3498db;
    color: white;
    cursor: pointer;
}
#barrapesquisar {
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    width: 100%;
    margin-left: 10px;
}
.list {
    border-collapse: collapse;
    width: 120%;
}
.list th,
.list td {
    padding: 10px;
    text-align: center;
}
.list td {
    border: 2px solid #f8f8f8;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
    max-width: 200px;
    white-space: pre-wrap;
}
.list th {
    border: 2px solid #cccccc2d;
    background-color: #3498db;
    color: white;
}
.list tr:nth-child(even) {
    background-color: #fadcf234;
}
.list tr:hover td {
    background-color: #cce0f7;
}
.btn {
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
}
.btn:hover {
    background-color: #2980b9;
}
.pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}

.pagination button {
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    padding: 5px 10px;
}

.pagination button:hover {
    background-color: #2980b9;
}
</style>
<script>

const barrapesquisar = document.getElementById('barrapesquisar');
const divtable = document.getElementById('divtable');
const table = document.querySelector('.list');
const rows = table.querySelectorAll('tbody tr');
const itemsPerPage = 21;
let currentPage = 1;


function pesquisarDados() {
    const termoPesquisa = barrapesquisar.value.trim().toLowerCase();

    rows.forEach(row => {
        const dataCells = row.querySelectorAll('td');
        let corresponde = false;

        dataCells.forEach(cell => {
            if (cell.textContent.toLowerCase().includes(termoPesquisa)) {
                corresponde = true;
            }
        });

        if (corresponde) {
            row.style.display = '';
            divtable.style.display = 'block';
        } else {
            row.style.display = 'none';
            divtable.style.display = 'block';
        }
    });
}
barrapesquisar.addEventListener('input', pesquisarDados);

function updateTable() {
    const tableRows = document.querySelectorAll('.list tbody tr');
    const totalPages = Math.ceil(tableRows.length / itemsPerPage);
    tableRows.forEach((row, index) => {
        if (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
    const currentPageElement = document.getElementById('currentPage');
    if (currentPageElement) {
        currentPageElement.textContent = `Página ${currentPage} de ${totalPages}`;
    }
}
document.getElementById('previousPage').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        updateTable();
    }
});
document.getElementById('nextPage').addEventListener('click', () => {
    const tableRows = document.querySelectorAll('.list tbody tr');
    const totalPages = Math.ceil(tableRows.length / itemsPerPage)
    if (currentPage < totalPages) {
        currentPage++;
        updateTable();
    }
});
updateTable();
</script>