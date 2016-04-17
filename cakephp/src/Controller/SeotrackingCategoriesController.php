<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SeotrackingCategories Controller
 *
 * @property \App\Model\Table\SeotrackingCategoriesTable $SeotrackingCategories
 */
class SeotrackingCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $seotrackingCategories = $this->paginate($this->SeotrackingCategories);

        $this->set(compact('seotrackingCategories'));
        $this->set('_serialize', ['seotrackingCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Seotracking Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seotrackingCategory = $this->SeotrackingCategories->get($id, [
            'contain' => ['Seopatterns']
        ]);

        $this->set('seotrackingCategory', $seotrackingCategory);
        $this->set('_serialize', ['seotrackingCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seotrackingCategory = $this->SeotrackingCategories->newEntity();
        if ($this->request->is('post')) {
            $seotrackingCategory = $this->SeotrackingCategories->patchEntity($seotrackingCategory, $this->request->data);
            if ($this->SeotrackingCategories->save($seotrackingCategory)) {
                $this->Flash->success(__('The seotracking category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seotracking category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('seotrackingCategory'));
        $this->set('_serialize', ['seotrackingCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seotracking Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seotrackingCategory = $this->SeotrackingCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seotrackingCategory = $this->SeotrackingCategories->patchEntity($seotrackingCategory, $this->request->data);
            if ($this->SeotrackingCategories->save($seotrackingCategory)) {
                $this->Flash->success(__('The seotracking category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seotracking category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('seotrackingCategory'));
        $this->set('_serialize', ['seotrackingCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seotracking Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seotrackingCategory = $this->SeotrackingCategories->get($id);
        if ($this->SeotrackingCategories->delete($seotrackingCategory)) {
            $this->Flash->success(__('The seotracking category has been deleted.'));
        } else {
            $this->Flash->error(__('The seotracking category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
