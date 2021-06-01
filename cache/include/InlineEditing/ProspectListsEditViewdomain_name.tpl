
{if strlen($fields.domain_name.value) <= 0}
{assign var="value" value=$fields.domain_name.default_value }
{else}
{assign var="value" value=$fields.domain_name.value }
{/if}  
<input type='text' name='{$fields.domain_name.name}' 
    id='{$fields.domain_name.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >