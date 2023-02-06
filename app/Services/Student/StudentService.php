<?php

namespace App\Services\Student;

use LaravelEasyRepository\BaseService;



interface StudentService extends BaseService
{

    // Write something awesome :)
    public function getAllStudents();
    public function storeStudent(array $payload);
    public function getStudentById($id);
    public function updateStudent(array $payload, $id);
    public function deleteStudent($id);
    public function getTrashedStudents();
    public function restoreStudent($id);
}
