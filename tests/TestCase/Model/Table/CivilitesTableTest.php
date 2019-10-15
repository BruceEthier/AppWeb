<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivilitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivilitesTable Test Case
 */
class CivilitesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivilitesTable
     */
    public $Civilites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Civilites',
        'app.Employes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Civilites') ? [] : ['className' => CivilitesTable::class];
        $this->Civilites = TableRegistry::getTableLocator()->get('Civilites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Civilites);

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
