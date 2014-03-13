<?php echo $this->Html->script('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
<?php echo $this->Html->css('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
<?php //echo $this->Form->create('Date Filter',array(
                                   // 'class' => 'form-inline',
                                   // 'role' => 'form',
                                   // 'inputDefaults' => array(
                                   //     'div' => 'form-group',
                                   //     'label'=>array('class'=>'sr-only'),
                                   //     'class' => 'form-control'
                                        //'between' => '<div class ="col-sm-10">',
                                        //'after' => '</div>'
                                        
                                        
                               //     )
                               // ));  ?>
<?php //echo $this->Form->input('from',array(
                                           // 'placeholder'=>'from',
                                           // 'type'=>'text',
    //'between'=>FALSE,
    //'after'=>FALSE
                                            //'label'=>array('class'=>'sr-only'),
                                            //"between"=>"<div class=' input-group date form_date col-md-5' data-date='' data-date-format='yyyy-mm-dd' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                                            //'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                           //<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                           // </div>',
                                           
                                    //)); ?>
<?php //echo $this->Form->input('to',array(
                                           // 'placeholder'=>'to',
                                            //'type'=>'text',
                                            //'label'=>'',
                                            //"between"=>"<div class='col-sm-10 input-group date form_date col-md-5' data-date='' data-date-format='yyyy-mm-dd' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                                            //'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                            //<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            //</div>',
                                            
                                    //)); ?>
<?php //echo $this->Form->submit('Search',array('class'=>'btn btn-default')); ?> 
<?php //echo $this->Form->end(); ?> 

<?php //echo $this->Form->submit('Search',array('class'=>'btn btn-default')) ?>

<?php //echo $this->Form->end(); ?>


<?php echo $this->Form->create('Lead', array(
    'url' => array(
        'controller' =>'leads',
        'action' =>'date_filter'),
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => false,
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'form-inline'
)); ?>
<div class="col-md-5">
	<?php echo $this->Form->input('closing_month', array(
	'type'=>'text',
                'name'=>'data[Lead][from]',
		'placeholder' => 'From',
                "between"=>"<div class=' input-group date form_date ' data-date='' data-date-format='yyyy-mm-dd' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>',
	)); ?>
</div>
<div class="col-md-5">
	<?php echo $this->Form->input('closing_month', array(
	'type'=>'text',
		'placeholder' => 'to',
            'name'=>'data[Lead][to]',
                "between"=>"<div class=' input-group date form_date ' data-date='' data-date-format='yyyy-mm-dd' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>',
	)); ?>
</div>
	<?php echo $this->Form->submit('Search', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
<?php echo $this->Form->end(); ?>

<script>
$('.form_date').datetimepicker({
language: 'fr',
weekStart: 1,
todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
});

</script>