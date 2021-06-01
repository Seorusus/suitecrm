

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_custo_contact'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_custo_contact'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'custo_contact_subpanel_save_button');return false;" type="submit" name="custo_contact_subpanel_save_button" id="custo_contact_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="custo_contact_subpanel_cancel_button" id="custo_contact_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_custo_contact'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="custo_contact_subpanel_full_form_button" id="custo_contact_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=custo_contact", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
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
{sugar_translate label='LBL_CONTACT_INFORMATION' module='custo_contact'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_LAST_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='custo_contact'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="last_name" colspan='3' >
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
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FIRST_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='custo_contact'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="first_name"  >
{counter name="panelFieldCount"  print=false}
{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input tabindex="0"  name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='custo_contact'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
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
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_custo_contact","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
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
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OFFICE_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='custo_contact'}{/capture}
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOBILE_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='custo_contact'}{/capture}
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
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EMAIL_ADDRESSES' module='custo_contact'}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='custo_contact'}{/capture}
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_custo_contact'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_custo_contact'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'custo_contact_subpanel_save_button');return false;" type="submit" name="custo_contact_subpanel_save_button" id="custo_contact_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="custo_contact_subpanel_cancel_button" id="custo_contact_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_custo_contact'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="custo_contact_subpanel_full_form_button" id="custo_contact_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=custo_contact", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_custo_contact",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_custo_contact) {rdelim});
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
addForm('form_SubpanelQuickCreate_custo_contact');addToValidate('form_SubpanelQuickCreate_custo_contact', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'date_entered_date', 'date', false,'Дата создания' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'date_modified_date', 'date', false,'Дата изменения' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'last_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'photo', 'image', false,'{/literal}{sugar_translate label='LBL_PHOTO' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'lawful_basis', 'multienum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'date_reviewed', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_REVIEWED' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'lawful_basis_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS_SOURCE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'prospects_custo_contact_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_PROSPECTS_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_campaigns_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CAMPAIGNS_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_incom_incoming_marketing_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_INCOM_INCOMING_MARKETING_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_jjwg_maps_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_JJWG_MAPS_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'calls_custo_contact_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_users_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_USERS_FROM_USERS_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_custo_company_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_contact_custo_contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_L_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_user_custo_contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_user_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_PARTNER_UCLEAN_CUSTO_USER_ID' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'get_order_z_c', 'date', false,'{/literal}{sugar_translate label='LBL_GET_ORDER_Z' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'status_c', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'ur_face_c', 'bool', false,'{/literal}{sugar_translate label='LBL_UR_FACE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'order_date_c', 'date', false,'{/literal}{sugar_translate label='LBL_ORDER_DATE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'suurce_contact_uclean_c', 'enum', false,'{/literal}{sugar_translate label='LBL_SUURCE_CONTACT_UCLEAN' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'tel_lpr_c', 'phone', false,'{/literal}{sugar_translate label='LBL_TEL_LPR' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'partner_uclean_c', 'relate', false,'{/literal}{sugar_translate label='LBL_PARTNER_UCLEAN' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'company_c', 'relate', false,'{/literal}{sugar_translate label='LBL_COMPANY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'custo_company_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_COMPANY_CUSTO_COMPANY_ID' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'feedback_c', 'text', false,'{/literal}{sugar_translate label='LBL_FEEDBACK' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'get_order_c', 'text', false,'{/literal}{sugar_translate label='LBL_GET_ORDER' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'lpr_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_LPR' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'not_order_c', 'bool', false,'{/literal}{sugar_translate label='LBL_NOT_ORDER' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'set_propose_c', 'bool', false,'{/literal}{sugar_translate label='LBL_SET_PROPOSE' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'site_tender_c', 'url', false,'{/literal}{sugar_translate label='LBL_SITE_TENDER' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'sity_c', 'enum', false,'{/literal}{sugar_translate label='LBL_SITY' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'sms_c', 'bool', false,'{/literal}{sugar_translate label='LBL_SMS' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'street_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_STREET' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'sum_c', 'decimal', false,'{/literal}{sugar_translate label='LBL_SUM' module='custo_contact' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_custo_contact', 'type_object_c', 'text', false,'{/literal}{sugar_translate label='LBL_TYPE_OBJECT' module='custo_contact' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_custo_contact', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='custo_contact' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='custo_contact' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_custo_contact_assigned_user_name']={"form":"form_SubpanelQuickCreate_custo_contact","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};</script>{/literal}
