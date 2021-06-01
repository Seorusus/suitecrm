<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
          ),
          1 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
          1 => 'department',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'calls_contacts_1_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'incom_incoming_marketing_contacts_1_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'deep_interest_c',
            'label' => 'LBL_DEEP_INTEREST',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contact_status_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_STATUS',
          ),
          1 => 
          array (
            'name' => 'work_scheduler_c',
            'studio' => 'visible',
            'label' => 'LBL_WORK_SCHEDULER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'inbound_marketing_c',
            'studio' => 'visible',
            'label' => 'LBL_INBOUND_MARKETING',
          ),
          1 => 
          array (
            'name' => 'inbound_marketing_quantity_c',
            'studio' => 'visible',
            'label' => 'LBL_INBOUND_MARKETING_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'outbound_marketing_c',
            'studio' => 'visible',
            'label' => 'LBL_OUTBOUND_MARKETING',
          ),
          1 => 
          array (
            'name' => 'outbound_marketing_quantity_c',
            'studio' => 'visible',
            'label' => 'LBL_OUTBOUND_MARKETING_QUANTITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_marketing_c',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_MARKETING',
          ),
          1 => 
          array (
            'name' => 'dess_person_c',
            'studio' => 'visible',
            'label' => 'LBL_DESS_PERSON',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'use_call_center_c',
            'label' => 'LBL_USE_CALL_CENTER',
          ),
          1 => 
          array (
            'name' => 'descr_marketing_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCR_MARKETING',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'invitation_c',
            'studio' => 'visible',
            'label' => 'LBL_INVITATION',
          ),
          1 => 
          array (
            'name' => 'for_person_c',
            'studio' => 'visible',
            'label' => 'LBL_FOR_PERSON',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'for_first_name_c',
            'label' => 'LBL_FOR_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name_1_c',
            'label' => 'LBL_LAST_NAME_1',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'comment' => 'How did the contact come about',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 'campaign_name',
        ),
      ),
    ),
  ),
);
;
?>
