<?php
class CourseModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM courses');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){

            if($post['course_name'] == '' || $post['course']) {
                Messages::setMsg('Please fill in all fields','error');
                return;
            }
			// Insert into MySQL
			$this->query('INSERT INTO courses (course_name, course) VALUES(:course_name, :course)');
			$this->bind(':course_name', $post['course_name']);
			$this->bind(':course', $post['course']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
}