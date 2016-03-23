<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cocktails Controller
 *
 * @property \App\Model\Table\CocktailsTable $Cocktails
 */
class CocktailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cocktails = $this->paginate($this->Cocktails);

        $this->set(compact('cocktails'));
        $this->set('_serialize', ['cocktails']);
    }

    /**
     * View method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cocktail = $this->Cocktails->get($id, [
            'contain' => []
        ]);

        $this->set('cocktail', $cocktail);
        $this->set('_serialize', ['cocktail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cocktail = $this->Cocktails->newEntity();
        if ($this->request->is('post')) {
            $cocktail = $this->Cocktails->patchEntity($cocktail, $this->request->data);
            if ($this->Cocktails->save($cocktail)) {
                $this->Flash->success(__('The cocktail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cocktail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cocktail'));
        $this->set('_serialize', ['cocktail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cocktail = $this->Cocktails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cocktail = $this->Cocktails->patchEntity($cocktail, $this->request->data);
            if ($this->Cocktails->save($cocktail)) {
                $this->Flash->success(__('The cocktail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cocktail could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cocktail'));
        $this->set('_serialize', ['cocktail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cocktail = $this->Cocktails->get($id);
        if ($this->Cocktails->delete($cocktail)) {
            $this->Flash->success(__('The cocktail has been deleted.'));
        } else {
            $this->Flash->error(__('The cocktail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
