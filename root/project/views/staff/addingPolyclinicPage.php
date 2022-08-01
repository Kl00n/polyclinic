<?php if (!empty($error)): ?>
    <div class="b-popup">
        <div class="b-popup-content">
            ошибка! Некорректно введённые данные
        </div>
    </div>
<?php endif; ?>
<a href="/staff/" class="cancellation">← Вернуться</a>
<form method="post">
    <div class="addingPolyclinicContainer">
        <h2 class="addingPolyclinicHeading">Прикрепить/открепить специалиста к поликлинике</h2>
        <div class="formElement">
            <label>id Клиники</label>
            <input type="text" name="institutionsId" pattern="[0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>id Специалиста</label>
            <input type="text" name="staffId" pattern="[0-9\s]+" required/>
        </div>
        <br>
        <div class="containerButton">
            <button class="addendumButton" name="attachButton">Прикрепить</button>
            <button class="addendumButton" name="unpinButton">Открепить</button>
        </div>
    </div>
</form>
