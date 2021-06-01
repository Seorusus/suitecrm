
{if strlen($fields.last_name_1_c.value) <= 0}
{assign var="value" value=$fields.last_name_1_c.default_value }
{else}
{assign var="value" value=$fields.last_name_1_c.value }
{/if}  
<input type='text' name='{$fields.last_name_1_c.name}' 
    id='{$fields.last_name_1_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >