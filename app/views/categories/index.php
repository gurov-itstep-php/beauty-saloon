<div class="customer" style="padding-top: 120px;">
    <h1 style="text-align: center;">Управление категориями услуг</h1>
    <hr>
    <table class="categories-table">
        <div style="text-align:center">
            <a href="<?= self::ROOT ?>/categories/create" style="width: 225px" class="btn btn-outline-success">Добавить категорию</a>
            <a href="<?= self::ROOT ?>/admin/index" style="width: 225px" class="btn btn-outline-info btn">Вернуться в Админ-панель</a>
        </div>
        <tbody>
            <?php foreach ($categories as $category) { ?>
                <tr>
                    <td>
                        <h3><?= $category['name'] ?></h3>
                    </td>
                    <td style="width: 30%;">
                        <h4>
                            <a href="<?= self::ROOT ?>/categories/update/<?= $category['id'] ?>" class="btn btn-outline-secondary btn-sm">Изменить</a>
                            <a href="<?= self::ROOT ?>/categories/delete/<?= $category['id'] ?>" class="btn btn-outline-danger btn-sm">Удалить</a>
                        </h4>
                    </td>
                </tr>
            <? } ?>
        </tbody>
    </table>
</div>

<style>
    .categories-table {
        width: 40%;
        margin: 20px auto;
    }

    thead {
        text-align: center;
    }

    .categories-table th,
    .categories-table td {
        padding: 10px;
        border: 1px solid;
        border-color: #461d30;
    }
</style>