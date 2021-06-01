
{if strlen($fields.for_first_name_c.value) <= 0}
{assign var="value" value=$fields.for_first_name_c.default_value }
{else}
{assign var="value" value=$fields.for_first_name_c.value }
{/if}  
<input type='text' name='{$fields.for_first_name_c.name}' 
    id='{$fields.for_first_name_c.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >