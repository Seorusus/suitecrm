<?php /* Smarty version 2.6.31, created on 2020-11-10 16:34:31
         compiled from cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl', 31, false),array('function', 'math', 'cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl', 32, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl', 38, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl', 92, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/custo_contact/SearchForm_basic.tpl', 107, false),)), $this); ?>

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (! isset ( $this->_tpl_vars['templateMeta']['maxColumnsBasic'] )): ?>
	<?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumns']); ?>
<?php else: ?>
    <?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumnsBasic']); ?>
<?php endif; ?>
<script>
<?php echo '
	$(function() {
	var $dialog = $(\'<div></div>\')
		.html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get(\'app_strings\', \'LBL_HELP\'),
			width: 700
		});
		
		$(\'#filterHelp\').click(function() {
		$dialog.dialog(\'open\');
		// prevent the default action, e.g., following a link
	});
	
	});
'; ?>

</script>
<div class="row">
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='search_name_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'custo_contact'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen ( $this->_tpl_vars['fields']['search_name_basic']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='9'  >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='current_user_only_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENT_USER_FILTER','module' => 'custo_contact'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" 
value="1" title='' tabindex="" <?php echo $this->_tpl_vars['checked']; ?>
 >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='sity_c_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SITY','module' => 'custo_contact'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php echo smarty_function_html_options(array('id' => 'sity_c_basic','name' => 'sity_c_basic[]','options' => $this->_tpl_vars['fields']['sity_c_basic']['options'],'size' => '6','style' => "width: 150px",'multiple' => '1','selected' => $this->_tpl_vars['fields']['sity_c_basic']['value']), $this);?>

<select id="sity_c_basic_hide" style="width: 150"></select><script type="text/javascript">$('#sity_c_basic').multiSelect();</script>
		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
			<?php if ($this->_tpl_vars['HAS_ADVANCED_SEARCH'] && ! $this->_tpl_vars['searchFormInPopup']): ?>
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_FILTER']; ?>
</a>
			<?php endif; ?>
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
'></div>
	</div>
</div>
<script>
	<?php echo '
	$(document).ready(function () {
		$( \'#advanced_search_link\' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect(\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|advanced_search\',\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|basic_search\');
		});
	});
	'; ?>

</script><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_assigned_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_prospects_custo_contact_1_name_basic\']={"form":"search_form","method":"query","modules":["Prospects"],"group":"or","field_list":["name","id"],"populate_list":["prospects_custo_contact_1_name_basic","prospects_custo_contact_1prospects_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_campaigns_name_basic\']={"form":"search_form","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_campaignscampaigns_ida_basic","custo_contact_campaignscampaigns_ida_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_incom_incoming_marketing_name_basic\']={"form":"search_form","method":"query","modules":["incom_incoming_marketing"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_incom_incoming_marketing_name_basic","custo_contf866rketing_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_jjwg_maps_name_basic\']={"form":"search_form","method":"query","modules":["jjwg_Maps"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_jjwg_maps_name_basic","custo_contact_jjwg_mapsjjwg_maps_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_calls_custo_contact_1_name_basic\']={"form":"search_form","method":"query","modules":["Calls"],"group":"or","field_list":["name","id"],"populate_list":["calls_custo_contact_1_name_basic","calls_custo_contact_1calls_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_users_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["custo_contact_users_name_basic","custo_contact_usersusers_ida_basic"],"required_list":["custo_contact_usersusers_ida"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_custo_company_1_name_basic\']={"form":"search_form","method":"query","modules":["custo_company"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_custo_company_1_name_basic","custo_contact_custo_company_1custo_company_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_contact_custo_contact_name_basic\']={"form":"search_form","method":"query","modules":["custo_contact"],"group":"or","field_list":["name","id"],"populate_list":["custo_contact_custo_contact_name_basic","custo_contact_custo_contactcusto_contact_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_custo_user_custo_contact_name_basic\']={"form":"search_form","method":"query","modules":["custo_user"],"group":"or","field_list":["name","id"],"populate_list":["custo_user_custo_contact_name_basic","custo_user_custo_contactcusto_user_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_partner_uclean_c_basic\']={"form":"search_form","method":"query","modules":["custo_user"],"group":"or","field_list":["name","id"],"populate_list":["partner_uclean_c_basic","custo_user_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};sqs_objects[\'search_form_company_c_basic\']={"form":"search_form","method":"query","modules":["custo_company"],"group":"or","field_list":["name","id"],"populate_list":["company_c_basic","custo_company_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\\u041d\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u043d\\u043e"};</script>'; ?>