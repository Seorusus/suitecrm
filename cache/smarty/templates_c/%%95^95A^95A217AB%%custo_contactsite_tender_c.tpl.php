<?php /* Smarty version 2.6.31, created on 2020-11-25 09:53:58
         compiled from cache/modules/Import/custo_contactsite_tender_c.tpl */ ?>

	<?php if (! empty ( $this->_tpl_vars['fields']['site_tender_c']['value'] )): ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['site_tender_c']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['site_tender_c']['name']; ?>
' size='30' 
	   maxlength='255' value='<?php echo $this->_tpl_vars['fields']['site_tender_c']['value']; ?>
' title='' tabindex='1'  >
	<?php else: ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['site_tender_c']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['site_tender_c']['name']; ?>
' size='30' 
	   maxlength='255'	   	   <?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> 
	    title='' tabindex='1'  >
	<?php endif; ?>