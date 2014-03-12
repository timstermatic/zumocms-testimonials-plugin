<div>
<?php echo $this->Html->link('<i class="icon-plus-sign"></i> ' . __('Add a testimonial'), array('action'=>'create'), array('class'=>'btn pull-right', 'escape'=>false));?> 
<h3><i class="icon-comment"></i> <?php echo __('Testimonials')?></h3>
</div>
<?php echo $this->Session->flash()?>

<div class="pagination">
<?php echo $this->Paginator->numbers()?>
</div>

<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('cite','Citing');?></th>
	<th><?php echo $this->Paginator->sort('quote','Quote');?></th>
	<th><?php echo $this->Paginator->sort('published','Published');?></th>
	<th><?php echo __('Action')?></th>
</tr>
<?php foreach($testimonials as $t) { ?>
<tr>
<td><?php echo $t['Testimonial']['cite']?></td>
<td><?php echo $t['Testimonial']['quote']?></td>
<td>
<?php if(!empty($t['Testimonial']['published'])) { ?>
	<span class="badge badge-success"><i class="icon-ok-sign"></i></span>
<?php } ?>
</td>
<td>
<?php echo $this->Html->link(__('<i class="icon-pencil"></i>'), array('action'=>'edit', $t['Testimonial']['id']), array('class'=>'btn btn-small', 'escape'=>false));?> 

<?php echo $this->Html->link(__('<i class="icon-trash"></i>'), array('action'=>'delete', $t['Testimonial']['id']), array('class'=>'btn btn-small', 'escape'=>false),__('Are you sure that you want to delete this testimonial?'));?> 
</td>
</tr>

<?php } ?>
</table>

<div class="pagination">
<?php echo $this->Paginator->numbers()?>
</div>
