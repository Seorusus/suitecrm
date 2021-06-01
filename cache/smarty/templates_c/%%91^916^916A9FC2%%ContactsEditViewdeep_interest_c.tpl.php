<?php /* Smarty version 2.6.31, created on 2020-11-11 17:36:30
         compiled from cache/include/InlineEditing/ContactsEditViewdeep_interest_c.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['deep_interest_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['deep_interest_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['deep_interest_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['deep_interest_c']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['deep_interest_c']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['deep_interest_c']['name']; ?>
" 
value="1" title='' tabindex="1" <?php echo $this->_tpl_vars['checked']; ?>
 >