
{if strlen($fields.recipient_name.value) <= 0}
{assign var="value" value=$fields.recipient_name.default_value }
{else}
{assign var="value" value=$fields.recipient_name.value }
{/if}  
<input type='text' name='{$fields.recipient_name.name}' 
    id='{$fields.recipient_name.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >