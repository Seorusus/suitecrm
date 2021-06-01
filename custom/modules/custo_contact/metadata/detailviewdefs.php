<?php
$module_name = 'custo_contact';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sity_c',
            'studio' => 'visible',
            'label' => 'LBL_SITY',
          ),
          1 => 
          array (
            'name' => 'custo_contact_custo_company_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_city',
            'comment' => 'City for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'partner_uclean_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTNER_UCLEAN',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ur_face_c',
            'label' => 'LBL_UR_FACE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
          ),
          1 => 
          array (
            'name' => 'phone_work',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'suurce_contact_uclean_c',
            'studio' => 'visible',
            'label' => 'LBL_SUURCE_CONTACT_UCLEAN',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'calls_custo_contact_1_name',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'prospects_custo_contact_1_name',
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALT_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'get_order_z_c',
            'label' => 'LBL_GET_ORDER_Z',
          ),
          1 => 
          array (
            'name' => 'not_order_c',
            'label' => 'LBL_NOT_ORDER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type_object_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OBJECT',
          ),
          1 => 
          array (
            'name' => 'order_date_c',
            'label' => 'LBL_ORDER_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sum_c',
            'label' => 'LBL_SUM',
          ),
          1 => 
          array (
            'name' => 'feedback_c',
            'studio' => 'visible',
            'label' => 'LBL_FEEDBACK',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lpr_c',
            'label' => 'LBL_LPR',
          ),
          1 => 
          array (
            'name' => 'tel_lpr_c',
            'label' => 'LBL_TEL_LPR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'set_propose_c',
            'label' => 'LBL_SET_PROPOSE',
          ),
          1 => 
          array (
            'name' => 'sms_c',
            'label' => 'LBL_SMS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'site_tender_c',
            'label' => 'LBL_SITE_TENDER',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
