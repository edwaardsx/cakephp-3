<?php 
    namespace App\Controller;
    
    use App\Controller\AppController;
    use Cake\ORM\TableRegistry;

    class ProductsTableController extends AppController{

        public function initialize() {
            parent::initialize();
            $this->loadComponent('RequestHandler');
            $this->loadComponent('Flash');
        }

        public function index() {
            $products = $this->paginate($this->Products);
            $this->set(compact('products'));
            $productUnitOfMeasures = $this->paginate($this->ProductUnitOfMeasures);
            $this->set(compact('productUnitOfMeasures'));
        }

        function home() {
        }

        function view($id = null, $prodcode = null) {
            $product = TableRegistry::getTableLocator()->get('ProductsTable')->get($id, [
                'contain' => [],
            ]);

            $this->set('product', $product);

            $productUnitOfMeasuresTblFetch = $this->loadModel('ProductsUnitOfMeasure');

            $productUnitOfMeasures = $productUnitOfMeasuresTblFetch
            ->find()
            ->where(['product_code =' => $prodcode])
            ->order(['id' => 'ASC']);

            echo $prodcode;

            $this->set(compact('productUnitOfMeasures'));
            $this->set('_serialize', array('productUnitOfMeasures'));
            $this->set('prodcode', $prodcode);
    
            $this->set(compact('product', $product));
            $this->set('_serialize', array('product'));
        }

        function listuom($prodcode = null) {

            $productUnitOfMeasuresTblFetch = $this->loadModel('ProductsUnitOfMeasure');

            $productUnitOfMeasures = $productUnitOfMeasuresTblFetch
            ->find()
            ->where(['product_code =' => $prodcode])
            ->order(['id' => 'ASC']);

            $this->set(compact('productUnitOfMeasures', $productUnitOfMeasures));
            $this->set('_serialize', array('productUnitOfMeasures'));
        }

        function viewuom($id = null) {
            $result = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->get($id, [
                'contain' => [],
            ]);
    
            $this->set('ProductsUnitOfMeasure', $result);
            $this->set(compact('result', $result));
            $this->set('_serialize', array('result'));
        }

        function tablelist() {
            $products = TableRegistry::getTableLocator()->get('ProductsTable')->find('all');
            $this->set(compact('products', $products));
            $this->set('_serialize', array('products'));
        }

        function listalluom() {
            $products = $this->paginate(TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure'));
            $this->set(compact('products', $products));
            $this->set('_serialize', array('products'));
        }

        public function insertLogs() {
            $res = array ();
            $logs = TableRegistry::getTableLocator()->get('Logs')->newEntity();
            if ($this->request->is('post')) {
                $logs = TableRegistry::getTableLocator()->get('Logs')->patchEntity($logs, $this->request->getData());
                if (TableRegistry::getTableLocator()->get('Logs')->save($logs)) {
                    $res['status'] = 1;
                    $res['msg'] = 'Logs has been saved.';
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'Logs could not be saved. Please try again.';
                }
            }
            $this->set(compact('res'));
            $this->set('_serialize', ['res']);
        }

        public function add() {
            $res = array ();
            $product = TableRegistry::getTableLocator()->get('ProductsTable')->newEntity();

            if ($this->request->is('post')) {

                $product = TableRegistry::getTableLocator()->get('ProductsTable')->patchEntity($product, $this->request->getData());

                if (TableRegistry::getTableLocator()->get('ProductsTable')->save($product)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The product has been saved.';
                    $this->Flash->success(__('The product has been saved.'));
                    return $this->redirect(['action' => 'adduom']);
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'The product could not be saved. Please try again.';
                    $this->Flash->error(__('The product could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('res'));
            $this->set('_serialize', ['res']);
            $this->set(compact('product'));
            $category = TableRegistry::getTableLocator()->get('UnitsOfMeasures')->newEntity();
            $this->set(compact('category'));
        }

        public function addUOM($prodcode = null) {
            $res = array ();
            $products2 = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->newEntity();

            if ($this->request->is('post')) {
                $products2 = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->patchEntity($products2, $this->request->getData());

                if (TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->save($products2)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The product has been saved.';

                    $this->Flash->success(__('The product unit of measure has been saved.'));

                    return $this->redirect(['action' => 'tablelist']);
                
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'The product could not be saved. Please try again.';
                    $this->Flash->error(__('The product unit of measure could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('res'));
            $this->set('_serialize', ['res']);
            $this->set(compact('products2'));
            $this->set("uomcode", $prodcode);

            $prodcode = TableRegistry::get('ProductsTable');
            $result=$prodcode->find('list', ['valueField' => 'product_code','keyField' => 'product_code']);

            $this->set('dropdownvalue',$result);

            $categ = TableRegistry::get('UnitsOfMeasures');
            $categResult=$categ->find('list', ['valueField' => 'categories','keyField' => 'categories']);
 
            $this->set('categdropdown',$categResult);
        }

        public function addcategs() {

            $res = array ();
            $categs = TableRegistry::getTableLocator()->get('UnitsOfMeasures')->newEntity();

            if ($this->request->is('post')) {

                $categs = TableRegistry::getTableLocator()->get('UnitsOfMeasures')->patchEntity($categs, $this->request->getData());
                if (TableRegistry::getTableLocator()->get('UnitsOfMeasures')->save($categs)) {
                    $this->Flash->success(__('Unit of measure has been saved.'));
                    
                    $res['status'] = 1;
                    $res['msg'] = 'The product has been saved.';
                    return $this->redirect(['action' => 'addcategs']);
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'The product could not be saved. Please try again.';
                }
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
            $this->set(compact('categs'));
            $this->set(compact('res'));
            $this->set('_serialize', ['res']);
        }

        public function listcategs() {
            $uom = $this->paginate(TableRegistry::getTableLocator()->get('UnitsOfMeasures'));

            $this->set(compact('uom', $uom));
            $this->set('_serialize', array('uom'));
        }

        public function deletecategs($categ = null) {
            $this->request->allowMethod(['post', 'delete']);
            $prodTable = TableRegistry::getTableLocator()->get('UnitsOfMeasures');
            $prodTable->deleteAll(array('UnitsOfMeasures.categories'=>$categ));
        }

        public function viewadduom() {
        }

        public function deleteview() {
            $prodcode = TableRegistry::get('ProductsTable');
            $result=$prodcode->find('list', ['keyField' => 'id','valueField' => 'product_code']);
            $this->set('productcode',$result);
        }

        public function deleterecord($id = null, $prodcode = null) {
            $res = array ();
           
            $product = TableRegistry::getTableLocator()->get('ProductsTable')->get($id);

            if (TableRegistry::getTableLocator()->get('ProductsTable')->delete($product)) {
                $res['status'] = 1;
                $res['msg'] = 'The product has been deleted';
                $this->Flash->success(__('The product has been deleted.'));
            } else {
                $res['status'] = 1;
                $res['msg'] = 'The product cannot be deleted';
                $this->Flash->error(__('The product could not be deleted. Please, try again.'));
            }
            $this->set(compact('res'));
            $this->set('_serialize',['res']);
            $this->massdelete($product->product_code);
        }

        public function massdelete($prodCode = null) {
            $prodTable = TableRegistry::get('ProductsUnitOfMeasure');
            $prodTable->deleteAll(/*$prod*/array('ProductsUnitOfMeasure.product_code'=>$prodCode));

            echo "Product deleted successfully.";

            return $this->redirect(['action' => 'tablelist']);
        }

        public function deleteuomrecord($id = null) {

            $res = array ();

            $product = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->get($id);
            if (TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->delete($product)) {
                $res['status'] = 1;
                $res['msg'] = 'The product has been deleted';
                $this->Flash->success(__('The product has been deleted.'));

            } else {
                $this->Flash->error(__('The product could not be deleted. Please, try again.'));
                $res['status'] = 1;
                $res['msg'] = 'The product cannot be deleted';
            }
            $this->set(compact('res'));
            $this->set('_serialize',['res']);
            return $this->redirect(['action' => 'tablelist']);
        }

        public function edit($id = null) {
            $res = array ();
            $product = TableRegistry::getTableLocator()->get('ProductsTable')->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $product = TableRegistry::getTableLocator()->get('ProductsTable')->patchEntity($product, $this->request->getData());
                if (TableRegistry::getTableLocator()->get('ProductsTable')->save($product)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The product has been updated';
                    
                    $this->Flash->success(__('The product has been saved.'));

                    return $this->redirect(['action' => 'tablelist']);
    
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'The product cannot be updated';
                }
            }
            $this->set(compact('product'));
            $this->set(compact('res'));
            $this->set('_serialize',['res']);
        }

        public function edituom($id = null){
            $res = array ();

            $product3 = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->get($id, [
                'contain' => [],
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $product3 = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->patchEntity($product3, $this->request->getData());
                if (TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure')->save($product3)) {

                    $res['status'] = 1;
                    $res['msg'] = 'The product has been updated';
                    
                    $this->Flash->success(__('The product has been saved.'));
                    return $this->redirect(['action' => 'tablelist']);
                
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'The product cannot be updated';
                    $this->Flash->error(__('The product could not be saved. Please, try again.'));

                }
            }
            $this->set(compact('product3'));
            $this->set(compact('res'));
            $this->set('_serialize',['res']);
        }

        public function devs() {
        }

    }
?>