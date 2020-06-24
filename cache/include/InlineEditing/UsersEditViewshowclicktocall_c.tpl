
{if strval($fields.showclicktocall_c.value) == "1" || strval($fields.showclicktocall_c.value) == "yes" || strval($fields.showclicktocall_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.showclicktocall_c.name}" value="0"> 
<input type="checkbox" id="{$fields.showclicktocall_c.name}" 
name="{$fields.showclicktocall_c.name}" 
value="1" title='Tick to Show Magic Dial Button' tabindex="1" {$checked} >