<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnitsOfMeasureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnitsOfMeasureTable Test Case
 */
class UnitsOfMeasureTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnitsOfMeasureTable
     */
    public $UnitsOfMeasure;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UnitsOfMeasure',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UnitsOfMeasure') ? [] : ['className' => UnitsOfMeasureTable::class];
        $this->UnitsOfMeasure = TableRegistry::getTableLocator()->get('UnitsOfMeasure', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UnitsOfMeasure);

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
