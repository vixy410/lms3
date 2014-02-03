<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('delivery_note');
		echo $this->Form->input('mop');
		echo $this->Form->input('dog');
		echo $this->Form->input('quantity');
		echo $this->Form->input('unit_rate');
		echo $this->Form->input('amount');
		echo $this->Form->input('final_amount');
		echo $this->Form->input('sr');
		echo $this->Form->input('other_ref');
		echo $this->Form->input('account_id');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('pin');
		echo $this->Form->input('country');
		echo $this->Form->input('bpo');
		echo $this->Form->input('dated');
		echo $this->Form->input('ddn');
		echo $this->Form->input('dated2');
		echo $this->Form->input('despatched_through');
		echo $this->Form->input('destination');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
