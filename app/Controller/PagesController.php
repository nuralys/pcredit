<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Page', 'News', 'Product');

	public function home(){
		$news = $this->News->find('all', array(
			'limit' => 9,
			'order' => array('id' => 'desc')
		));
		

		$this->view = 'home';
		$title_for_layout = 'Микрофинансовая организация кредиты под залог';
		$this->set(compact('news', 'title_for_layout'));
	}

	public function autolombard(){
		$news = $this->News->find('all', array(
			'limit' => 9,
			'order' => array('id' => 'desc')
		));
		

		$this->view = 'autolombard';
		$title_for_layout = 'Микрофинансовая организация кредиты под залог';
		$this->set(compact('news', 'title_for_layout'));
	}

	public function realty(){
		$news = $this->News->find('all', array(
			'limit' => 9,
			'order' => array('id' => 'desc')
		));
		

		$this->view = 'realty';
		$title_for_layout = 'Микрофинансовая организация кредиты под залог';
		$this->set(compact('news', 'title_for_layout'));
	}

	public function contacts(){
		$news = $this->News->find('all', array(
			'limit' => 9,
			'order' => array('id' => 'desc')
		));
		

		$this->view = 'contacts';
		$title_for_layout = 'Микрофинансовая организация кредиты под залог';
		$this->set(compact('news', 'title_for_layout'));
	}

	public function about(){
		$news = $this->News->find('all', array(
			'limit' => 9,
			'order' => array('id' => 'desc')
		));
		

		$this->view = 'about';
		$title_for_layout = 'О компании - МФО «Premium Credit»';
		$this->set(compact('news', 'title_for_layout'));
	}

	public function admin_index(){
		
	}

	public function index($page_alias = null){
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$page = $this->Page->findByAlias($page_alias);
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}
		$news = $this->News->find('all',array(
			'limit' => 4,
			'order' => array('created' => 'desc')
			));
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'news', 'title_for_layout', 'meta'));
	}
}
