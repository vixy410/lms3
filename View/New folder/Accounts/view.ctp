<div class="accounts view">
<h2><?php echo __('Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['account_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($account['Account']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($account['Account']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leads'), array('controller' => 'leads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Leads'); ?></h3>
	<?php if (!empty($account['Lead'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Board Number'); ?></th>
		<th><?php echo __('Mobile Number'); ?></th>
		<th><?php echo __('Requirements'); ?></th>
		<th><?php echo __('Total Price Quoted'); ?></th>
		<th><?php echo __('Our Price'); ?></th>
		<th><?php echo __('Margin'); ?></th>
		<th><?php echo __('Closing Month'); ?></th>
		<th><?php echo __('Probablity'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date Added'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($account['Lead'] as $lead): ?>
		<tr>
			<td><?php echo $lead['id']; ?></td>
			<td><?php echo $lead['account_id']; ?></td>
			<td><?php echo $lead['name']; ?></td>
			<td><?php echo $lead['email']; ?></td>
			<td><?php echo $lead['board_number']; ?></td>
			<td><?php echo $lead['mobile_number']; ?></td>
			<td><?php echo $lead['requirements']; ?></td>
			<td><?php echo $lead['total_price_quoted']; ?></td>
			<td><?php echo $lead['our_price']; ?></td>
			<td><?php echo $lead['margin']; ?></td>
			<td><?php echo $lead['closing_month']; ?></td>
			<td><?php echo $lead['probablity']; ?></td>
			<td><?php echo $lead['status_id']; ?></td>
			<td><?php echo $lead['user_id']; ?></td>
			<td><?php echo $lead['date_added']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'leads', 'action' => 'view', $lead['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'leads', 'action' => 'edit', $lead['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'leads', 'action' => 'delete', $lead['id']), null, __('Are you sure you want to delete # %s?', $lead['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
