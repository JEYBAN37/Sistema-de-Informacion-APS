<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**

 * Application level Controller

 *

 * This file is application-wide controller file. You can put all

 * application-wide controller-related methods here.

 *

 * PHP 5

 *

 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)

 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 *

 * Licensed under The MIT License

 * For full copyright and license information, please see the LICENSE.txt

 * Redistributions of files must retain the above copyright notice.

 *

 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 * @link          http://cakephp.org CakePHP(tm) Project

 * @package       app.Controller

 * @since         CakePHP(tm) v 0.2.9

 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)

 */
App::uses('Controller', 'Controller');

/**

 * Application Controller

 *

 * Add your application-wide methods in the class below, your controllers

 * will inherit them.

 *

 * @package		app.Controller

 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller

 */
class AppController extends Controller
{

    //var $components = array("Auth", "Session");

    public $components = array(
        'RequestHandler',
        'Session',
        'Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Acl.Actions' => array('actionPath' => 'controllers', 'userModel' => 'Users')
            ),
            array(
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'md5'
                        //'passwordHasher' => array(
                        //    'className' => 'Simple',
                        //    'hashType' => 'md5'
                        //)
                    )
                )
            )
        ),
    );


    /*public $components = array( 'Session', 'Auth' => array( 'loginAction' => array('controller' => 'accounts', 'action' => 'login'), 'loginRedirect' => array('controller' => 'accounts', 'action' => 'admin'), 'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'), 'authenticate' => array ( 'Custom' => array( 'userModel' => 'Account', 'fields' => array('username' => 'id'), ) ), ) );*/


    /* public $components = array(
    'Auth' => array(
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => array(
                    'className' => 'Simple',
                    'hashType' => 'md5'
                )
            )
        )
    )
);*/


    function beforeFilter()
    {

        parent::beforeFilter();

        $this->Auth->fields = array(
            "username" => "username",
            "password" => "password"
        );

        $this->Auth->authorize = array(
            'Controller',
            'Actions' => array('actionPath' => 'controllers')
        );

        $this->Auth->authenticate = array('Form' => array('fields' => array('username' => 'name', 'password' => 'password')));

        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
            'controller' => 'users',
            'action' => 'logout'
        );

        $this->Auth->allow("");
    }

    function beforeRender()
    {
        parent::beforeRender();
    }

    public function isAuthorized($user)
    {
        // Default deny
        return false;
    }

    public function _filter()
    {
        $uid = $this->Auth->user('id');
        //        if (!$this->params['named']['page']) {
        //            $this->Session->delete($this->name . $uid);
        //        }
        if (!empty($this->request->data)) {
            $search = $this->request->data;
        } elseif ($this->Session->check($this->name . $uid)) {
            $search = $this->Session->read($this->name . $uid);
        }
        if (isset($search)) {
            $this->Session->write($this->name . $uid, $search);
            return $search;
        }
        return null;
    }
}
