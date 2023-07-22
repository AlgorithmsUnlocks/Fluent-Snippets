<?php

// Fluent CRM unsubscribe content/text change or modify via filter hooks

function fluentCRM_unsubscribe_filter_hooks($texts){

    $texts = [
        'heading'             => __('Unsubscribe', 'fluent-crm'),
        'heading_description' => __('We\'re sorry to see you go!', 'fluent-crm'),
        'email_label'         => __('Your Email Address', 'fluent-crm'),
        'reason_label'        => __('Please let us know a reason', 'fluent-crm'),
        'button_text'         => __('Unsubscribe', 'fluent-crm')
    ];
    return $texts;
}
add_filter('fluent_crm/unsubscribe_texts', 'fluentCRM_unsubscribe_filter_hooks',10);


// Fluent CRM reasons text change or modify
function fluentCRM_unsubscribe_reason($reasons){
    $reasons = [
        'no_loger'             => __('I no longer want to receive these emails', 'fluent-crm'),
        'never_signed_up'      => __('I never signed up for this email list', 'fluent-crm'),
        'emails_inappropriate' => __('The emails are inappropriate', 'fluent-crm'),
        'emails_spam'          => __('The emails are spam', 'fluent-crm')
    ];

    return $reasons;
}

add_filter('fluent_crm/unsubscribe_reasons', 'fluentCRM_unsubscribe_reason');


// FluentCRM response text change or modify
function fluentCRM_unsubscribe_response_message($message, $subscriber){
    return 'You are unsubscribed and no further email will be sent';
}

add_filter('fluent_crm/unsub_response_message', 'fluentCRM_unsubscribe_response_message', 10, 2);