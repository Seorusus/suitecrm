
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
{/literal}
</script>
<div class="row">
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='search_name_basic' >{sugar_translate label='LBL_NAME' module='custo_contact'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{if strlen($fields.search_name_basic.value) <= 0}
{assign var="value" value=$fields.search_name_basic.default_value }
{else}
{assign var="value" value=$fields.search_name_basic.value }
{/if}  
<input type='text' name='{$fields.search_name_basic.name}' 
    id='{$fields.search_name_basic.name}' size='30' 
     
    value='{$value}' title=''      accesskey='9'  >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='current_user_only_basic' >{sugar_translate label='LBL_CURRENT_USER_FILTER' module='custo_contact'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{if strval($fields.current_user_only_basic.value) == "1" || strval($fields.current_user_only_basic.value) == "yes" || strval($fields.current_user_only_basic.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.current_user_only_basic.name}" value="0"> 
<input type="checkbox" id="{$fields.current_user_only_basic.name}" 
name="{$fields.current_user_only_basic.name}" 
value="1" title='' tabindex="" {$checked} >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='sity_c_basic' >{sugar_translate label='LBL_SITY' module='custo_contact'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{html_options id='sity_c_basic' name='sity_c_basic[]' id='sity_c_basic' options=$fields.sity_c_basic.options size="6" style="width: 150px" multiple="1" selected=$fields.sity_c_basic.value}
<select id="sity_c_basic_hide" style="width: 150"></select><script type="text/javascript">$('#sity_c_basic').multiSelect();</script>
		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
			{if $HAS_ADVANCED_SEARCH && !$searchFormInPopup}
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_ADVANCED_FILTER}</a>
			{/if}
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></div>
	</div>
</div>
<script>
	{literal}
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|advanced_search','{/literal}{$module}{literal}|basic_search');
		});
	});
	{/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_prospects_custo_contact_1_name_basic']={"form":"search_form","method":"query","modules":["Prospects"],"group":"or","field_list":["name","id"],"populate_list":["prospects_custo_contact_1_name_basic","prospects_custo_contact_1prospects_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_campaigns_name_basic']={"form":"search_form","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_campaignscampaigns_ida_basic","custo_contact_campaignscampaigns_ida_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_incom_incoming_marketing_name_basic']={"form":"search_form","method":"query","modules":["incom_incoming_marketing"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_incom_incoming_marketing_name_basic","custo_contf866rketing_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_jjwg_maps_name_basic']={"form":"search_form","method":"query","modules":["jjwg_Maps"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_jjwg_maps_name_basic","custo_contact_jjwg_mapsjjwg_maps_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_calls_custo_contact_1_name_basic']={"form":"search_form","method":"query","modules":["Calls"],"group":"or","field_list":["name","id"],"populate_list":["calls_custo_contact_1_name_basic","calls_custo_contact_1calls_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_users_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["custo_contact_users_name_basic","custo_contact_usersusers_ida_basic"],"required_list":["custo_contact_usersusers_ida"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_custo_company_1_name_basic']={"form":"search_form","method":"query","modules":["custo_company"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_custo_company_1_name_basic","custo_contact_custo_company_1custo_company_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_contact_custo_contact_name_basic']={"form":"search_form","method":"query","modules":["custo_contact"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_custo_contact_name_basic","custo_contact_custo_contactcusto_contact_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_custo_user_custo_contact_name_basic']={"form":"search_form","method":"query","modules":["custo_user"],"group":"or","field_list":["name","id"],"populate_list":["custo_user_custo_contact_name_basic","custo_user_custo_contactcusto_user_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_partner_uclean_c_basic']={"form":"search_form","method":"query","modules":["custo_user"],"group":"or","field_list":["name","id"],"populate_list":["partner_uclean_c_basic","custo_user_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_company_c_basic']={"form":"search_form","method":"query","modules":["custo_company"],"group":"or","field_list":["name","id"],"populate_list":["company_c_basic","custo_company_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};</script>{/literal}