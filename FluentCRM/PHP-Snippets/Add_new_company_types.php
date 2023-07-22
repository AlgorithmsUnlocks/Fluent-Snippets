<?php
/**
 * Add Own Company Types
 */

function newCompanyTypes($types){
    
    $types = [];
    $types['google'] = __('Google', 'fluent-crm');
    $types['facebook'] = __('Facebook', 'fluent-crm');
    $types['amazon'] = __('Amazon', 'fluent-crm');
    
    return $types;
}

add_filter('fluent_crm/company_types', 'newCompanyTypes');
