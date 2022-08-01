<form class="staff" method="post" action="">
    <div class="container">
        <div class="editButtons">
            <h2 class="employeeHeading">Таблица сотрудников</h2>
            <button id="employeeAddendum" name="employeeAddendum" class="employeeAddendum">Добавление</button>
            <button id="employeeEditing" name="employeeEditing" class="employeeEditing">Редактирование</button>
            <button id="employeeDelete" name="employeeDelete" class="employeeDelete">Удаление</button>
            <button id="employeeAddingPolyclinic" name="employeeAddingPolyclin" class="employeeAddingPolyclinic">
                Добавить к поликлинике
            </button>
        </div>

        <?php if (!empty($result)): ?>
            <table>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Должность</th>
                    <th>Специальность</th>
                    <th>Код мед. работника</th>
                    <th>Дата начала работы в мед учреждении</th>
                    <th>Дата окончания работы в мед учреждении</th>
                    <th>Краткое название работы</th>
                </tr>
                <?php foreach ($result as $column): ?>
                    <tr>
                        <td><?= $column["idSt"] ?></td>
                        <td><?= $column["name"] ?></td>
                        <td><?= $column["surname"] ?></td>
                        <td><?= $column["middleName"] ?></td>
                        <td><?= $column["post"] ?></td>
                        <td><?= $column["specialization"] ?></td>
                        <td><?= $column["codeMedicalWorker"] ?></td>
                        <td><?= $column["commencementDate"] ?></td>
                        <td><?= $column["endDate"] ?></td>
                        <td><?= $column["institution"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</form>
