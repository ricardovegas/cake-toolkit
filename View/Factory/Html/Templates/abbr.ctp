<abbr id="<?php echo $this->getId(); ?>"<?php echo $this->parseAttributes(array('title')); ?><?php echo $this->parseClass(); ?>><?php echo (string) $this->text . $this->renderChildren(); ?></abbr>
<?php echo $this->parseEvents(); ?>
