<del id="<?php echo $this->getId(); ?>"<?php echo $this->parseAttributes(array('cite', 'datetime')); ?><?php echo $this->parseClass(); ?>><?php echo (string) $this->text . $this->renderChildren(); ?></del>
<?php echo $this->parseEvents(); ?>
