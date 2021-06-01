
{if strlen($fields.entry_count.value) <= 0}
{assign var="value" value=$fields.entry_count.default_value }
{else}
{assign var="value" value=$fields.entry_count.value }
{/if}  
<input type='text' name='{$fields.entry_count.name}' 
id='{$fields.entry_count.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >