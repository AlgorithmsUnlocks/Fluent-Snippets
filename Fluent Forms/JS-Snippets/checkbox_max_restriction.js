function maxItemsCheck(containerClass, maxChecked) {
    var checkboxes = $form.find('.'+containerClass+' input');
    checkboxes.on('change', function() {
        var count = $form.find('.'+containerClass+' input:checked').length;
        if(count > maxChecked) {
            alert('You can not check more than '+maxChecked+' items');
            $(this).prop('checked', false);
        }
    });
}

// Example Use case
maxItemsCheck('max_3_items', 3); 