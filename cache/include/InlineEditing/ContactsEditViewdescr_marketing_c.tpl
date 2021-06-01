
{if empty($fields.descr_marketing_c.value)}
{assign var="value" value=$fields.descr_marketing_c.default_value }
{else}
{assign var="value" value=$fields.descr_marketing_c.value }
{/if}




<textarea  id='{$fields.descr_marketing_c.name}' name='{$fields.descr_marketing_c.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}