<?php /* Smarty version 2.6.31, created on 2020-11-25 09:53:39
         compiled from cache/modules/Import/custo_contactemail_addresses_non_primary.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['email_addresses_non_primary']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email_addresses_non_primary']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email_addresses_non_primary']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['email_addresses_non_primary']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['email_addresses_non_primary']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >