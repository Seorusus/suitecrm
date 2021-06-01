
{if strlen($fields.recipient_email.value) <= 0}
{assign var="value" value=$fields.recipient_email.default_value }
{else}
{assign var="value" value=$fields.recipient_email.value }
{/if}  
<input type='text' name='{$fields.recipient_email.name}' 
    id='{$fields.recipient_email.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >