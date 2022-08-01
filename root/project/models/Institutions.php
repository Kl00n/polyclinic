<?php

namespace Project\Models;

use \Core\Model;

class Institutions extends Model
{
    public function institutionsPage()
    {
        $result = $this->findMany("
        select * from institutions");
        return $result;
    }

    public function AddendumInstitutionsPage($data)
    {
        extract($data);
        $result = $this->push("
        INSERT INTO `institutions`(`number`, `name`, `shortName`, `address`, `email`, `phoneNumber`, `type`) 
        VALUES ('$institutionNumber','$institutionName','$shortName','$address','$email','$phoneNumber','$institutionType');");
    }

    public function EditingInstitutionsPage($data)
    {
        extract($data);
        $result = $this->push("
        UPDATE `institutions` SET `idIn`='$institutionsId',`number`='$institutionNumber',
        `name`='$institutionName',`shortName`='$shortName',`address`='$address',`email`='$email',`phoneNumber`='$phoneNumber',
        `type`='$institutionType' WHERE `idIn`='$institutionsId';");
    }

    public function DeleteInstitutionsPage($data)
    {
        extract($data);
        $result = $this->push("
        DELETE FROM `relationship` WHERE `idInstitutions`='$institutionsId';
        ");
        $result = $this->push("
        DELETE FROM `institutions` WHERE `idIn`='$institutionsId';
        ");

    }

    public function Validation($data)
    {
        extract($data);
        $result = $this->findOne("SELECT * FROM `institutions` WHERE `idIn` = '$institutionsId';");
        if(!empty($result["idIn"])){
            return true;
        }
    }
}
