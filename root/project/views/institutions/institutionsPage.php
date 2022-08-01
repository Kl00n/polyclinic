<form class="institutions" method="post" action="">
    <div class="container">
        <div class="editButtons">
            <h2 class="employeeHeading">Медицинские Учреждения</h2>
            <button id="institutionsAddendum" name="institutionsAddendum" class="institutionsAddendum">Добавление
            </button>
            <button id="institutionsEditing" name="institutionsEditing" class="institutionsEditing">Редактирование
            </button>
            <button id="institutionsDelete" name="institutionsDelete" class="institutionsDelete">Удаление</button>
        </div>
        <?php if (!empty($result)): ?>
        <table>
            <tr>
                <th>id</th>
                <th>Номер учреждения</th>
                <th>Наименование учреждения</th>
                <th>Краткое наименование</th>
                <th>Адрес</th>
                <th>email</th>
                <th>Номер телефона</th>
                <th>Тип учреждения</th>
            </tr>
            <?php foreach ($result as $column): ?>
            <tr>
                <td><?= $column["idIn"] ?></td>
                <td><?= $column["number"] ?></td>
                <td><?= $column["name"] ?></td>
                <td><?= $column["shortName"] ?></td>
                <td><?= $column["address"] ?></td>
                <td><?= $column["email"] ?></td>
                <td><?= $column["phoneNumber"] ?></td>
                <td><?= $column["type"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</form>

