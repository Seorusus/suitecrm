<?php /* Smarty version 2.6.31, created on 2020-11-10 16:40:57
         compiled from cache/modules/Import/Leadsaccount_description.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['account_description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['account_description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['account_description']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['account_description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['account_description']['name']; ?>
'
rows="4"
cols="60"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>