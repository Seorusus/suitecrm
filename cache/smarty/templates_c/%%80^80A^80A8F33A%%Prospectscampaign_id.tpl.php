<?php /* Smarty version 2.6.31, created on 2020-06-24 18:54:11
         compiled from cache/modules/Import/Prospectscampaign_id.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['campaign_id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['campaign_id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['campaign_id']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['campaign_id']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['campaign_id']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >