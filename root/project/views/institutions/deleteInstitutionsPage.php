<?php if (!empty($error)): ?>
    <div class="b-popup">
        <div class="b-popup-content">
            ошибка! Некорректно введённые данные
        </div>
    </div>
<?php endif; ?>
<a href="/institutions/" class="cancellation">← Вернуться</a>
<form method="post">
    <div class="deleteContainer">
        <h2 class="deleteHeading" >Удаление поликлиники</h2>
        <div class="formElement">
            <label>id</label>
            <input type="text" name="institutionsId"/>
        </div>
        <br>
        <div>
        </div>
        <button class="deleteInstitutionsButton" name="deleteInstitutionsButton">Удалить</button>
        </div>
    </div>
</form>
