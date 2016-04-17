<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeopatternsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeopatternsTable Test Case
 */
class SeopatternsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeopatternsTable
     */
    public $Seopatterns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seopatterns',
        'app.keywords',
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
        $config = TableRegistry::exists('Seopatterns') ? [] : ['className' => 'App\Model\Table\SeopatternsTable'];
        $this->Seopatterns = TableRegistry::get('Seopatterns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seopatterns);

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
