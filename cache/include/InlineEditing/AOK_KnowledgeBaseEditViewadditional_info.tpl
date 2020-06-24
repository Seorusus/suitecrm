
{if empty($fields.additional_info.value)}
{assign var="value" value=$fields.additional_info.default_value }
{else}
{assign var="value" value=$fields.additional_info.value }
{/if}




<textarea  id='{$fields.additional_info.name}' name='{$fields.additional_info.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}