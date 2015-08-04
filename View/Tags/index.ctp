<div class="tags index">
	<h2><?php echo __d('tags', 'Tags');?></h2>
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __d('tags', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
		));
		?>
	</p>
	<table cellpadding="0" cellspacing="0" class="table">
		<tr>
			<th><?php echo $this->Paginator->sort('identifier');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('keyname');?></th>
			<th class="actions"><?php echo __d('tags', 'Actions');?></th>
		</tr>
	<?php
	$i = 0;
	foreach ($tags as $tag):
	?>
		<tr>
			<td>
				<?php echo $tag['Tag']['identifier'] ? $tag['Tag']['identifier'] : '<i class="text-muted">none</i>'; ?>
			</td>
			<td>
				<?php echo $tag['Tag']['name']; ?>
			</td>
			<td>
				<?php echo $tag['Tag']['keyname']; ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__d('tags', 'View'), array('action' => 'view', $tag['Tag']['keyname']), array('class'=>'btn btn-default')); ?>
				<?php echo $this->Html->link(__d('tags', 'Edit'), array('action' => 'edit', $tag['Tag']['id']), array('class'=>'btn btn-sm btn-warning')); ?>
				<?php echo $this->Html->link(__d('tags', 'Delete'), array('action' => 'delete', $tag['Tag']['id']), array('class'=>'btn btn-xs btn-danger'), sprintf(__d('tags', 'Are you sure you want to delete # %s?'), $tag['Tag']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
<?php echo $this->element('paging'); ?>

<?php
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Tags',
		'items' => array(
			 $this->Html->link(__('New Tag'), array('action' => 'add')),
			 )
		)
	)));