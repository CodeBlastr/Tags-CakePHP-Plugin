<div class="tags form">
	<?php echo $this->Form->create('Tag');?>
	 		<legend><?php echo __('Add Tag'); ?></legend>
			<div class="text-muted">Tags <small>(list of tags separated by comma)</small></div>
		<?php echo $this->Form->input('tags', array('label' => false, 'data-role' => 'tagsinput')); ?>
	<?php echo $this->Form->end(__d('tags', 'Submit'));?>
</div>

<?php
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Tags',
		'items' => array(
			 $this->Html->link(__('List'), array('action' => 'index')),
			 )
		)
	)));