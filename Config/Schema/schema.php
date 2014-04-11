<?php 
class TagsSchema extends CakeSchema {

	public $renames = array();

	public function __construct($options = array()) {
		parent::__construct();
	}

	public function before($event = array()) {
		App::uses('UpdateSchema', 'Model'); 
		$this->UpdateSchema = new UpdateSchema;
		$before = $this->UpdateSchema->before($event);
		return $before;
	}

	public function after($event = array()) {
		$this->UpdateSchema->rename($event, $this->renames);
		$this->UpdateSchema->after($event);
	}

/**
 * Schema for taggeds table
 *
 * @var array
 * @access public
 */
    public $tagged = array(
        'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
        'foreign_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
        'tag_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
        'model' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
        'language' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'key' => 'index'),
        'times_tagged' => array('type' => 'integer', 'null' => false, 'default' => '1'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'UNIQUE_TAGGING' => array('column' => array('model', 'foreign_key', 'tag_id', 'language'), 'unique' => 1),
            'INDEX_TAGGED' => array('column' => 'model', 'unique' => 0),
            'INDEX_LANGUAGE' => array('column' => 'language', 'unique' => 0)
        )
    );

/**
 * Schema for tags table
 *
 * @var array
 * @access public
 */
    public $tags = array(
        'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
        'identifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'key' => 'index'),
        'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30),
        'keyname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'UNIQUE_TAG' => array('column' => array('identifier', 'keyname'), 'unique' => 1)
        )
    );
}
