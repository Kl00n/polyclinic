<?php

namespace Project\Models;

use \Core\Model;

class Staff extends Model
{
    public function employeePage()
    {
        $result = $this->findMany("
        SELECT s.idSt, s.name, s.surname, s.middleName, s.post, s.specialization, 
        s.codeMedicalWorker, s.commencementDate, s.endDate,
        GROUP_CONCAT(i.shortName SEPARATOR ', ') as institution
        FROM staff s 
        LEFT  JOIN relationship r ON s.idSt = r.idStaff
        LEFT JOIN institutions i ON r.idInstitutions = i.idin GROUP BY  s.idSt;
        ");
        return $result;
    }

    public function AddendumStaffPage($data)
    {
        extract($data);
        $result = $this->push("
        INSERT INTO `staff` ( `name`, `surname`, `middleName`, `post`, `specialization`, `codeMedicalWorker`, `commencementDate`, `endDate`)
        VALUES ( '$addendumName', '$addendumSurname', '$addendumMiddleName', '$addendumPost','$addendumSpecialization', '$addendumCodeMedicalWorker', '$addendumCommencementDate', '$addendumEndDate');
        ");
    }

    public function EditingStaffPage($data)
    {
        extract($data);
        $result = $this->push("
        UPDATE `staff` SET `idSt`='$staffId',`name`='$editingName',`surname`='$editingSurname',`middleName`='$editingMiddleName',
        `post`='$editingPost',`specialization`='$editingSpecialization',`codeMedicalWorker`='$editingCodeMedicalWorker',`commencementDate`='$editingCommencementDate',
        `endDate`='$editingEndDate' WHERE `idSt`='$staffId';");

    }

    public function DeleteStaffPage($data)
    {
        extract($data);
        $result = $this->push("
        DELETE FROM `relationship` WHERE `idStaff` = '$staffId';
        ");
        $result = $this->push("
        DELETE FROM `staff` WHERE `idSt`= '$staffId';
        ");
    }

    public function AddingPolyclinicPage($data)
    {
        extract($data);
        if (isset($attachButton)) {
            $result = $this->push("
            INSERT INTO `relationship`(`idInstitutions`,`idStaff` ) VALUES ('$institutionsId','$staffId');"
            );
        }
        if (isset($unpinButton)) {
            $result = $this->push("
            DELETE FROM `relationship` WHERE `idStaff` = '$staffId' and `idInstitutions`= '$institutionsId';"
            );
        }
    }

    public function Validation($data)
    {
        extract($data);
        $result = $this->findOne("SELECT * FROM `staff` WHERE `idSt` = '$staffId';");
        if(!empty($result["idSt"])){
            return true;
        }
    }

}