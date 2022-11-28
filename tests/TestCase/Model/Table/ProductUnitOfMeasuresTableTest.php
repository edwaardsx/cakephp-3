<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductUnitOfMeasuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductUnitOfMeasuresTable Test Case
 */
class ProductUnitOfMeasuresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductUnitOfMeasuresTable
     */
    public $ProductUnitOfMeasures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductUnitOfMeasures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductUnitOfMeasures') ? [] : ['className' => ProductUnitOfMeasuresTable::class];
        $this->ProductUnitOfMeasures = TableRegistry::getTableLocator()->get('ProductUnitOfMeasures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductUnitOfMeasures);

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
