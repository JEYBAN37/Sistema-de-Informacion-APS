<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

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
    public $components = array(
        'RequestHandler', 'Session', 'Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Acl.Actions' => array('actionPath' => 'controllers', 'userModel' => 'Users')
            ), array(
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
