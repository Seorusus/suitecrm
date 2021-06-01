
	{if !empty($fields.site_tender_c.value)}
	<input type='text' name='{$fields.site_tender_c.name}' id='{$fields.site_tender_c.name}' size='30' 
	   maxlength='255' value='{$fields.site_tender_c.value}' title='' tabindex='1'  >
	{else}
	<input type='text' name='{$fields.site_tender_c.name}' id='{$fields.site_tender_c.name}' size='30' 
	   maxlength='255'	   	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} 
	    title='' tabindex='1'  >
	{/if}
