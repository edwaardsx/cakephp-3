<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsUnitOfMeasureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsUnitOfMeasureTable Test Case
 */
class ProductsUnitOfMeasureTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsUnitOfMeasureTable
     */
    public $ProductsUnitOfMeasure;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductsUnitOfMeasure',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductsUnitOfMeasure') ? [] : ['className' => ProductsUnitOfMeasureTable::class];
        $this->ProductsUnitOfMeasure = TableRegistry::getTableLocator()->get('ProductsUnitOfMeasure', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsUnitOfMeasure);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
