<?php
$module_name = 'custo_user';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 'last_name',
        ),
        1 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'phone_home',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'city',
            'studio' => 'visible',
            'label' => 'LBL_CITY',
          ),
          1 => 'department',
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
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
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'general_1',
            'label' => 'LBL_GENERAL_1',
          ),
          1 => 
          array (
            'name' => 'general_2',
            'label' => 'LBL_GENERAL_2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'repear_1',
            'label' => 'LBL_REPEAR_1',
          ),
          1 => 
          array (
            'name' => 'repear_2',
            'label' => 'LBL_REPEAR_2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'min_repear',
            'label' => 'LBL_MIN_REPEAR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'chear',
            'label' => 'LBL_CHEAR',
          ),
          1 => 
          array (
            'name' => 'divan_book',
            'label' => 'LBL_DIVAN_BOOK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'divan_circle',
            'label' => 'LBL_DIVAN_CIRCLE',
          ),
          1 => 
          array (
            'name' => 'amchear',
            'label' => 'LBL_AMCHEAR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'matrats_2',
            'label' => 'LBL_MATRATS_2',
          ),
          1 => 
          array (
            'name' => 'kavrolin',
            'label' => 'LBL_KAVROLIN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'kover_company',
            'label' => 'LBL_KOVER_COMPANY',
          ),
          1 => 
          array (
            'name' => 'kover_home',
            'label' => 'LBL_KOVER_HOME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'min_him_clean',
            'label' => 'LBL_MIN_HIM_CLEAN',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'win_simple',
            'label' => 'LBL_WIN_SIMPLE',
          ),
          1 => 
          array (
            'name' => 'win_rama',
            'label' => 'LBL_WIN_RAMA',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'win_classic',
            'label' => 'LBL_WIN_CLASSIC',
          ),
          1 => 
          array (
            'name' => 'win_french',
            'label' => 'LBL_WIN_FRENCH',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'win_arka',
            'label' => 'LBL_WIN_ARKA',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'win_fasad_ground',
            'label' => 'LBL_WIN_FASAD_GROUND',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'banner',
            'label' => 'LBL_BANNER',
          ),
          1 => 
          array (
            'name' => 'fasad',
            'label' => 'LBL_FASAD',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'min_win_fasad',
            'label' => 'LBL_MIN_WIN_FASAD',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'dishes',
            'label' => 'LBL_DISHES',
          ),
          1 => 
          array (
            'name' => 'express',
            'label' => 'LBL_EXPRESS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
