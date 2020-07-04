<?php


namespace app\controllers;

use app\models\MainModel;
use core\Controller;
use core\View;

class MainController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new MainModel();
    }

    public function index(){
        $students = $this->model->getAllStudents();
        View::render('index', compact('students'));
    }

    public function edit($id){
        $student = $this->model->find($id);
        if (!empty($_POST)){
            $data = $_POST;
            $firstname = removeHTML($data['firstname']);
            $lastname = removeHTML($data['lastname']);
            $patronymic = removeHTML($data['patronymic']);
            $birthday = formatDate(removeHTML($data['birthday']), 'Y-m-d');
            $this->model->update($id, compact('firstname','lastname','patronymic', 'birthday'));
                redirect(PATH);
        }
        View::render('edit', compact('student'));

    }

    public function delete($id){
        if($this->model->delete($id)){
            redirect(PATH);
        }
    }

    public function add(){
        if(isset($_POST['cansel'])){
            redirect(PATH);
        }
        if (isset($_POST['save'])){
            $data = $_POST;
            $firstname = removeHTML($data['firstname']);
            $lastname = removeHTML($data['lastname']);
            $patronymic = removeHTML($data['patronymic']);
            $birthday = formatDate(removeHTML($data['birthday']), 'Y-m-d');
            $this->model->store(compact('firstname','lastname','patronymic', 'birthday'));
            redirect(PATH);
        }
        View::render('add', compact('errors'));
    }
}