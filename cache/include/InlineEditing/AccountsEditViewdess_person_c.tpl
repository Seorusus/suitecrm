
{if strlen($fields.dess_person_c.value) <= 0}
{assign var="value" value=$fields.dess_person_c.default_value }
{else}
{assign var="value" value=$fields.dess_person_c.value }
{/if}  
<input type='text' name='{$fields.dess_person_c.name}' 
    id='{$fields.dess_person_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >