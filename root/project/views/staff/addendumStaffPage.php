<a href="/staff/" class="cancellation">← Вернуться</a>
<form method="post">
<!--    --><?php //var_dump($result);?>
    <div class="addendumContainer">
        <h2 class="addendumHeading">Добавление Сотрудников</h2>
        <div class="formElement">
            <label>Имя</label>
            <input type="text" name="addendumName" pattern="[A-Za-zА-Яа-яЁё\s]+" required/>
        </div>
        <div class="formElement">
            <label>Фамилия</label>
            <input type="text" name="addendumSurname" pattern="[A-Za-zА-Яа-яЁё\s]+" required/>
        </div>
        <div class="formElement">
            <label>Отчество</label>
            <input type="text" name="addendumMiddleName" pattern="[A-Za-zА-Яа-яЁё\s]+"/>
        </div>
        <div class="formElement">
            <label>Должность</label>
            <input type="text" name="addendumPost" pattern="[A-Za-zА-Яа-яЁё\s]+"/>
        </div>
        <div class="formElement">
            <label>Специальность</label>
            <input type="text" name="addendumSpecialization" pattern="[A-Za-zА-Яа-яЁё\s]+" required/>
        </div>
        <div class="formElement">
            <label>Код мед. работника</label>
            <input type="text" name="addendumCodeMedicalWorker" pattern="[0-9]+" required/>
        </div>
        <div class="formElement tag1">
            <label>Дата начала работы в мед учреждении</label>
            <input type="date" name="addendumCommencementDate"/>
        </div>
        <div class="formElement tag1">
            <label>Дата окончания работы в мед учреждении</label>
            <input type="date" name="addendumEndDate"/>
        </div>
        <br>
        <div>
            <button class="addendumStaffButton" name="addendumStaffButton">Добавить</button>
        </div>
    </div>
</form>
