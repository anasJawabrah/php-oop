<?php
class Student
{
	/* Private attribute, cannot be accessed directly */
	protected $name;
	protected $mobile;
	protected $email;
	
	/* Constructor */
	public function __construct($name,$mobile,$email)
	{
		$this->name = $name;
		$this->email = '';
		$this->mobile = '';
	}
	
	/* Getter function to read the attribute */
	public function get_all()
	{
		return "
      Student  name: $this->name<br/>
      mobile : $this->mobile <br/>
      email: $this->email . ";
	}
	
	/* Setter function to change the attribute */
	public function set_name($new_name)
	{
      $this->name = $new_name;
	}
	public function set_mobile($new_mobile)
	{
      $this->mobile = $new_mobile;
	}
	public function set_email($new_email)
	{
      $this->email = $new_email;
	}
	
}

echo '<br/>';
$sami = new Student('sami','d','d');

echo $sami->get_all() ;
echo '<br/>';
echo '<br/>';

class Teacher extends Student
{
	/* Private attribute, cannot be accessed directly */
	protected $salary;
	protected $subjects;
	
	/* Constructor */
	public function __construct($name,$mobile,$email,$salary,$subjects)
	{
		$this->name = $name;
		$this->email = $email;
		$this->mobile = $mobile;
		$this->salary = $salary;
		$this->subjects = join(' ',$subjects);
	}
	
	/* Getter function to read the attribute */
	public function get_all()
	{
		return "Teacher 
      name: $this->name<br/>
      mobile : $this->mobile <br/>
      email: $this->email <br/>
      salary: $this->salary<br/>
      subjects: $this->subjects .";
	}
	
	/* Setter function to change the attribute */
	public function set_salary($new_salary)
	{
      $this->name = $new_salary;
	}
	public function set_subjects($new_subjects)
	{
      $this->mobile = $new_subjects;
	}
	
}

$sara = new Teacher('sara','0787874569','adsf@mil.com','400JOD',['math','art']);

echo $sara->get_all();

$sara->set_mobile("324");

echo '<br/>';
echo '<br/>';
echo $sara->get_all();


?>