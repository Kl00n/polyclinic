<?php if (!empty($error)): ?>
    <div class="b-popup">
        <div class="b-popup-content">
            ошибка! Некорректно введённые данные
        </div>
    </div>
<?php endif; ?>
<a href="/staff/" class="cancellation">← Вернуться</a>
<form method="post">
    <div class="editingContainer">
        <h2 class="editingHeading textCenter margin0">Изменение сотрудника/ов</h2>
        <div class="formElement">
            <label>Id медработника</label>
            <input type="text" name="staffId" pattern="[0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Имя</label>
            <input type="text" name="editingName" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Фамилия</label>
            <input type="text" name="editingSurname" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Отчество</label>
            <input type="text" name="editingMiddleName"/>
        </div>
        <div class="formElement">
            <label>Должность</label>
            <input type="text" name="editingPost"/>
        </div>
        <div class="formElement">
            <label>Специальность</label>
            <input type="text" name="editingSpecialization" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Код мед. работника</label>
            <input type="text" name="editingCodeMedicalWorker" pattern="[0-9\s]+" required/>
        </div>
        <div class="formElement tag4">
            <label>Дата начала работы в мед учреждении</label>
            <input type="date" name="editingCommencementDate"/>
        </div>
        <div class="formElement tag4">
            <label>Дата окончания работы в мед учреждении</label>
            <input type="date" name="editingEndDate"/>
        </div>
        <br>
        <div>
            <button class="editingStaffButton" name="editingStaffButton">Изменить</button>
        </div>
    </div>
</form>
