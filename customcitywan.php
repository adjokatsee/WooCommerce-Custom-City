<?php
function custom_override_default_address_fields($address_fields) {
    //unset($address_fields['city']);
    $address_fields['city'] = array(
        'type' => 'select',
        'label' => 'Street District/Town',//Town / City
        'required' => true,
        'class' => array('form-row-wide', 'address-field'),
        'autocomplete' => 'address-level2',
        'options' => array(
            'option_1' => 'huhu grimace',
            'gerimis' => 'gerimis'
        )
    );
    return $address_fields;
}
