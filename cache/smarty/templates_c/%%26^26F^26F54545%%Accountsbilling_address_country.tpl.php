<?php /* Smarty version 2.6.31, created on 2020-06-23 13:00:24
         compiled from cache/modules/Import/Accountsbilling_address_country.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_country']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >