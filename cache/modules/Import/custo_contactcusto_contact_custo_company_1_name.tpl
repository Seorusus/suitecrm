
<input type="text" name="{$fields.custo_contact_custo_company_1_name.name}" class="sqsEnabled" tabindex="1" id="{$fields.custo_contact_custo_company_1_name.name}" size="" value="{$fields.custo_contact_custo_company_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.custo_contact_custo_company_1_name.id_name}" 
	id="{$fields.custo_contact_custo_company_1_name.id_name}" 
	value="{$fields.custo_contact_custo_company_1custo_company_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.custo_contact_custo_company_1_name.name}" id="btn_{$fields.custo_contact_custo_company_1_name.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.custo_contact_custo_company_1_name.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"importstep3","field_to_name_array":{"id":"custo_contact_custo_company_1custo_company_idb","name":"custo_contact_custo_company_1_name"}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.custo_contact_custo_company_1_name.name}" id="btn_clr_{$fields.custo_contact_custo_company_1_name.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.custo_contact_custo_company_1_name.name}', '{$fields.custo_contact_custo_company_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.custo_contact_custo_company_1_name.name}']) != 'undefined'",
		enableQS
);
</script>