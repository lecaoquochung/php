<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KeywordsFixture
 *
 */
class KeywordsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'UserID' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'server_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Keyword' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Url' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Engine' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'g_local' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cost' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Price' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'limit_price' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'limit_price_group' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'set limit price group: 1,2,3', 'precision' => null, 'autoIncrement' => null],
        'upday' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'fixed' => null],
        'goukeifee' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sengoukeifee' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '$sensengoukeifee' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Enabled' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'Strict' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'Extra' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'start' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rankstart' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rankend' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'kaiyaku_reason' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'middle' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'middleinfo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'seika' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nocontract' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'csv_type' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '[1=直営,2=直営2 , 3=代理店,4=ビスカス,5=アサミ,6=エニー]', 'precision' => null, 'autoIncrement' => null],
        'penalty' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'service' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mobile' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'c_logic' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Ranking restricted to company logic', 'precision' => null],
        'sales' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sitename' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => 'CSV', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'ke' => ['type' => 'index', 'columns' => ['UserID', 'Enabled'], 'length' => []],
            'Price' => ['type' => 'index', 'columns' => ['Price'], 'length' => []],
            'Engine' => ['type' => 'index', 'columns' => ['Engine'], 'length' => []],
            'Keyword' => ['type' => 'fulltext', 'columns' => ['Keyword'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ID' => 1,
            'UserID' => 1,
            'server_id' => 1,
            'Keyword' => 'Lorem ipsum dolor sit amet',
            'Url' => 'Lorem ipsum dolor sit amet',
            'Engine' => 1,
            'g_local' => 'Lorem ip',
            'cost' => 1,
            'Price' => 1,
            'limit_price' => 1,
            'limit_price_group' => 1,
            'upday' => 'Lorem ipsum dolor sit amet',
            'goukeifee' => 1,
            'sengoukeifee' => 1,
            '$sensengoukeifee' => 1,
            'Enabled' => 1,
            'Strict' => 1,
            'Extra' => 1,
            'start' => 1,
            'rankstart' => 1,
            'rankend' => 1,
            'kaiyaku_reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'middle' => 'Lorem ipsum dolor sit amet',
            'middleinfo' => 1,
            'seika' => 1,
            'nocontract' => 1,
            'csv_type' => 1,
            'penalty' => 1,
            'service' => 1,
            'mobile' => 1,
            'c_logic' => 1,
            'sales' => 1,
            'created' => '2016-03-30 09:47:38',
            'updated' => '2016-03-30 09:47:38',
            'sitename' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
