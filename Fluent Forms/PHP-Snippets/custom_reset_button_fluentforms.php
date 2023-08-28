// Modify the filters --> fluentform/rendering_field_html_
// docs link: https://fluentforms.com/docs/fluentform_rendering_field_html_/

add_filter( 'fluentform/rendering_field_html_button', 'fluentforms_custom_reset_button', 10, 3 );

// Change the Form ID 262 to your actual form id
function fluentforms_custom_reset_button( $html, $data, $form ) {
    if( $form->id == 1 ) {
    $reset_btn = '<button class="reset-button ff-btn ff-btn-md" type="reset">Reset</button>' . "\n";
    $html = str_replace( '</div>', $reset_btn . '</div>', $html );
}
    return $html;
}