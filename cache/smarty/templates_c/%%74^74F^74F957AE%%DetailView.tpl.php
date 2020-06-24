<?php /* Smarty version 2.6.31, created on 2020-06-17 15:23:05
         compiled from custom/include/SugarFields/Fields/Phone/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'custom/include/SugarFields/Fields/Phone/DetailView.tpl', 1, false),array('function', 'sugarvar_connector', 'custom/include/SugarFields/Fields/Phone/DetailView.tpl', 11, false),)), $this); ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
	{assign var="phone_value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
|trim}

	{if $phone_value neq ''}
		<img onclick="AsteriskIntegrationClickToCall('{$phone_value}', '{$module}', '{$id}');" src="modules/AsteriskIntegration/images/click_to_call.png" style="cursor: pointer; margin-right: 5px; height: 16px; width: 16px;"/>
	{/if}

	{sugar_phone value=$phone_value usa_format="<?php if (! empty ( $this->_tpl_vars['vardef']['validate_usa_format'] )): ?>1<?php else: ?>0<?php endif; ?>"}

	<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
		<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

	<?php endif; ?>
{/if}