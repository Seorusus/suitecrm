<?php /* Smarty version 2.6.31, created on 2020-06-23 12:53:25
         compiled from cache/modules/Import/Leadsaccount_name.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['account_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['account_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['account_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >