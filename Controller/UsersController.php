<?php


class UsersController extends AppController
{
    //put your code here

    var $uses = array("User", "Responsable");
    var $helpers = array("Html", "Form");
    var $paginate = array("order" => "username", "limit" => 5);
    var $nivs = array("A" => "Administrador", "U" => "Investigador", "D" => "Digitador");
    const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
    const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';

    public function home()
    {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }



    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }



    function edit($id = null)
    {

        if (isset($this->data) && !empty($this->data)) {

            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            try {
                $this->User->save($this->data);
            } catch (\Exception $e) {
            }
            $this->redirect("admin");
            //return $this->redirect(array('action' => 'admin'));

        } else {

            $this->set("nivs", $this->nivs);

            $this->set("datos", $this->User->find("first", array("conditions" => array("User.id" => $id))));

            $this->Session->setFlash("ACTUALIZACION DE USUARIOS");
        }
    }




    function delete($id = null)
    {
        try {
            $this->User->delete($id);
        } catch (\Exception $e) {
        }
        $this->redirect("admin");
    }


    function login()
    {
        if ($this->request->is('post')) {

            if ((isset($this->data)) && (!empty($this->data))) {
                $r = $this->User->find("first", array(
                    "conditions" => array(
                        "username" => $this->data["User"]["username"],
                        "password" => md5($this->data["User"]["password"])
                    )
                ));

                if (isset($r) && !empty($r)) {
                    $this->Session->write("usr", $r["User"]["username"]);
                    $this->Session->write("nvl", $r["User"]["nivel"]);

                    

                    $responsableId = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.numero' => $r['User']['username']],
                        'fields' => ['Responsable.id', 'Responsable.nombres'],
                        'recursive' => -1
                    ]);

                    $auxUser = [
                        'username' => $r["User"]["username"],
                        'password' => $r["User"]["password"],
                        'group_id' => $r["User"]["group_id"],
                        'responsable_id' => isset($responsableId['Responsable']['id']) ? $responsableId['Responsable']['id'] : 169,
                        'nombre_responsable' => isset($responsableId['Responsable']['nombres']) ? $responsableId['Responsable']['nombres'] : 'LECTOR SISTEMA',
                    ];


                    $this->Auth->login($auxUser);
                    //$this->redirect("bienvenida");
                    if ($this->Session->read('Auth.User')) {
                        $this->Session->setFlash('Acceso exitoso, bienvenido', 'flash_custom',     array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
                        // return $this->redirect('controller' => 'orders', 'action' => 'thanks');
                        //$this->redirect("home");
                        return $this->redirect(
                            array('controller' => 'Familias', 'action' => 'index')
                            );
                    }
                } else {
                    $this->Session->setFlash('Por favor verifique sus credenciales', 'default', array('class' => self::ALERT_ERROR_CLASS));
                    //$this->Session->setFlash("SIN ACCESO AL SISTEMA");                
                }
            } else {
                //$this->Session->setFlash("SIN ACCESO AL SISTEMA");
                // echo "<script> alert('SIN ACCESO AL SISTEMA'); </script>";
            }

            $this->layout = 'login';
        }
    }


    function logout()
    {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }



    function bienvenida()
    {
        $this->Session->setFlash("Bienvenid@s");
    }



    function salir()
    {
        $this->Session->destroy();
        $this->Auth->logout();
        $this->redirect("login");
    }



    function admin()
    {
        $r = $this->paginate("User");
        $this->set("usrs", $r);
        $this->set("nivs", $this->nivs);
        $this->Session->setFlash("ADMINISTRACION DE USUARIOS");
    }


    public function beforefilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function initDB()
    {
        $group = $this->User->Group;

        // Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');
        //$this->Acl->allow($group, 'controllers/users/delete');
        // $this->Acl->allow($group, 'controllers/actas/delete');
        //$this->Acl->deny($group, 'controllers/Productos/smsedit');

        // allow managers to posts and widgets
        $group->id = 2;
        //$this->Acl->deny($group, 'controllers');       

        /* $this->Acl->deny($group, 'controllers/Plsesiones/edit');
       $this->Acl->deny($group, 'controllers/Plsesiones/editanexo');
       $this->Acl->deny($group, 'controllers/Plsesiones/add');
       $this->Acl->deny($group, 'controllers/infoeventos/add');  
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/Procesoregistros/add');
       $this->Acl->deny($group, 'controllers/Proactividades/edit');      
       $this->Acl->deny($group, 'controllers/Procesoregistros/edit');
       $this->Acl->deny($group, 'controllers/Proactividades/add');
       $this->Acl->deny($group, 'controllers/Actividades/add');
       $this->Acl->deny($group, 'controllers/infoeventos/index');   
       $this->Acl->deny($group, 'controllers/infoeventos/editanexo'); 
       $this->Acl->deny($group, 'controllers/infoeventos/add'); 
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/SistematizacionProcesosViewTests/add');       
       $this->Acl->deny($group, 'controllers/Productos/add');
       $this->Acl->deny($group, 'controllers/Productos/edit');
       $this->Acl->deny($group, 'controllers/Productos/editpic');
       $this->Acl->deny($group, 'controllers/Productos/editanexo');
       $this->Acl->deny($group, 'controllers/Users/edit');
       $this->Acl->deny($group, 'controllers/Users/admin');
       $this->Acl->deny($group, 'controllers/Users/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/edit');
       $this->Acl->deny($group, 'controllers/Plsmomentos/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/delete');*/












        // allow users to only add and edit on posts and widgets
        $group->id = 3;

        // $this->Acl->allow($group, 'controllers/familias/index');
        // $this->Acl->allow($group, 'controllers');
        /*$this->Acl->deny($group, 'controllers/familias/delete');
        $this->Acl->deny($group, 'controllers/sociambientals/delete');
        $this->Acl->deny($group, 'controllers/adolescencias/delete');
        $this->Acl->deny($group, 'controllers/canalizacions/delete');
        $this->Acl->deny($group, 'controllers/primerainfancias/delete');
        $this->Acl->deny($group, 'controllers/infancias/delete');
        $this->Acl->deny($group, 'controllers/juventudadultos/delete');
        $this->Acl->deny($group, 'controllers/responsables/delete');
        $this->Acl->deny($group, 'controllers/users/add');
        $this->Acl->deny($group, 'controllers/users/edit');
        $this->Acl->deny($group, 'controllers/users/admin');
        $this->Acl->deny($group, 'controllers/users/delete');
        $this->Acl->allow($group, 'controllers/adolescencias/edit1');
        $this->Acl->allow($group, 'controllers/primerainfancias/edit1');
        $this->Acl->allow($group, 'controllers/infancias/edit1');
        $this->Acl->allow($group, 'controllers/juventudadultos/edit1');
        $this->Acl->allow($group, 'controllers/observacions/addanexo');
        $this->Acl->allow($group, 'controllers/observacions/editanexo');*/


















        // allow basic users to log out
        //$this->Acl->allow($group, 'controllers/users/logout');

        // we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }
}
