
{if strlen($fields.task_number.value) <= 0}
{assign var="value" value=$fields.task_number.default_value }
{else}
{assign var="value" value=$fields.task_number.value }
{/if}  
<input type='text' name='{$fields.task_number.name}' 
id='{$fields.task_number.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >