<a href="/institutions/" class="cancellation">← Вернуться</a>
<form method="post">
    <div class="addendumContainer addendumInstitutionsContainer">
        <h2 class="addendumHeading">Добавление Мед Учреждение</h2>
        <div class="formElement">
            <label>Номер учреждения</label>
            <input type="text" name="institutionNumber" pattern="[\№0-9]+" required/>
        </div>
        <div class="formElement tag3">
            <label>Наименование учреждения</label>
            <input type="text" name="institutionName" pattern="[\№A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Краткое наименование</label>
            <input type="text" name="shortName" pattern="[\№A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Адрес</label>
            <input type="text" name="address" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>email</label>
            <input type="email" name="email" required/>
        </div>
        <div class="formElement">
            <label>Номер телефона</label>
            <input type="text" name="phoneNumber" pattern="[\+\-\(\)0-9\s]+" required/>
        </div>
        <div class="formElement">
            <label>Тип учреждения</label>
            <input type="text" name="institutionType" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" required/>
        </div>
        <br>
        <div>
            <button class="addendumInstitutionButton" name="addendumInstitutionButton">Добавить</button>
        </div>
    </div>
</form>
