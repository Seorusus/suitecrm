
{if strlen($fields.alt_address_postalcode.value) <= 0}
{assign var="value" value=$fields.alt_address_postalcode.default_value }
{else}
{assign var="value" value=$fields.alt_address_postalcode.value }
{/if}  
<input type='text' name='{$fields.alt_address_postalcode.name}' 
    id='{$fields.alt_address_postalcode.name}' size='30' 
    maxlength='20' 
    value='{$value}' title=''  tabindex='1'      >