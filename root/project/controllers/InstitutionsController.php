<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Institutions;


class InstitutionsController extends Controller
{
    public function institutionsPage()
    {
        $this->title = 'Медицинские Учреждения';
            if(empty($_SESSION['user'])) {
        session_unset();
        session_destroy();
        header("Location: /authorization/");
        }
        $insitutions = new Institutions;
        $result = $insitutions->institutionsPage();
        return $this->render('institutions/institutionsPage', ['result' => $result]);
    }

    public function AddendumInstitutionsPage()
    {
        $this->title = 'Добавление данных в таблицу поликлиник';
        if (isset($_POST["addendumInstitutionButton"])) {
            $institutions = new Institutions;
            $institutions->AddendumInstitutionsPage($_POST);
            return $this->institutionsPage();
        }
        return $this->render('institutions/addendumInstitutionsPage');
    }

    public function EditingInstitutionsPage()
    {
        $this->title = 'Изменение данных в таблице';
        if (isset($_POST["editingInstitutionsButton"])) {
            $institutions = new Institutions;
            $validation = $institutions->Validation($_POST);
            if (!empty($validation)) {
                $institutions->EditingInstitutionsPage($_POST);
                return $this->institutionsPage();
            }
            return $this->render('institutions/editingInstitutionsPage', ["error" => true]);
        }
        return $this->render('institutions/editingInstitutionsPage');
    }

    public function DeleteInstitutionsPage()
    {
        $this->title = 'Удаление из таблицы';
        if (isset($_POST["deleteInstitutionsButton"])) {
            $institutions = new Institutions;
            $validation = $institutions->Validation($_POST);
            if (!empty($validation)) {
                $institutions->DeleteInstitutionsPage($_POST);
                return $this->institutionsPage();
            }
            return $this->render('institutions/deleteInstitutionsPage', ["error" => true]);
        }
        return $this->render('institutions/deleteInstitutionsPage');
    }
}