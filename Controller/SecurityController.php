<?php



class SecurityController extends AppController {

    //put your code here

   

    public function noaccess() {
        $this->Session->setFlash(__('Privilegio de acceso'));
    }

    }
        