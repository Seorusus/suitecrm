
{if strlen($fields.email_4_c.value) <= 0}
{assign var="value" value=$fields.email_4_c.default_value }
{else}
{assign var="value" value=$fields.email_4_c.value }
{/if}  
<input type='text' name='{$fields.email_4_c.name}' 
    id='{$fields.email_4_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >