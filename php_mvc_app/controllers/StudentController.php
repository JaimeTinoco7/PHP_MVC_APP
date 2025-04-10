<?php
require_once '../models/Student.php';
require_once '../models/Country.php';
require_once '../models/District.php';
require_once '../models/Carrer.php'; // 🔹 Agregado

class StudentController extends Controller {
    public function index() {
        $student = new Student();
        $country = new Country();
        $district = new District();
        $carrer = new Carrer(); // 🔹 Agregado

        $data = [
            'students' => $student->getAll(),
            'countries' => $country->getAll(),
            'districts' => $district->getAll(),
            'carrers' => $carrer->getAll() // 🔹 Agregado
        ];

        $this->view('students/index', $data);
    }

    public function create() {
        $student = new Student();
        $student->create([
            'name' => 'Nuevo',
            'lastname' => 'Estudiante',
            'sex' => 'M',
            'date_born' => date('2000-01-01'),
            'country_id' => 1,
            'district_id' => 1,  // 🔹 Distrito por defecto
            'carrer_id' => 1     // 🔹 Carrera por defecto
        ]);
    }

    public function delete($id) {
        $student = new Student();
        $student->delete($id);
    }

    public function update() {
        $student = new Student();
        $column = $_POST['column'];
        $value = $_POST['value'];

        // 🔹 Validar que la columna sea actualizable
        $allowedColumns = ['name', 'lastname', 'sex', 'date_born', 'country_id', 'district_id', 'carrer_id'];
        if (in_array($column, $allowedColumns)) {
            $student->update($_POST['id'], $column, $value);
        }
    }
}
