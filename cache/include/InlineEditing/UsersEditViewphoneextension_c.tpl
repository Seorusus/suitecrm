
{if strlen($fields.phoneextension_c.value) <= 0}
{assign var="value" value=$fields.phoneextension_c.default_value }
{else}
{assign var="value" value=$fields.phoneextension_c.value }
{/if}  
<input type='text' name='{$fields.phoneextension_c.name}' 
    id='{$fields.phoneextension_c.name}' size='30' 
    maxlength='10' 
    value='{$value}' title='Enter Your Extension'  tabindex='1'      >