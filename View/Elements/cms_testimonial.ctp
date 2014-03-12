<?php echo $this->Form->create()?>
<?php echo $this->Form->input('Testimonial.quote', array('class'=>'editor, span6'))?>
<?php echo $this->Form->input('Testimonial.cite', array('class'=>'span5'))?>
<?php echo $this->Form->input('Testimonial.published', array('options'=>array(0=>'No', 1=>'Yes')))?>
<?php echo $this->Form->submit('Save', array('class'=>'btn'))?>
<?php echo $this->Form->end()?>
