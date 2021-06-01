<?php /* Smarty version 2.6.31, created on 2020-11-11 17:36:20
         compiled from cache/include/InlineEditing/ContactsEditViewdess_person_c.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['dess_person_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dess_person_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dess_person_c']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['dess_person_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['dess_person_c']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>