<form id="formBem" method="POST">
    <div class="row">
        <div class="col-5">
            <label for="text">Número de Patrimonio:</label>
            <input type="number" class="form-control" placeholder="Número de patrimônio" id="patrimonio" name="patrimonio">
        </div>
        <div class="col-5">
            <label for="text">Nome do Item:</label>
            <input type="text" class="form-control" placeholder="Nome do item" id="item" name="item">
        </div>
    </div>

    <div class="row">
        <div class="col-5">
            <div class="form-group ">
                <label for="text">Tipo de item:</label>
                <select class="form-control form-control-lg" name="tp_item">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_item WHERE tb_company = 2");
                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <option value="<?= $row['id'] ?>"> <?= $row['name'] ?></option>
                    <?php }; ?>
                </select>
            </div>
        </div>
        <div class="col-5">
            <label for="text">Marca do Item:</label>
            <input type="text" class="form-control" placeholder="Marca do Item" id="marc_item" name="marc_item">
        </div>

    </div>

    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label for="text">Situação Item:</label>
                <select class="form-control form-control-lg" name="situa_item">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_situacao WHERE tb_company = 2");
                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <option value="<?= $row['id'] ?>"> <?= $row['name'] ?></option>
                    <?php }; ?>
                </select>
            </div>
        </div>

        <div class="col-5">
            <label for="date">Data de Aquisição:</label>
            <input type="date" class="form-control" placeholder="Data de Aquisição: " id="date_aqui" name="date_aqui">
        </div>

    </div>

    <div class="row">
        <div class="col-5">
            <label for="text">Número de Série:</label>
            <input type="number" class="form-control" placeholder="Número de Série: " id="num_serie" name="num_serie">
        </div>

        <div class="col-5">
            <label for="text">Valor do Item:</label>
            <input type="number" class="form-control" placeholder="Valor do item: " id="preco_item" name="preco_item">
        </div>
    </div>

    <div class="row">
        <div class="col-5">
            <label for="text">Data Compra:</label>
            <input type="date" class="form-control" id="date_comp" name="date_comp">
        </div>
        <div class="col-5">
            <label for="text">Data Garantia:</label>
            <input type="date" class="form-control" id="date_garant" name="date_garant">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="text">Setor:</label>
                <select class="form-control form-control-lg" name="setor">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_setor WHERE tb_company = 2");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <option value="<?= $row['id'] ?>"> <?= $row['name_setor'] ?></option>
                    <?php }; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="text">Observação:</label>
            <textarea class="form-control" style="width: 600px;height:150px" name="obs" id="obs"></textarea>
        </div>
        <div class="col-4">
            <label for="text">Descrição do Item:</label>
            <textarea class="form-control" style="width: 600px;height:150px" name="desc" id="desc"></textarea>
        </div>
    </div>
    <button type="submit" id="botBem" class="btn btn-success btn-lg">Confirmar</button>
</form>