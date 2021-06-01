
{if strval($fields.deep_interest_c.value) == "1" || strval($fields.deep_interest_c.value) == "yes" || strval($fields.deep_interest_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.deep_interest_c.name}" value="0"> 
<input type="checkbox" id="{$fields.deep_interest_c.name}" 
name="{$fields.deep_interest_c.name}" 
value="1" title='' tabindex="1" {$checked} >