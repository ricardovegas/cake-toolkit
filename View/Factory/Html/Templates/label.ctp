<label id="<?php echo $this->getId(); ?>"<?php echo $this->parseAttributes(array('for', 'form')); ?><?php echo $this->parseClass(); ?>><?php echo (string) $this->text . $this->renderChildren(); ?></label>
<?php echo $this->parseEvents(); ?>
