<?php /* Smarty version 2.6.31, created on 2020-11-13 15:32:24
         compiled from cache/include/InlineEditing/ContactsEditViewdescr_marketing_c.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['descr_marketing_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['descr_marketing_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['descr_marketing_c']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['descr_marketing_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['descr_marketing_c']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>