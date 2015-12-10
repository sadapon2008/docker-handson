<?php
/**
 * Post Fixture
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
        public $fields = array(
                'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
                'title' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
                'body' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
                'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
                'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
                'indexes' => array(
                        'PRIMARY' => array('unique' => true, 'column' => 'id')
                ),
                'tableParameters' => array()
        );

/**
 * Records
 *
 * @var array
 */
        public $records = array(
                array(
                        'id' => 1,
                        'title' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                        'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                        'created' => '2015-11-30 12:28:07',
                        'modified' => '2015-11-30 12:28:07'
                ),
        );

}
