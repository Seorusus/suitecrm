
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='first_name_advanced'>{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.first_name_advanced.value) <= 0}
{assign var="value" value=$fields.first_name_advanced.default_value }
{else}
{assign var="value" value=$fields.first_name_advanced.value }
{/if}  
<input type='text' name='{$fields.first_name_advanced.name}' 
    id='{$fields.first_name_advanced.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      accesskey='9'  >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='email_advanced'>{sugar_translate label='LBL_ANY_EMAIL' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.email_advanced.value) <= 0}
{assign var="value" value=$fields.email_advanced.default_value }
{else}
{assign var="value" value=$fields.email_advanced.value }
{/if}  
<input type='text' name='{$fields.email_advanced.name}' 
    id='{$fields.email_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='phone_advanced'>{sugar_translate label='LBL_ANY_PHONE' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.phone_advanced.value) <= 0}
{assign var="value" value=$fields.phone_advanced.default_value }
{else}
{assign var="value" value=$fields.phone_advanced.value }
{/if}  
<input type='text' name='{$fields.phone_advanced.name}' 
    id='{$fields.phone_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='last_name_advanced'>{sugar_translate label='LBL_LAST_NAME' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.last_name_advanced.value) <= 0}
{assign var="value" value=$fields.last_name_advanced.default_value }
{else}
{assign var="value" value=$fields.last_name_advanced.value }
{/if}  
<input type='text' name='{$fields.last_name_advanced.name}' 
    id='{$fields.last_name_advanced.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='address_street_advanced'>{sugar_translate label='LBL_ANY_ADDRESS' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_street_advanced.value) <= 0}
{assign var="value" value=$fields.address_street_advanced.default_value }
{else}
{assign var="value" value=$fields.address_street_advanced.value }
{/if}  
<input type='text' name='{$fields.address_street_advanced.name}' 
    id='{$fields.address_street_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='address_city_advanced'>{sugar_translate label='LBL_CITY' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_city_advanced.value) <= 0}
{assign var="value" value=$fields.address_city_advanced.default_value }
{else}
{assign var="value" value=$fields.address_city_advanced.value }
{/if}  
<input type='text' name='{$fields.address_city_advanced.name}' 
    id='{$fields.address_city_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='account_name_advanced'>{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.account_name_advanced.name}"  class="sqsEnabled"   id="{$fields.account_name_advanced.name}" size="" value="{$fields.account_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.account_id_advanced.name}" value="{$fields.account_id_advanced.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.account_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.account_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"account_id_advanced","name":"account_name_advanced"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.account_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.account_name_advanced.name}.value = ''; this.form.{$fields.account_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='address_state_advanced'>{sugar_translate label='LBL_STATE' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_state_advanced.value) <= 0}
{assign var="value" value=$fields.address_state_advanced.default_value }
{else}
{assign var="value" value=$fields.address_state_advanced.value }
{/if}  
<input type='text' name='{$fields.address_state_advanced.name}' 
    id='{$fields.address_state_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='event_status_id_advanced'>{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.event_status_id_advanced.value) <= 0}
{assign var="value" value=$fields.event_status_id_advanced.default_value }
{else}
{assign var="value" value=$fields.event_status_id_advanced.value }
{/if}  
<input type='text' name='{$fields.event_status_id_advanced.name}' 
    id='{$fields.event_status_id_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='address_postalcode_advanced'>{sugar_translate label='LBL_POSTAL_CODE' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_postalcode_advanced.value) <= 0}
{assign var="value" value=$fields.address_postalcode_advanced.default_value }
{else}
{assign var="value" value=$fields.address_postalcode_advanced.value }
{/if}  
<input type='text' name='{$fields.address_postalcode_advanced.name}' 
    id='{$fields.address_postalcode_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='date_entered_advanced'>{sugar_translate label='LBL_DATE_ENTERED' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="id" value=$fields.date_entered_advanced.name }

{if isset($smarty.request.date_entered_advanced_range_choice)}
{assign var="starting_choice" value=$smarty.request.date_entered_advanced_range_choice}
{else}
{assign var="starting_choice" value="="}
{/if}

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
<select id="{$id}_range_choice" name="{$id}_range_choice" onchange="{$id}_range_change(this.value);">
{html_options options=$fields.date_entered_advanced.options selected=$starting_choice}
</select>
</div>

<div id="{$id}_range_div" style="{if preg_match('/^\[/', $smarty.request.range_date_entered_advanced)  || $starting_choice == 'between'}display:none{else}display:''{/if};">
<input autocomplete="off" type="text" name="range_{$id}" id="range_{$id}" value='{if empty($smarty.request.range_date_entered_advanced) && !empty($smarty.request.date_entered_advanced)}{$smarty.request.date_entered_advanced}{else}{$smarty.request.range_date_entered_advanced}{/if}' title=''   size="11" class="dateRangeInput">
    <button id="{$id}_trigger" type="button" onclick="return false;" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
    
</div>

<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
{assign var=date_value value=$fields.date_entered_advanced.value }
<input autocomplete="off" type="text" name="start_range_{$id}" id="start_range_{$id}" value='{$smarty.request.start_range_date_entered_advanced }' title=''  tabindex='' size="11" class="dateRangeInput">
    <button id="start_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "start_range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "start_range_{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
 
{$APP.LBL_AND}
{assign var=date_value value=$fields.date_entered_advanced.value }
<input autocomplete="off" type="text" name="end_range_{$id}" id="end_range_{$id}" value='{$smarty.request.end_range_date_entered_advanced }' title=''  tabindex='' size="11" class="dateRangeInput" maxlength="10">
    <button id="end_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger">
        <span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span>
    </button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "end_range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "end_range_{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
 
</div>


<script type='text/javascript'>

function {$id}_range_change(val) 
{ldelim}
  if(val == 'between') {ldelim}
     document.getElementById("range_{$id}").value = '';  
     document.getElementById("{$id}_range_div").style.display = 'none';
     document.getElementById("{$id}_between_range_div").style.display = ''; 
  {rdelim} else if (val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than') {ldelim}
     if((/^\[.*\]$/).test(document.getElementById("range_{$id}").value))
     {ldelim}
     	document.getElementById("range_{$id}").value = '';
     {rdelim}
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = '';
     document.getElementById("{$id}_range_div").style.display = '';
     document.getElementById("{$id}_between_range_div").style.display = 'none';
  {rdelim} else {ldelim}
     document.getElementById("range_{$id}").value = '[' + val + ']';    
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = ''; 
     document.getElementById("{$id}_range_div").style.display = 'none';
     document.getElementById("{$id}_between_range_div").style.display = 'none';         
  {rdelim}
{rdelim}

var {$id}_range_reset = function()
{ldelim}
{$id}_range_change('=');
{rdelim}

YAHOO.util.Event.onDOMReady(function() {ldelim}
if(document.getElementById('search_form_clear'))
{ldelim}
YAHOO.util.Event.addListener('search_form_clear', 'click', {$id}_range_reset);
{rdelim}

{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
 	if(document.getElementById('search_form_clear_advanced'))
 	 {ldelim}
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', {$id}_range_reset);
 	 {rdelim}

{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {ldelim}
         YAHOO.util.Event.addListener('search_form_submit', 'click',{$id}_range_validate);
     {rdelim}
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {ldelim}
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',{$id}_range_validate);
    {rdelim}

{rdelim});

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
function {$id}_range_validate(e){ldelim}
    if (
            (document.getElementById("start_range_{$id}").value.length >0 && document.getElementById("end_range_{$id}").value.length == 0)
          ||(document.getElementById("end_range_{$id}").value.length >0 && document.getElementById("start_range_{$id}").value.length == 0)
       )
    {ldelim}
        e.preventDefault();
        alert('{$APP.LBL_CHOOSE_START_AND_END_DATES}');
        if (document.getElementById("start_range_{$id}").value.length == 0) {ldelim}
            document.getElementById("start_range_{$id}").focus();
        {rdelim}
        else {ldelim}
            document.getElementById("end_range_{$id}").focus();
        {rdelim}
    {rdelim}

{rdelim}

</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='date_modified_advanced'>{sugar_translate label='LBL_DATE_MODIFIED' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="id" value=$fields.date_modified_advanced.name }

{if isset($smarty.request.date_modified_advanced_range_choice)}
{assign var="starting_choice" value=$smarty.request.date_modified_advanced_range_choice}
{else}
{assign var="starting_choice" value="="}
{/if}

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
<select id="{$id}_range_choice" name="{$id}_range_choice" onchange="{$id}_range_change(this.value);">
{html_options options=$fields.date_modified_advanced.options selected=$starting_choice}
</select>
</div>

<div id="{$id}_range_div" style="{if preg_match('/^\[/', $smarty.request.range_date_modified_advanced)  || $starting_choice == 'between'}display:none{else}display:''{/if};">
<input autocomplete="off" type="text" name="range_{$id}" id="range_{$id}" value='{if empty($smarty.request.range_date_modified_advanced) && !empty($smarty.request.date_modified_advanced)}{$smarty.request.date_modified_advanced}{else}{$smarty.request.range_date_modified_advanced}{/if}' title=''   size="11" class="dateRangeInput">
    <button id="{$id}_trigger" type="button" onclick="return false;" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
    
</div>

<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
{assign var=date_value value=$fields.date_modified_advanced.value }
<input autocomplete="off" type="text" name="start_range_{$id}" id="start_range_{$id}" value='{$smarty.request.start_range_date_modified_advanced }' title=''  tabindex='' size="11" class="dateRangeInput">
    <button id="start_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "start_range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "start_range_{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
 
{$APP.LBL_AND}
{assign var=date_value value=$fields.date_modified_advanced.value }
<input autocomplete="off" type="text" name="end_range_{$id}" id="end_range_{$id}" value='{$smarty.request.end_range_date_modified_advanced }' title=''  tabindex='' size="11" class="dateRangeInput" maxlength="10">
    <button id="end_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger">
        <span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span>
    </button>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "end_range_{$id}",
daFormat : "{$CALENDAR_FORMAT}",
button : "end_range_{$id}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
 
</div>


<script type='text/javascript'>

function {$id}_range_change(val) 
{ldelim}
  if(val == 'between') {ldelim}
     document.getElementById("range_{$id}").value = '';  
     document.getElementById("{$id}_range_div").style.display = 'none';
     document.getElementById("{$id}_between_range_div").style.display = ''; 
  {rdelim} else if (val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than') {ldelim}
     if((/^\[.*\]$/).test(document.getElementById("range_{$id}").value))
     {ldelim}
     	document.getElementById("range_{$id}").value = '';
     {rdelim}
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = '';
     document.getElementById("{$id}_range_div").style.display = '';
     document.getElementById("{$id}_between_range_div").style.display = 'none';
  {rdelim} else {ldelim}
     document.getElementById("range_{$id}").value = '[' + val + ']';    
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = ''; 
     document.getElementById("{$id}_range_div").style.display = 'none';
     document.getElementById("{$id}_between_range_div").style.display = 'none';         
  {rdelim}
{rdelim}

var {$id}_range_reset = function()
{ldelim}
{$id}_range_change('=');
{rdelim}

YAHOO.util.Event.onDOMReady(function() {ldelim}
if(document.getElementById('search_form_clear'))
{ldelim}
YAHOO.util.Event.addListener('search_form_clear', 'click', {$id}_range_reset);
{rdelim}

{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
 	if(document.getElementById('search_form_clear_advanced'))
 	 {ldelim}
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', {$id}_range_reset);
 	 {rdelim}

{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {ldelim}
         YAHOO.util.Event.addListener('search_form_submit', 'click',{$id}_range_validate);
     {rdelim}
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {ldelim}
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',{$id}_range_validate);
    {rdelim}

{rdelim});

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
function {$id}_range_validate(e){ldelim}
    if (
            (document.getElementById("start_range_{$id}").value.length >0 && document.getElementById("end_range_{$id}").value.length == 0)
          ||(document.getElementById("end_range_{$id}").value.length >0 && document.getElementById("start_range_{$id}").value.length == 0)
       )
    {ldelim}
        e.preventDefault();
        alert('{$APP.LBL_CHOOSE_START_AND_END_DATES}');
        if (document.getElementById("start_range_{$id}").value.length == 0) {ldelim}
            document.getElementById("start_range_{$id}").focus();
        {rdelim}
        else {ldelim}
            document.getElementById("end_range_{$id}").focus();
        {rdelim}
    {rdelim}

{rdelim}

</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='assigned_user_id_advanced'>{sugar_translate label='LBL_ASSIGNED_TO' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='assigned_user_id_advanced' name='assigned_user_id_advanced[]' id='assigned_user_id_advanced' options=$fields.assigned_user_id_advanced.options size="6" style="width: 150px" multiple="1" selected=$fields.assigned_user_id_advanced.value}
<select id="assigned_user_id_advanced_hide" style="width: 150"></select><script type="text/javascript">$('#assigned_user_id_advanced').multiSelect();</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='primary_address_country_advanced'>{sugar_translate label='LBL_COUNTRY' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.primary_address_country_advanced.value) <= 0}
{assign var="value" value=$fields.primary_address_country_advanced.default_value }
{else}
{assign var="value" value=$fields.primary_address_country_advanced.value }
{/if}  
<input type='text' name='{$fields.primary_address_country_advanced.name}' 
    id='{$fields.primary_address_country_advanced.name}' size='30' 
     
    value='{$value}' title=''      >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='lead_source_advanced'>{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='lead_source_advanced' name='lead_source_advanced[]' id='lead_source_advanced' options=$fields.lead_source_advanced.options size="6" style="width: 150px" multiple="1" selected=$fields.lead_source_advanced.value}
<select id="lead_source_advanced_hide" style="width: 150"></select><script type="text/javascript">$('#lead_source_advanced').multiSelect();</script>
                            </div>
        </div>
    </div>
    
    <div>
        <div>
            &nbsp;
        </div>
    </div>

    {if $DISPLAY_SAVED_SEARCH}
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
            {if !$searchFormInPopup}
                <div>
                    <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                        {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                        {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                        &nbsp;{$APP.LNK_SAVED_VIEWS}
                    </a><br>
                    <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                    <p>
                </div>
            {/if}
            <div class="" scope='row' width='10%' nowrap="nowrap">
                <div class="col-xs-12">
                    <label>{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:</label>
                </div>
                <div class="form-item" width='30%' nowrap>
                    <input type='text' name='saved_search_name'>
                    <input type='hidden' name='search_module' value=''>
                    <input type='hidden' name='saved_search_action' value=''>
                    <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                           type='button' name='saved_search_submit'
                           onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
                </div>
            </div>
            <div class="hideUnusedSavedSearchElements" scope='row' width='10%'
                 nowrap="nowrap"{if !$savedSearchData.selected} style="display: none;"{/if}>
                <label>{sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}: <span
                            id='curr_search_name'>"{$savedSearchData.options[$savedSearchData.selected]}"</span></label>
            </div>
            <div class="hideUnusedSavedSearchElements" width='30%'
                 nowrap{if !$savedSearchData.selected} style="display: none;"{/if}>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
            </div>
        </div>
        <div>
            <div colspan='6'>
                <div{if !$searchFormInPopup} style='{$DISPLAYSS}'{/if} id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </div>
        </div>
    {/if}

    {if $displayType != 'popupView'}
        <div>
            <div class="submitButtonsAdvanced">
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                {if $searchFormInPopup}
                <div>
                    {/if}
                    <a id="basic_search_link" href="javascript:void(0)"
                       accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
                    {if $searchFormInPopup}
                </div>
                {/if}
            </div>
            <div class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </div>
        </div>
    {/if}
</div>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_created_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_assigned_user_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_account_name_advanced']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["search_form_account_name_advanced","account_id_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_report_to_name_advanced']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["report_to_name_advanced","reports_to_id_advanced","reports_to_id_advanced","reports_to_id_advanced"],"required_list":["reports_to_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_campaign_name_advanced']={"form":"search_form","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_id_advanced","campaign_id_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};sqs_objects['search_form_incom_incoming_marketing_contacts_1_name_advanced']={"form":"search_form","method":"query","modules":["incom_incoming_marketing"],"group":"or","field_list":["name","id"],"populate_list":["incom_incoming_marketing_contacts_1_name_advanced","incom_incoming_marketing_contacts_1incom_incoming_marketing_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"\u041d\u0435 \u0432\u044b\u0431\u0440\u0430\u043d\u043e"};</script>{/literal}