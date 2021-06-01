
{if strval($fields.use_call_center_c.value) == "1" || strval($fields.use_call_center_c.value) == "yes" || strval($fields.use_call_center_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.use_call_center_c.name}" value="0"> 
<input type="checkbox" id="{$fields.use_call_center_c.name}" 
name="{$fields.use_call_center_c.name}" 
value="1" title='' tabindex="1" {$checked} >