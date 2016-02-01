<?php
App::uses('CakeEmail', 'Network/Email');
class CreditsController extends AppController{

	public function index(){

	}

	public function get(){
		
		if($this->request->is('post')){
			
			$data = $this->request->data['Credit'];
			$email = new CakeEmail('smtp');
			$email->from(array('pcredit@astanacreative.kz' => 'Микрокредитование'))
			->to('pcredit@astanacreative.kz')
			->subject('Новые письмо с сайта');
			$message = 'ФИО: '. $this->request->data['Credit']['name'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}

		}
	}
}