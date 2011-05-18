<?php
class AppController extends Controller {
    public $components = array(
		'Session',
		'Auth',
		'Cookie',
		'Email',
	);

	public $helpers = array(
		'Session',
		'Html',
		'Javascript',
		'Form',
		'Xml'
	);

	public $publicControllers = array('pages', 'app');

/**
 * Object constructor - Adds the Debugkit panel if in development mode
 *
 * @return void
 */
	public function __construct() {
		if (Configure::read('debug')) {
			$this->components[] = 'DebugKit.Toolbar';
		}
		parent::__construct();
	}

	public function beforeFilter() {
		$prefixes = Configure::read('Routing.prefixes');
		$admin = in_array('admin', $prefixes);
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'prefix' => $admin, $admin => false, 'plugin' => null);
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginError = __('Invalid username / password combination.  Please try again', true);
		$this->Auth->autoRedirect = false;

		$this->Cookie->name = 'goinggreenRememberMe';
		$this->Cookie->time = '1 Month';
		$cookie = $this->Cookie->read('User');

		if (!empty($cookie) && !$this->Auth->user()) {
			$data['User']['username'] = '';
			$data['User']['password'] = '';
			if (is_array($cookie)) {
				$data['User']['username'] = $cookie['username'];
				$data['User']['password'] = $cookie['password'];
			}
			if (!$this->Auth->login($data)) {
				$this->Cookie->destroy();
				$this->Auth->logout();
			}
		}
		if ($this->Auth->user()) {
			$this->set('userData', $this->Auth->user());
		}

		if (in_array(strtolower($this->params['controller']), $this->publicControllers)) {
            $this->Auth->allow('*');
        }
	}

	public function contact($mailingList = null) {
		$this->autoRender = false;
		if (!empty($this->data)) {
			$subject = 'Mailing List Request';
			$message = 'You will recieve monthly updates.';
			if (!$mailingList) {
				if (empty($this->data['name']) || (empty($this->data['email']) && empty($this->data['phone']))) {
					$message = 'Please include a way for us to reply.';
				} else {
					$message = 'Thank you for the inquiry.';
				}
				$subject = 'Contact Request';
			} else{
				if (empty($this->data['email']) || $this->data['email'] == 'Enter email for monthly updates.') {
					$message = '';
					$this->redirect($this->referer());
				}
			}
			$this->Session->setFlash($message);
			$this->Email->to = 'info@signsgoinggreen.com, jkmjones@gmail.com, neterslandreau@gmail.com';
			$this->Email->from = $this->data['email'];
			$this->Email->subject = $subject;
			$body = $this->data;
			$this->Email->send($body);
			$this->redirect($this->referer());
		}
	}
}
