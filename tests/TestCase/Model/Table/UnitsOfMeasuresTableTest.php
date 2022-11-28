<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnitsOfMeasuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnitsOfMeasuresTable Test Case
 */
class UnitsOfMeasuresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnitsOfMeasuresTable
     */
    public $UnitsOfMeasures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UnitsOfMeasures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UnitsOfMeasures') ? [] : ['className' => UnitsOfMeasuresTable::class];
        $this->UnitsOfMeasures = TableRegistry::getTableLocator()->get('UnitsOfMeasures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UnitsOfMeasures);

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
