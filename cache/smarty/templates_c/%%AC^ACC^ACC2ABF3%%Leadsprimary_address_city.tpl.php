<?php /* Smarty version 2.6.31, created on 2020-11-10 16:40:43
         compiled from cache/modules/Import/Leadsprimary_address_city.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_city']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_city']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['primary_address_city']['name']; ?>
' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >