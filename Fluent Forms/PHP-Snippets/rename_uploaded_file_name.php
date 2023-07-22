add_filter('fluentform/uploaded_file_name', function ($file, $originalFileArray, $formData, $form) {
    $file['name'] = $originalFileArray['name'];
    return $file;
}, 10, 4);