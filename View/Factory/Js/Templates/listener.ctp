var node=<?php echo (isset($this->node) && is_object($this->node) && $this->node instanceof CtkBuildable)? 'document.getElementById("' . $this->node->getId() . '")' : 'window'; ?>;
if(node.addEventListener){node.addEventListener('<?php echo $this->type; ?>',function(){<?php echo $this->code; ?>},false);}else if(node.attachEvent){node.attachEvent('on<?php echo $this->type; ?>',function(){<?php echo (isset($this->code) && is_array($this->code))? implode(';', $this->code) : $this->code; ?>});}else{node['on<?php echo $this->type; ?>']=function(){<?php echo $this->code; ?>};}
