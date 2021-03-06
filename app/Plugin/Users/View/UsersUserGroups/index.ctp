<div class="UsersUserGroups index">
	<h2><?php echo __('Users, Groups');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('user_group_id');?></th>
			<th><?php echo $this->Paginator->sort('is_approved');?></th>
			<th><?php echo $this->Paginator->sort('is_moderator');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usersUserGroups as $usersUserGroup):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usersUserGroup['UsersUserGroup']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersUserGroup['User']['username'], array('controller' => 'users', 'action' => 'view', $usersUserGroup['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersUserGroup['UserGroup']['title'], array('controller' => 'user_groups', 'action' => 'view', $usersUserGroup['UserGroup']['id'])); ?>
		</td>
		<td><?php echo $usersUserGroup['UsersUserGroup']['is_approved']; ?>&nbsp;</td>
		<td><?php echo $usersUserGroup['UsersUserGroup']['is_moderator']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usersUserGroup['UsersUserGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usersUserGroup['UsersUserGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usersUserGroup['UsersUserGroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersUserGroup['UsersUserGroup']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->Element('paging'); ?>
</div>
<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Users, User Groups',
		'items' => array(
			$this->Html->link(__('New Group', true), array('action' => 'add'), array('class' => 'add')),
						 
			$this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index'), array('class' => 'index')),
			$this->Html->link(__('List Groups', true), array('controller' => 'user_groups', 'action' => 'index'), array('class' => 'index')),
			$this->Html->link(__('Add Group', true), array('controller' => 'user_groups', 'action' => 'add'), array('class' => 'add'))
			)
		),
	))); ?>