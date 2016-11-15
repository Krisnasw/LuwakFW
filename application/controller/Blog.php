<?php
	/**
	* Created By LuwakDev
	*/
	class Blog extends Application
	{
		
		function __construct()
		{
			# code...
			$this->loadModel('model_blog');
		}

		function index()
		{
			$articles = $this->model_blog->select();
			$data['articles'] = $articles;
			$this->loadView('view_blog', $data);
		}

		function add($title = "")
		{
			$data['title'] = $title;
			$this->loadView('view_blog_add', $data);
		}
	}
?>