<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreStudentRequest;
use App\Services\Student\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $students = $this->studentService->getAllStudents();
        return view('welcome', compact('students'));
    }

    public function createStudent()
    {
        return view('create-student');
    }

    public function storeStudent(StoreStudentRequest $storeStudentRequest)
    {
        $Payload = $storeStudentRequest->validated();
        $this->studentService->storeStudent($Payload);
        return redirect('/')->with('success', 'Student created succesfully');
    }

    public function editStudent($id)
    {
        $student = $this->studentService->getStudentById($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(StoreStudentRequest $storeStudentRequest, $id)
    {
        $payload = $storeStudentRequest->validated();
        $this->studentService->updateStudent($payload, $id);
        return redirect('/')->with('success', 'Student updated succesfully');
    }

    public function deleteStudent($id)
    {
        $this->studentService->deleteStudent($id);
        return redirect('/')->with('success', 'Student deleted successfully');
    }

    public function trashedStudents()
    {
        $students = $this->studentService->getTrashedStudents();
        return view('recycle-bin', compact('students'));
    }

    public function restoreStudent($id)
    {
        $this->studentService->restoreStudent($id);
        return redirect('/students/trashed')->with('success', 'Student restored successfully');
    }
}
