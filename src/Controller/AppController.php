<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Utility\Inflector;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	// TODO : Next function: Check the views of the admin directory
	public $adminviews = [ 'UsersController.php', 'GroupsController.php' ];
	
	public $components = [
		'Acl' => [
			'className' => 'Acl.Acl'
		]
	];
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');		
		// $this->loadComponent('Auth', [
			// 'authenticate' => [
				// 'Form' => [
					// 'fields' => ['username' => 'username', 'password' => 'password']
				// ]
			// ]
		// ]);
		$this->loadComponent('Auth', [
			'authorize' => [
				'Acl.Actions' => ['actionPath' => 'controllers/']
			],
			'loginAction' => [
				'plugin' => false,
				'controller' => 'Users',
				'action' => 'login'
			],
			'loginRedirect' => [
				'plugin' => false,
				'controller' => 'Tests',
				'action' => 'index'
			],
			'logoutRedirect' => [
				'plugin' => false,
				'controller' => 'Users',
				'action' => 'login'
			],
			'unauthorizedRedirect' => [
				'controller' => 'Users',
				'action' => 'login',
				'prefix' => false
			],
			'authError' => 'You are not authorized to access that location.',
			'flash' => [
				'element' => 'error'
			]
		]);
    }

    public function beforeRender(Event $event)
    {
        if( $logged = $this->Auth->user() ) {
            $this->set( 'adminmenu', $this->__getAdminMenu() );
			$this->set( 'clientmenu', $this->__getClientMenu() );
        }
		
        $this->set( 'logged', $logged );
    }

    private function __getAdminMenu() {
        $files = scandir( '../src/Controller/' );
        $orderlyMainMenu = [];
        $disorganisedMainMenu = [];
        foreach( $files as $file ) {
            if( in_array($file, $this->adminviews) ) {
                $controller = explode('Controller.php', $file)[0];
                $_controller = mb_strtolower( $controller );
				if(!$this->Acl->check(array('Users' => array('id' => $this->Auth->user('id'))), $_controller.'/index'))
					continue;
                $item = [
                    'active' => $controller == $this->request->controller,
                    'controller' => $_controller,
                    'label' => Inflector::humanize( $controller ),
                    'iconclass' => 'fa-' . Inflector::singularize( $_controller )
                ];
                if( !empty($order) && in_array($_controller,$order) ) {
                    $orderlyMainMenu[ array_search($_controller,$order) ] = $item;
                }
                else {
                    $disorganisedMainMenu[] = $item;
                }
            }
        }
        ksort($orderlyMainMenu);
        return array_merge( $orderlyMainMenu ,$disorganisedMainMenu );
    }

	private function __getClientMenu() {
        $files = scandir( '../src/Controller/' );
        $ignore = [ '.', '..', 'Component', 'AppController.php', 'PagesController.php' ];
        //$order = [ 'users' ];
        $orderlyMainMenu = [];
        $disorganisedMainMenu = [];
        foreach( $files as $file ) {
            if( !in_array($file, $ignore) && !in_array($file, $this->adminviews)) {
                $controller = explode('Controller.php', $file)[0];
                $_controller = mb_strtolower( $controller );
				if(!$this->Acl->check(array('Users' => array('id' => $this->Auth->user('id'))), $_controller.'/index'))
					continue;
                $item = [
                    'active' => $controller == $this->request->controller,
                    'controller' => $_controller,
                    'label' => Inflector::humanize( $controller ),
                    'iconclass' => 'fa-' . Inflector::singularize( $_controller )
                ];
                if( !empty($order) && in_array($_controller,$order) ) {
                    $orderlyMainMenu[ array_search($_controller,$order) ] = $item;
                }
                else {
                    $disorganisedMainMenu[] = $item;
                }
            }
        }
        ksort($orderlyMainMenu);
        return array_merge( $orderlyMainMenu ,$disorganisedMainMenu );
    }
}
