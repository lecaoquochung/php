<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seopatterns Controller
 *
 * @property \App\Model\Table\SeopatternsTable $Seopatterns
 */
class SeopatternsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Keywords', 'SeotrackingCategories']
        ];
        $seopatterns = $this->paginate($this->Seopatterns);

        $this->set(compact('seopatterns'));
        $this->set('_serialize', ['seopatterns']);
    }

    /**
     * View method
     *
     * @param string|null $id Seopattern id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seopattern = $this->Seopatterns->get($id, [
            'contain' => ['Keywords', 'SeotrackingCategories']
        ]);

        $this->set('seopattern', $seopattern);
        $this->set('_serialize', ['seopattern']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seopattern = $this->Seopatterns->newEntity();
        if ($this->request->is('post')) {
            $seopattern = $this->Seopatterns->patchEntity($seopattern, $this->request->data);
            if ($this->Seopatterns->save($seopattern)) {
                $this->Flash->success(__('The seopattern has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seopattern could not be saved. Please, try again.'));
            }
        }
        $keywords = $this->Seopatterns->Keywords->find('list', ['limit' => 200]);
        $seotrackingCategories = $this->Seopatterns->SeotrackingCategories->find('list', ['limit' => 200]);
        $this->set(compact('seopattern', 'keywords', 'seotrackingCategories'));
        $this->set('_serialize', ['seopattern']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seopattern id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seopattern = $this->Seopatterns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seopattern = $this->Seopatterns->patchEntity($seopattern, $this->request->data);
            if ($this->Seopatterns->save($seopattern)) {
                $this->Flash->success(__('The seopattern has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seopattern could not be saved. Please, try again.'));
            }
        }
        $keywords = $this->Seopatterns->Keywords->find('list', ['limit' => 200]);
        $seotrackingCategories = $this->Seopatterns->SeotrackingCategories->find('list', ['limit' => 200]);
        $this->set(compact('seopattern', 'keywords', 'seotrackingCategories'));
        $this->set('_serialize', ['seopattern']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seopattern id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seopattern = $this->Seopatterns->get($id);
        if ($this->Seopatterns->delete($seopattern)) {
            $this->Flash->success(__('The seopattern has been deleted.'));
        } else {
            $this->Flash->error(__('The seopattern could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
