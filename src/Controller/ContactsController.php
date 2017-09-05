<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
            'conditions' => [
	            'user_id' => $this->Auth->user('id')
            ]
        ];
        $contacts = $this->paginate($this->Contacts);

	    $title = 'Sua lista de Contatos';
        $this->set(compact('contacts', 'title'));
        $this->set('_serialize', ['contacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('contact', $contact);
        $this->set('_serialize', ['contact']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            $contact->user_id = $this->Auth->user('id');
            if ($this->Contacts->save($contact)) {
                $this->Flash->success('Seu contato foi salvo com sucesso.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível cadastrar esse novo contato.');
        }
        $users = $this->Contacts->Users->find('list', ['limit' => 200]);

        $title = 'Novo Contato';
        $this->set(compact('contact', 'users', 'title'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success('Alterações do contato foram realizadas.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Não foi possível alterar o contato.');
        }
        $users = $this->Contacts->Users->find('list', ['limit' => 200]);
        $title = 'Alteração de Contato';
        $this->set(compact('contact', 'users', 'title'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);

        if ($this->Contacts->delete($contact)) {
            $this->Flash->success('O contato foi excluído.');
        } else {
            $this->Flash->error('Não foi possível excluir o contato.');
        }

        return $this->redirect(['action' => 'index']);
    }
}
