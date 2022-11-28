<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductUnitOfMeasures Controller
 *
 * @property \App\Model\Table\ProductUnitOfMeasuresTable $ProductUnitOfMeasures
 *
 * @method \App\Model\Entity\ProductUnitOfMeasure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductUnitOfMeasuresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $productUnitOfMeasures = $this->paginate($this->ProductUnitOfMeasures);

        $this->set(compact('productUnitOfMeasures'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Unit Of Measure id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productUnitOfMeasure = $this->ProductUnitOfMeasures->get($id, [
            'contain' => [],
        ]);

        $this->set('productUnitOfMeasure', $productUnitOfMeasure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productUnitOfMeasure = $this->ProductUnitOfMeasures->newEntity();
        if ($this->request->is('post')) {
            $productUnitOfMeasure = $this->ProductUnitOfMeasures->patchEntity($productUnitOfMeasure, $this->request->getData());
            if ($this->ProductUnitOfMeasures->save($productUnitOfMeasure)) {
                $this->Flash->success(__('The product unit of measure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product unit of measure could not be saved. Please, try again.'));
        }
        $this->set(compact('productUnitOfMeasure'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Unit Of Measure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productUnitOfMeasure = $this->ProductUnitOfMeasures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productUnitOfMeasure = $this->ProductUnitOfMeasures->patchEntity($productUnitOfMeasure, $this->request->getData());
            if ($this->ProductUnitOfMeasures->save($productUnitOfMeasure)) {
                $this->Flash->success(__('The product unit of measure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product unit of measure could not be saved. Please, try again.'));
        }
        $this->set(compact('productUnitOfMeasure'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Unit Of Measure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productUnitOfMeasure = $this->ProductUnitOfMeasures->get($id);
        if ($this->ProductUnitOfMeasures->delete($productUnitOfMeasure)) {
            $this->Flash->success(__('The product unit of measure has been deleted.'));
        } else {
            $this->Flash->error(__('The product unit of measure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
