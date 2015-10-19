<?php 

class NewsController extends Controller{
	public $layout = "article_layout";
	
	public function index(){
		//var_dump($_GET['id']);
		$id = $_GET['id'];
		$article = ViewArticles::get($id);
		$this->loadView("article",$article);
	}
	
}