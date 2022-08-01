<?php
use \Core\Route;
if (isset($_POST["employeeAddendum"]) || isset($_POST["addendumStaffButton"])) {
    return [new Route('/staff/', 'staff', 'addendumStaffPage')];
    }
if (isset($_POST["employeeEditing"]) || isset($_POST["editingStaffButton"])) {
    return [new Route('/staff/', 'staff', 'editingStaffPage')];
    }
if (isset($_POST["employeeDelete"]) || isset($_POST["deleteStaffButton"])) {
    return [new Route('/staff/', 'staff', 'deleteStaffPage')];
    }
if (isset($_POST["employeeAddingPolyclin"]) || isset($_POST["attachButton"]) || isset($_POST["unpinButton"])) {
    return [new Route('/staff/', 'staff', 'addingPolyclinicPage')];
}
if (isset($_POST["institutionsAddendum"]) || isset($_POST["addendumInstitutionButton"])) {
    return [new Route('/institutions/', 'institutions', 'addendumInstitutionsPage')];
}
if (isset($_POST["institutionsEditing"]) || isset($_POST["editingInstitutionsButton"])) {
    return [new Route('/institutions/', 'institutions', 'editingInstitutionsPage')];
}
if (isset($_POST["institutionsDelete"]) || isset($_POST["deleteInstitutionsButton"])) {
    return [new Route('/institutions/', 'institutions', 'deleteInstitutionsPage')];
}


return [
    new Route('/authorization/', 'authorization', 'authorizationPage'),
    new Route('/staff/', 'staff', 'employeePage'),
    new Route('/institutions/', 'institutions', 'institutionsPage'),
];

//return [
//    new Route('/addendumStaff/', 'addendumStaff', 'addendumStaffPage'),
//    new Route('/addendumInstitutions/', 'addendumInstitutions', 'addenduminstitutionsPage'),
//    new Route('/editingStaff/', 'editingStaff', 'editingStaffPage'),
//    new Route('/editingInstitutions/', 'editingInstitutions', 'editingInstitutionsPage'),
//    new Route('/deleteStaff/', 'deleteStaff', 'deleteStaffPage'),
//    new Route('/deleteInstitutions/', 'deleteInstitutions', 'deleteInstitutionsPage'),
//    new Route('/addingPolyclinic/', 'addingPolyclinic', 'addingPolyclinicPage'),
//];

