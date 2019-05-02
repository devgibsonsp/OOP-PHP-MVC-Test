<?php

class Courses extends Controller{
	protected function Index(){
		$viewmodel = new CourseModel();
		$this->ReturnView($viewmodel->Index(), true);
    }
    
    protected function add(){
        if(!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'courses');
        }
		$viewmodel = new CourseModel();
		$this->ReturnView($viewmodel->add(), true);
    }
    
    protected function delete() {
        if(!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'courses');
        }
        $viewmodel = new CourseModel();
        $this->ReturnView($viewmodel->delete(), true);
    }
}

?>