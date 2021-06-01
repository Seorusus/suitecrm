
{if empty($fields.dess_person_c.value)}
{assign var="value" value=$fields.dess_person_c.default_value }
{else}
{assign var="value" value=$fields.dess_person_c.value }
{/if}




<textarea  id='{$fields.dess_person_c.name}' name='{$fields.dess_person_c.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}