<?php
App::uses('CakeEmail', 'Network/Email');
class CreditsController extends AppController{

	public $uses = array('Credit', 'News');
	public function index(){
		$title_for_layout = 'Заявка на получение кредита';
		$news = $this->News->find('all', array(
			'limit' => 3,
			'order' => array('id' => 'desc')
		));

		$this->set(compact('news', 'title_for_layout'));
	}

	public function get(){
		
		if($this->request->is('post')){
			
			$data = $this->request->data['Credit'];
			
			switch ($data['car']) {
				case '1': $car = '1-6 месяцев'; break;
				case '2': $car = '6-12 месяцев'; break;
				case '3': $car = '12-18 месяцев'; break;
				case '4': $car = '18-24 месяцев'; break;
				case '5': $car = '24 и более месяцев'; break;
				default: $car = 'Срок не выбран'; break;
			}

			switch ($data['realty']) {
				case '1': $realty = '1-6 месяцев'; break;
				case '2': $realty = '6-12 месяцев'; break;
				case '3': $realty = '12-18 месяцев'; break;
				case '4': $realty = '18-24 месяцев'; break;
				case '5': $realty = '24 и более месяцев'; break;
				default: $realty = 'Срок не выбран'; break;
			}

			// debug($car);
			$email = new CakeEmail('smtp');
			$email->from(array('pcredit@astanacreative.kz' => 'Микрокредитование'))
			->to('pcredit@astanacreative.kz')
			->subject('Новая заявка с сайта');
			$message = 'ФИО: '. $this->request->data['Credit']['name'];
			$message .= ' Телефон: '. $this->request->data['Credit']['phone'];
			$message .= ' Желаемая сумма займа: '. $this->request->data['Credit']['other_amount'];
			$message .= ' Срок займа под автомобиль: '. $car;
			$message .= ' Срок займа под недвижимость: '. $realty;
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

	public function getcredit(){
		if($this->request->is('post')){
			$data = $this->request->data['Credit'];

			$email = new CakeEmail('smtp');
			$email->from(array('pcredit@astanacreative.kz' => 'Микрокредитование'))
			->to('pcredit@astanacreative.kz')
			->subject('Новая заявка с сайта');
			$message = 'ФИО: '. $this->request->data['Credit']['name'];
			$message .= 'Дата рождения: '. $this->request->data['Credit']['berth'];
			$message .= ' Телефон: '. $this->request->data['Credit']['phone'];
			$message .= ' e-mail: '. $this->request->data['Credit']['email'];
			$message .= ' Желаемая сумма займа: '. $this->request->data['Credit']['other_amount'];
			$message .= ' Срок кредитования: '. $this->request->data['Credit']['srok'];
			$message .= ' Город: '. $this->request->data['Credit']['city'];
			$message .= ' Предмет залога: '. $this->request->data['Credit']['zalog'];
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