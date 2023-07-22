<?php

// Here is the documentation : https://fluentforms.com/docs/email-verification-with-emailable/

// This will run for the specific forms you have
add_filter('fluentform_validate_input_item_input_email', function ($default, $field, $formData, $fields, $form) {

    // You may change the following 3 lines
    $targetFormId = [23,33,4]; // Enter the form ID which you want to validate
    $errorMessage = 'Invalid Email'; // You may change here
    $emailableApiKey = 'live_d0087088131ac0067935';

    if (!in_array($form->id, $targetFormId)) {
        return $default;
    }

    $fieldName = $field['name'];
    if (empty($formData[$fieldName])) {
        return $default;
    }
    $email = $formData[$fieldName];


    $request = wp_remote_get('https://api.emailable.com/v1/verify?email='.$email.'&api_key='.$emailableApiKey);

    if(is_wp_error($request)) {
        return $default; // request failed so we are skipping validation
    }

    $response = wp_remote_retrieve_body($request);

    $response = json_decode($response, true);

    if($response['state'] == 'deliverable') {
        return $default;
    }

    return $errorMessage;

}, 10, 5);