<?php /* Smarty version 2.6.31, created on 2020-06-24 18:35:33
         compiled from cache/include/InlineEditing/AccountsEditViewname.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >