<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController
{

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('register', 'login');
    }

    public function index()
    {
    }

    public function register()
    {

        if ($this->request->is('post')) {

            $this->User->create();
            $this->User->set($this->request->data);

            unset($this->request->data['User']['confirm_password']);

            if ($this->User->validates()) {

                $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);


                if (!isset($this->request->data['User']['is_admin'])) {
                    $this->request->data['User']['is_admin'] = 0;
                }
                if (!isset($this->request->data['User']['status'])) {
                    $this->request->data['User']['status'] = 1;
                }

                if ($this->User->save($this->request->data)) {

                    $this->Auth->login($this->request->data['User']);
                    $this->Session->setFlash(__('Registration successful. Welcome!'));
                    return $this->redirect(array('action' => 'dashboard'));
                } else {
                    //debug($this->User->validationErrors);
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
            } else {
                $this->set('errors', $this->User->validationErrors);
            }
        }
    }

    public function dashboard()
    {
        $data =   $this->User->find('all', [
            'conditions' => [
                'User.id !=' => $this->Session->read('Auth.User.id'),
                'User.deleted ' => false
            ]
        ]);
        $this->set('data', $data);
    }

    public function delete($id)
    {
        $this->User->softDelete($id);
        $this->Session->setFlash(__('User deleted successfully.'));
        return $this->redirect(array('action' => 'dashboard'));
    }

    public function login()
    {

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
