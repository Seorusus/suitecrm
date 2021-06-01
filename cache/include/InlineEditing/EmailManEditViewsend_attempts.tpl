
{if strlen($fields.send_attempts.value) <= 0}
{assign var="value" value=$fields.send_attempts.default_value }
{else}
{assign var="value" value=$fields.send_attempts.value }
{/if}  
<input type='text' name='{$fields.send_attempts.name}' 
id='{$fields.send_attempts.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >