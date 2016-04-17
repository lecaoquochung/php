<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeywordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeywordsTable Test Case
 */
class KeywordsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KeywordsTable
     */
    public $Keywords;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.keywords',
        'app.servers',
        'app.seopatterns',
        'app.seotracking_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Keywords') ? [] : ['className' => 'App\Model\Table\KeywordsTable'];
        $this->Keywords = TableRegistry::get('Keywords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keywords);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
