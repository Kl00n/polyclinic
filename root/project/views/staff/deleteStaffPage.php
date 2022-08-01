<?php if (!empty($error)): ?>
    <div class="b-popup">
        <div class="b-popup-content">
            ошибка! Некорректно введённые данные
        </div>
    </div>
<?php endif; ?>
<a href="/staff/" class="cancellation">← Вернуться</a>
<form method="post">
    <div class="deleteContainer">
        <h2 class="deleteHeading">Удаление сотрудника</h2>
        <div class="formElement">
            <label>id</label>
            <input type="text" name="staffId"/>
        </div>
        <br>
        <div>
            <button class="deleteStaffButton" name="deleteStaffButton">Удалить</button>
        </div>
    </div>
</form>
