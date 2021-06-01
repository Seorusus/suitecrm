<?php /* Smarty version 2.6.31, created on 2020-11-10 16:42:21
         compiled from cache/modules/Import/Leadsemail_3_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['email_3_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email_3_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email_3_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['email_3_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['email_3_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >