<div class="card">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de patrimônio</th>
                <th>Nome do item</th>
                <th>tipo de item</th>
                <th>Descrição do Item </th>
                <th>Marca do Item </th>
                <th>Situação do Item</th>
                <th>Data da aquisição</th>
                <th>Número de série </th>
                <th>Valor do Item</th>
                <th>Data da Compra</th>
                <th>Data da Garantia</th>
                <th>Setor</th>
                <th>Observação </th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM tb_bens WHERE tb_company = 2");
                while ($row = mysqli_fetch_assoc($sql)) { ?>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['num_patrimonio']; ?></td>
                    <td><?= $row['name_item']; ?></td>
                    <td><?= $row['tb_item']; ?></td>
                    <td><?= $row['desc_item']; ?></td>
                    <td><?= $row['marca_item']; ?></td>
                    <td><?= $row['tb_situacao']; ?></td>
                    <td><?= $row['date_aquisi']; ?></td>
                    <td><?= $row['num_serie']; ?></td>
                    <td><?= $row['value_item']; ?></td>
                    <td><?= $row['date_comp']; ?></td>
                    <td><?= $row['date_garant']; ?></td>
                    <td><?= $row['tb_setor ']; ?></td>
                    <td><?= $row['obs ']; ?></td>
            </tr>
        <?php  } ?>
        </tbody>
    </table>
</div>