<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Staff;
use \Project\Models\Institutions;

class StaffController extends Controller
{
    public function employeePage()
    {
        $this->title = 'Сотрудники';
        if(empty($_SESSION['user'])) {
    session_unset();
    session_destroy();
    header("Location: /authorization/");
}
        $staff = new Staff;
        $result = $staff->employeePage();
        return $this->render('staff/employeePage', ["result" => $result]);
    }

    public function AddendumStaffPage()
    {
        $this->title = 'Добавление данных в таблицу сотрудников';
        if (isset($_POST["addendumStaffButton"])) {
            $staff = new Staff;
            $staff->AddendumStaffPage($_POST);
            return $this->employeePage();
        }
        return $this->render('staff/addendumStaffPage');
    }

    public function EditingStaffPage()
    {
        $this->title = 'Изменение данных в таблицу сотрудников';
        if (isset($_POST["editingStaffButton"])) {
            $staff = new Staff;
            $validation = $staff->Validation($_POST);
            if (!empty($validation)) {
                $staff->EditingStaffPage($_POST);
                return $this->employeePage();
            }
            return $this->render('staff/editingStaffPage', ["error" => true]);
        }
        return $this->render('staff/editingStaffPage');
    }

    public function DeleteStaffPage()
    {
        $this->title = 'Удаление из таблицы';
        if (isset($_POST["deleteStaffButton"])) {
            $staff = new Staff;
            $validation = $staff->Validation($_POST);
            if (!empty($validation)) {
                $staff->DeleteStaffPage($_POST);
                return $this->employeePage();
            }
            return $this->render('staff/deleteStaffPage', ["error" => true]);
        }
        return $this->render('staff/deleteStaffPage');
    }

    public function AddingPolyclinicPage()
    {
        $this->title = 'Прикрепление/открепление специалиста';
        if (isset($_POST["attachButton"]) || isset($_POST["unpinButton"])) {
            $staff = new Staff;
            $validation = $staff->Validation($_POST);
            $institutions = new Institutions;
            $validation2 = $institutions->Validation($_POST);
            if (!empty($validation) and !empty($validation2)) {
                $staff->AddingPolyclinicPage($_POST);
                return $this->employeePage();
            }
            return $this->render('staff/addingPolyclinicPage', ["error" => true]);
        }
        return $this->render('staff/addingPolyclinicPage');
    }
}

