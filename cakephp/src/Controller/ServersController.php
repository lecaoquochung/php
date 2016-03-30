<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servers Controller
 *
 * @property \App\Model\Table\ServersTable $Servers
 */
class ServersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $servers = $this->paginate($this->Servers);

        $this->set(compact('servers'));
        $this->set('_serialize', ['servers']);
    }

    /**
     * View method
     *
     * @param string|null $id Server id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $server = $this->Servers->get($id, [
            'contain' => ['Keywords']
        ]);

        $this->set('server', $server);
        $this->set('_serialize', ['server']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $server = $this->Servers->newEntity();
        if ($this->request->is('post')) {
            $server = $this->Servers->patchEntity($server, $this->request->data);
            if ($this->Servers->save($server)) {
                $this->Flash->success(__('The server has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The server could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('server'));
        $this->set('_serialize', ['server']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Server id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $server = $this->Servers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $server = $this->Servers->patchEntity($server, $this->request->data);
            if ($this->Servers->save($server)) {
                $this->Flash->success(__('The server has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The server could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('server'));
        $this->set('_serialize', ['server']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Server id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $server = $this->Servers->get($id);
        if ($this->Servers->delete($server)) {
            $this->Flash->success(__('The server has been deleted.'));
        } else {
            $this->Flash->error(__('The server could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
