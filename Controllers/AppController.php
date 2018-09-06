<?php
	// controller de base que tous les controller vont extends, donc ils vont tous partagés un "tronc commun" de fonctions
	Abstract class AppController {

		protected static $instance = null;
		protected $request;
		public $layout    = 'default';  // Layout à utiliser pour rendre la vue

		public static function getInstance(){

			if (is_null(self::$instance)) {
				$className = get_called_class();
				self::$instance = new $className();
			}
			return self::$instance;
		}

		public function setRequest($request){
			$this->request = $request;
		}


		// charge le modèle ici de 'User' quand appelé dans le constructeur de UsersController
		public function loadModel($model){
			require_once '../Models/' . $model .'.php';
			$model = new $model();
			return $model;
		 }
		 

		 function render($filename)
		 {
			 //extract($this->vars);
			 ob_start();
			 require(ROOT . $filename);
			 $content_for_layout = ob_get_clean();
 
			 if ($this->layout == false)
			 {
				 $content_for_layout;
			 }
			 else
			 {
				 require(ROOT . "/Views/Layouts/" . $this->layout . '.php');
			 }
		 }

	}

?>
