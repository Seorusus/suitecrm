

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module) || !empty($smarty.request.relate_to)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">

{if $smarty.request.action != 'SubpanelEdits'}
<input type="hidden" name="primary_address_street" value="{$smarty.request.primary_address_street}">
<input type="hidden" name="primary_address_city" value="{$smarty.request.primary_address_city}">
<input type="hidden" name="primary_address_state" value="{$smarty.request.primary_address_state}">
<input type="hidden" name="primary_address_country" value="{$smarty.request.primary_address_country}">
<input type="hidden" name="primary_address_postalcode" value="{$smarty.request.primary_address_postalcode}">
{/if}
<input type="hidden" name="is_ajax_call" value="1">
<input type="hidden" name="to_pdf" value="1">

{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = (this.form) ? this.form : document.forms[0]; disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Prospects'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Prospects_subpanel_save_button');return false;" type="submit" name="Prospects_subpanel_save_button" id="Prospects_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Prospects_subpanel_cancel_button" id="Prospects_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = (this.form) ? this.form : document.forms[0]; disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Prospects_subpanel_full_form_button" id="Prospects_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Prospects", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'></td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_PROSPECT_INFORMATION' module='Prospects'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_PROSPECT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FIRST_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="first_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' 
id='{$fields.first_name.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OFFICE_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_work"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LAST_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Prospects'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="last_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' 
id='{$fields.last_name.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOBILE_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_mobile"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNT_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="account_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.account_name.value) <= 0}
{assign var="value" value=$fields.account_name.default_value }
{else}
{assign var="value" value=$fields.account_name.value }
{/if}  
<input type='text' name='{$fields.account_name.name}' 
id='{$fields.account_name.name}' size='30' 
maxlength='150' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX_PHONE' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TITLE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="title"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if}  
<input type='text' name='{$fields.title.name}' 
id='{$fields.title.name}' size='30' 
maxlength='100' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DEPARTMENT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="department"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if}  
<input type='text' name='{$fields.department.name}' 
id='{$fields.department.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="">

{minify}
&nbsp;

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="" field=""  >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DO_NOT_CALL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DO_NOT_CALL' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="do_not_call"  >
{counter name="panelFieldCount" print=false}

{if strval($fields.do_not_call.value) == "1" || strval($fields.do_not_call.value) == "yes" || strval($fields.do_not_call.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.do_not_call.name}" value="0"> 
<input type="checkbox" id="{$fields.do_not_call.name}" 
name="{$fields.do_not_call.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Prospects","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EMAIL_ADDRESSES' module='Prospects'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EMAIL_ADDRESSES">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_EMAIL_ADDRESS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1" colspan='3' >
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_ADDRESS_INFORMATION' module='Prospects'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_ADDRESS_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRIMARY_ADDRESS_STREET">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="primary_address_street"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.primary_address_street.value) <= 0}
{assign var="value" value=$fields.primary_address_street.default_value }
{else}
{assign var="value" value=$fields.primary_address_street.value }
{/if}  
<input type='text' name='{$fields.primary_address_street.name}' 
id='{$fields.primary_address_street.name}' size='30' 
maxlength='150' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ALT_ADDRESS_STREET">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Prospects'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="alt_address_street"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.alt_address_street.value) <= 0}
{assign var="value" value=$fields.alt_address_street.default_value }
{else}
{assign var="value" value=$fields.alt_address_street.value }
{/if}  
<input type='text' name='{$fields.alt_address_street.name}' 
id='{$fields.alt_address_street.name}' size='30' 
maxlength='150' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Prospects'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Prospects'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Prospects_subpanel_save_button');return false;" type="submit" name="Prospects_subpanel_save_button" id="Prospects_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Prospects_subpanel_cancel_button" id="Prospects_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Prospects'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Prospects_subpanel_full_form_button" id="Prospects_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Prospects", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Prospects",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Prospects) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('form_SubpanelQuickCreate_Prospects');addToValidate('form_SubpanelQuickCreate_Prospects', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'date_entered_date', 'date', false,'Дата создания' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'date_modified_date', 'date', false,'Дата изменения' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'last_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'photo', 'image', false,'{/literal}{sugar_translate label='LBL_PHOTO' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'lawful_basis', 'multienum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'date_reviewed', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_REVIEWED' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'lawful_basis_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS_SOURCE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'tracker_key', 'int', true,'{/literal}{sugar_translate label='LBL_TRACKER_KEY' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'birthdate', 'date', false,'{/literal}{sugar_translate label='LBL_BIRTHDATE' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'account_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'e_invite_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_INVITE_STATUS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'event_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS_EVENT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'event_invite_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'e_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_ACCEPT_STATUS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'event_accept_status', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS_EVENT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'event_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Prospects' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Prospects', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Prospects' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Prospects', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Prospects' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Prospects' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Prospects_assigned_user_name']={"form":"form_SubpanelQuickCreate_Prospects","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};</script>{/literal}
