<?php

namespace App\Services\Student;


use LaravelEasyRepository\Service;
use Illuminate\Support\Facades\Http;
use App\Repositories\Student\StudentRepository;
use Exception;

class StudentServiceImplement extends Service implements StudentService
{

  /**
   * don't change $this->mainRepository variable name
   * because used in extends service class
   */
  // protected $mainRepository;

  // public function __construct(StudentRepository $mainRepository)
  // {
  //   $this->mainRepository = $mainRepository;
  // }

  // Define your custom methods :)
  public function getAllStudents()
  {
    try {
      $students = Http::get(env('API_URL') . 'students');
      if (json_decode($students)->meta->code != 200) {    //Json_Decode-->Harus di Decode dulu karena ter-enkripsi
        return abort(400, json_decode($students)->meta->message);
      }
      return json_decode($students)->data; // Jika berhasil maka ambil datanya 
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function storeStudent(array $payload)
  {
    try {
      $student = Http::post(env('API_URL') . 'students', $payload);
      if (json_decode($student)->meta->code != 200) {
        return abort(400, json_decode($student)->meta->message);
      }
      return json_decode($student)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function getStudentById($id)
  {
    try {
      $student = Http::get(env('API_URL') . 'students/' . $id . '/detail');
      if (json_decode($student)->meta->code != 200) {
        return abort(400, json_decode($student)->meta->message);
      }
      return json_decode($student)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function updateStudent(array $payload, $id)
  {
    try {
      $student = Http::post(env('API_URL') . 'students/' . $id, $payload);
      if (json_decode($student)->meta->code != 200) {
        return abort(400, json_decode($student)->meta->message);
      }
      return json_decode($student)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function deleteStudent($id)
  {
    try {
      $student = Http::get(env('API_URL') . 'students/' . $id . '/delete');
      if (json_decode($student)->meta->code != 200) {
        return abort(400, json_decode($student)->meta->message);
      }
      return json_decode($student)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function getTrashedStudents()
  {
    try {
      $students = Http::get(env('API_URL') . 'students/trashed');
      if (json_decode($students)->meta->code != 200) {
        return abort(400, json_decode($students)->meta->message);
      }
      return json_decode($students)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }

  public function restoreStudent($id)
  {
    try {
      $student = Http::get(env('API_URL') . 'students/' . $id . '/restore');
      if (json_decode($student)->meta->code != 200) {
        return abort(400, json_decode($student)->meta->message);
      }
      return json_decode($student)->data;
    } catch (\Exception $e) {
      return abort(400, $e->getMessage());
    }
  }
}
