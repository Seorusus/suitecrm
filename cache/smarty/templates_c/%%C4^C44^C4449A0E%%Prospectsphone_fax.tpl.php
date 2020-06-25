<?php /* Smarty version 2.6.31, created on 2020-06-24 18:54:11
         compiled from cache/modules/Import/Prospectsphone_fax.tpl */ ?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']); ?>
<?php endif; ?>  

<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1'	  class="phone" >