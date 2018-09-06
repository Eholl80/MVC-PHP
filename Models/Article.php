<?php
require_once("../Config/db.php");

class Article
{
	protected $id;
	protected $title;
	protected $user_id;
	protected $creation_date;
	protected $content;
	protected $last_update_date;
	protected $category_id;

	public function __construct()
	{
		$this->db = DB::getInstance();
		$this->id = $id;
		$this->title = $title;
		$this->user_id = $user_id;
		$this->creation_date = $creation_date;
		$this->content = $content;
		$this->last_update_date = $last_update_date;
		$this->category_id = $category_id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

	public function setCreationDate($creation_date)
	{
		$this->creation_date = $creation_date;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function setLastUpdateDate($last_update_date)
	{
		$this->last_update_date = $last_update_date;
	}

	public function setCategoryId($category_id)
	{
		$this->category_id = $category_id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getUserId()
	{
		return $this->user_id;
	}

	public function getCreationDate()
	{
		return $this->creation_date;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getLastUpdateDate()
	{
		return $this->last_update_date;
	}

	public function getCategoryId()
	{
		return $this->category_id;
	}

	public function addArticle($title, $user_id, $category_id, $content, $creation_date, $last_update_date)
	{
		DB::getInstance()->prepare('INSERT INTO articles (title, user_id, content, creation_date, last_update_date) VALUES ("'.$title.'", "'.$user_id.'", "'.$category_id.'", "'.$content.'", "'.$creation_date.'", "'.$last_update_date.'")');
	}
	
	public function deleteArticle()
	{
		DB::getInstance()->prepare('DELETE FROM articles WHERE id = :id');
	}

	public function updateArticle()
	{
		DB::getInstance()->prepare('UPDATE articles SET title = :title, content = :content, category_id = :category_id, last_update_date = :last_update_date WHERE id = :id');
	}

	public function getArticle()
	{
		DB::getInstance()->prepare('SELECT * FROM articles WHERE id = :id');
	}

	public function getArticles()
	{
		DB::getInstance()->prepare('SELECT * FROM articles');
	}

	public function getArticleByTitle()
	{
		DB::getInstance()->prepare('SELECT * FROM articles WHERE title = :title');
	}

	public function getArticleByCreationDate()
	{
		DB::getInstance()->prepare('SELECT * FROM articles WHERE creation_date = :creation_date');
	}
}