<?php /* Smarty version 2.6.31, created on 2020-12-10 12:28:34
         compiled from cache/modules/Import/Prospectsemail2.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['email2']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email2']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email2']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['email2']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['email2']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >