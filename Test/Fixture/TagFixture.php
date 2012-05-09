<?php
/**
 * Copyright 2009-2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009-2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * TagFixture
 *
 * @package tags
 * @subpackage tags.tests.fixtures
 */
class TagFixture extends CakeTestFixture {

/**
 * Name
 *
 * @var string $name
 */
	public $name = 'Tag';

/**
 * Table
 *
 * @var string $table
 */
	public $table = 'tags';

	
/**
 * Import
 *
 * @var array
 */
	public $import = array('config' => 'Tags.Tag');

/**
 * Records
 *
 * @var array $records
 */
	public $records = array(
		array(
			'id'  => 'tag-1',
			'identifier'  => null,
			'name'  => 'CakePHP',
			'keyname'  => 'cakephp',
			'occurrence' => 1,
			'article_occurrence' => 1,
			'created'  => '2008-06-02 18:18:11',
			'modified'  => '2008-06-02 18:18:37'),
		array(
			'id'  => 'tag-2',
			'identifier'  => null,
			'name'  => 'CakeDC',
			'keyname'  => 'cakedc',
			'occurrence' => 1,
			'article_occurrence' => 1,
			'created'  => '2008-06-01 18:18:15',
			'modified'  => '2008-06-01 18:18:15'),
		array(
			'id'  => 'tag-3',
			'identifier'  => null,
			'name'  => 'CakeDC',
			'keyname'  => 'cakedc',
			'occurrence' => 1,
			'article_occurrence' => 1,
			'created'  => '2008-06-01 18:18:15',
			'modified'  => '2008-06-01 18:18:15'));

}
