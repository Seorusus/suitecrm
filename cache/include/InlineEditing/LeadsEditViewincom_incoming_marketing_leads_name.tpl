
<input type="text" name="{$fields.incom_incoming_marketing_leads_name.name}" class="sqsEnabled" tabindex="1" id="{$fields.incom_incoming_marketing_leads_name.name}" size="" value="{$fields.incom_incoming_marketing_leads_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.incom_incoming_marketing_leads_name.id_name}" 
	id="{$fields.incom_incoming_marketing_leads_name.id_name}" 
	value="{$fields.incom_incoming_marketing_leadsincom_incoming_marketing_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.incom_incoming_marketing_leads_name.name}" id="btn_{$fields.incom_incoming_marketing_leads_name.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.incom_incoming_marketing_leads_name.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":{/literal}"{$fields.incom_incoming_marketing_leads_name.id_name}"{literal},"name":{/literal}"{$fields.incom_incoming_marketing_leads_name.name}"{literal}}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.incom_incoming_marketing_leads_name.name}" id="btn_clr_{$fields.incom_incoming_marketing_leads_name.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.incom_incoming_marketing_leads_name.name}', '{$fields.incom_incoming_marketing_leads_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.incom_incoming_marketing_leads_name.name}']) != 'undefined'",
		enableQS
);
</script>