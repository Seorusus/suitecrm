
<input type="text" name="{$fields.contact_uclean_c.name}" class="sqsEnabled" tabindex="1" id="{$fields.contact_uclean_c.name}" size="" value="{$fields.contact_uclean_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.contact_uclean_c.id_name}" 
	id="{$fields.contact_uclean_c.id_name}" 
	value="{$fields.custo_contact_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.contact_uclean_c.name}" id="btn_{$fields.contact_uclean_c.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.contact_uclean_c.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":{/literal}"{$fields.contact_uclean_c.id_name}"{literal},"name":{/literal}"{$fields.contact_uclean_c.name}"{literal}}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.contact_uclean_c.name}" id="btn_clr_{$fields.contact_uclean_c.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.contact_uclean_c.name}', '{$fields.contact_uclean_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.contact_uclean_c.name}']) != 'undefined'",
		enableQS
);
</script>