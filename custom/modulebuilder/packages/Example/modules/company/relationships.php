<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
$relationships = array (
  'custo_company_custo_company' => 
  array (
    'rhs_label' => 'Контрагент Uclean_Group',
    'lhs_label' => 'Контрагент Uclean_Group',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'custo_company',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_custo_company',
  ),
  'custo_company_tasks' => 
  array (
    'rhs_label' => 'Задачи',
    'lhs_label' => 'Контрагент Uclean_Group',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_tasks',
  ),
  'custo_company_meetings' => 
  array (
    'rhs_label' => 'Встречи',
    'lhs_label' => 'Контрагент Uclean_Group',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_meetings',
  ),
  'custo_company_calls' => 
  array (
    'rhs_label' => 'Звонки',
    'lhs_label' => 'Контрагент Uclean_Group',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_calls',
  ),
  'custo_company_emails' => 
  array (
    'rhs_label' => 'E-mail',
    'lhs_label' => 'Контрагент Uclean_Group',
    'rhs_subpanel' => 'ForQueues',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Emails',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_emails',
  ),
  'custo_company_users' => 
  array (
    'rhs_label' => 'Пользователи',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Users',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_users',
  ),
  'custo_company_emails_1' => 
  array (
    'rhs_label' => 'E-mail',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'ForQueues',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Emails',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_emails_1',
  ),
  'custo_company_securitygroups' => 
  array (
    'rhs_label' => 'Расширенные настройки безопасности',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'SecurityGroups',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_securitygroups',
  ),
  'custo_company_prospectlists' => 
  array (
    'rhs_label' => 'Цели - списки',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'ProspectLists',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_prospectlists',
  ),
  'custo_company_jjwg_maps' => 
  array (
    'rhs_label' => 'Карты',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'jjwg_Maps',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_jjwg_maps',
  ),
  'custo_company_campaigns' => 
  array (
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'Campaigns',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_campaigns',
  ),
  'custo_company_custo_contact' => 
  array (
    'rhs_label' => 'Контакт Uclean_Group',
    'lhs_label' => 'Контрагент Uclean_Group',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'custo_company',
    'rhs_module' => 'custo_contact',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'custo_company_custo_contact',
  ),
);