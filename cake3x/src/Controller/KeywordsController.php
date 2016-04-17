<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Keywords Controller
 *
 * @property \App\Model\Table\KeywordsTable $Keywords
 */
class KeywordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Servers']
        ];
        $keywords = $this->paginate($this->Keywords);

        $this->set(compact('keywords'));
        $this->set('_serialize', ['keywords']);
    }

    /**
     * View method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keyword = $this->Keywords->get($id, [
            'contain' => ['Servers', 'Seopatterns']
        ]);

        $this->set('keyword', $keyword);
        $this->set('_serialize', ['keyword']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keyword = $this->Keywords->newEntity();
        if ($this->request->is('post')) {
            $keyword = $this->Keywords->patchEntity($keyword, $this->request->data);
            if ($this->Keywords->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
            }
        }
        $servers = $this->Keywords->Servers->find('list', ['limit' => 200]);
        $this->set(compact('keyword', 'servers'));
        $this->set('_serialize', ['keyword']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keyword = $this->Keywords->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keyword = $this->Keywords->patchEntity($keyword, $this->request->data);
            if ($this->Keywords->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
            }
        }
        $servers = $this->Keywords->Servers->find('list', ['limit' => 200]);
        $this->set(compact('keyword', 'servers'));
        $this->set('_serialize', ['keyword']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keyword = $this->Keywords->get($id);
        if ($this->Keywords->delete($keyword)) {
            $this->Flash->success(__('The keyword has been deleted.'));
        } else {
            $this->Flash->error(__('The keyword could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
