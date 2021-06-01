<?php /* Smarty version 2.6.31, created on 2021-02-05 12:40:46
         compiled from cache/modules/Import/Leadslead_source_description.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['lead_source_description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['lead_source_description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['lead_source_description']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['lead_source_description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['lead_source_description']['name']; ?>
'
rows="4"
cols="60"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>