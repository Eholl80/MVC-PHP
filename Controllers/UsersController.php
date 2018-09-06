<?php
	

	class UsersController extends AppController	{

		private $model;
		private $username;
		private $email;
		private $password;
		private $passwordconf;

		// load le model associé ici 'User'
		protected function __construct(){
			$this->model = $this->loadModel('User');
		}

		function index(){
			$this->render('/Views/Users/register.html'); 
		}

		// fonction appelé via la route 'users/controlregister' voir routes.php
		public function controlregister($username=null, $email=null, $password=null, $passwordconf=null){

			$username = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$passwordconf = $_POST['passwordconf'];

			

			if (!isset($_POST['sent']))	{
				$this->render('/Views/Users/register.html'); 
			} else {

				$return = $this->model->errorManagement($username, $email, $password, $passwordconf);

				if ( $return != '' ) {	
					echo'<div class="col-lg-9 col-md-6 mb-4 alert alert-danger my-3 mx-auto" role="alert">';
					echo $return;
					echo'</div>';
					$this->render('/Views/Users/register.html'); 
				} else {
					// création de l'utilisateur en base de données
					$count = $this->model->addUser($username, $email, $password);
					$this->render('/Views/mainView.php'); 
					/*
					if ($count > 0) {
						unset($_POST);
						// code non fonctionnel, pour vous indiquer quoi faire
						$this->render('/Views/mainView.php'); 
					}
					*/
				}

			}
		}

		public function redirectMain() {
			$this->render('/Views/mainView.php'); 
		}

		public function userAdminView() {
			
			//var_dump($arrayAllUsers);
			$this->render('/Views/Admin/adminUserDefaultView.php'); 

		}

		public function controlLogin($email=null, $password=null)
		{
			if (!isset($_POST['sent']))
				$this->render('/Views/loginView.php'); 
			else
			{
				$return = $this->model->errorManagement($email, $password);

				if ($return != '')
				{
					echo'<div class="col-lg-9 col-md-6 mb-4 alert alert-danger my-3 mx-auto" role="alert">';
					echo $return;
					echo'</div>';
				}
				else
				{
					$email = $_POST['email'];
					$password = $_POST['password'];
					$q = DB::getInstance()->prepare('SELECT email, password FROM users WHERE email = $email, password = $password');
					if (my_sql_rows($q) > 0)
						$this->render('/Views/mainView.php'); 
					else
						echo "Failed to log in.";
				}
			}

		}

	}
?>
