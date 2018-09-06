<?php
require_once("../Config/db.php");

class User 
{

	private $db;

	// gestion des droits utilisateur
	protected $category_user = 0; // 0 = common user, 1 = Writer, 2 = Admin
	protected $is_banished = 0; // 0 = not banished, 1 = banished
	protected $username;
	protected $password;
	protected $hashed_password;
	protected $email;
	protected $group;
	protected $creation_date;
	protected $last_update_date;

	public function __construct()
	{
		$this->db = DB::getInstance();
		$this->category_user = 0;
		$this->is_banished = 0;
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;
		$this->group = $group;
		$this->creation_date = $creation_date;
		$this->last_update_date = $last_update_date;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function setIsBanished($banished)
	{
		$this->is_banished = $is_banished;
	}

	public function setCategoryUser($category_user)
	{
		$this->category_user = $category_user;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setGroup($group)
	{
		$this->group = $group;
	}

	public function setCreationDate($creation_date)
	{
		$this->creation_date = $creation_date;
	}

	public function setLastUpdateDate($last_update_date)
	{
		$this->last_update_date = $last_update_date;
	}

	public function getIsBanished()
	{
		return $this->is_banished;
	}

	public function getCategoryUser()
	{
		return $this->category_user;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getGroup()
	{
		return $this->group;
	}

	public function getCreationDate()
	{
		return $this->creation_date;
	}

	public function getLastUpdateDate()
	{
		return $this->last_update_date;
	}

	public function login($email, $password)
	{
		// ici vous devez vérifier qu'il peut se log
	}

	// Vérification des erreurs au moment de la création.
	public function errorManagement($username, $email, $password, $password_confirmation)
	{

		$retmsg = '';

		if ((empty($username)) OR (strlen($username) < 3) OR (strlen($username) > 10)) 
		{
			$retmsg = $retmsg . "Invalid Unsername. Must have between 3 and 10 characters.<br>";
		}
		if ((empty($email)) OR (preg_match('#^[a-zA-Z0-9]+@[a-zA-Z]{2,}\.[a-z]{2,4}$#', $email) != 1))
		{
			$retmsg = $retmsg . "Invalid email.<br>";
		}
		if ((empty($password))){
			$retmsg = $retmsg . "No password entered.<br>";
		}
		if (strlen($password) < 8 OR (strlen($password) > 20))
		{
			$retmsg = $retmsg . "Invalid Password. Must have between 8 and 20 characters.<br>";
		}
		if ((empty($password_confirmation)) OR ($password != $password_confirmation)){
			$retmsg = $retmsg . "Non matching password.<br>";
		}
		return $retmsg;
	}

	public function getUserName()
	{
		$ret = DB::getInstance()->fetchAll('SELECT username FROM users');
		return $ret;
	}

	// Creation du compte dans la BDD.
	public function addUser($username, $email, $password)
	{
		//$hashed_password = hash($password, PASSWORD_DEFAULT);
		DB::getInstance()->prepare('INSERT INTO users (username, password, email, group_id, is_banished) VALUES ("'.$username.'", "'.$password.'", "'.$email.'", "'.$this->category_user.'", "'.$this->is_banished.'")');
	}

	public function getAllUsers()
	{		
		$ret = DB::getInstance()->fetchAll('SELECT * FROM users');
		return $ret;
	}

	public function getUserById()
	{
		DB::getInstance()->prepare('SELECT * FROM users WHERE id = :id');
	}

	public function getUserByEmail($email)
	{
		DB::getInstance()->prepare('SELECT email FROM users WHERE id = ' .$email .'');
	}

	public function updateUser()
	{
		$hashed_password = hash($password, PASSWORD_DEFAULT);
		DB::getInstance()->prepare('UPDATE users SET username = username, email = :email, password = :password, group = :group, is_banished = :is_banished, last_update_date = :last_update_date, category_user = :category_user WHERE id = :id');
	}

	public function deleteUser()
	{
		DB::getInstance()->prepare('UPDATE users SET is_banished = 1 WHERE id = :id');
	}
}