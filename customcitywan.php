<?php

function custom_override_default_address_fields($address_fields) {
    //var_dump($address_fields['state']);
    $address_fields['city'] = array(
        'type' => 'select',
        'label' => 'Street District/Town', //Town / City
        'required' => true,
        'class' => array('form-row-wide', 'address-field'),
        'autocomplete' => 'address-level2',
        'options' => array(
            'Taman Tunas Muda' => 'Taman Tunas Muda',
            'SMK Sungai Ara' => 'SMK Sungai Ara',
            'Persiaran Mahsuri' => 'Persiaran Mahsuri',
            'Relau' => 'Relau',
            'Gerbang Sungai Ara' => 'Gerbang Sungai Ara',
            'Kampung Baru' => 'Kampung Baru',
            'Kampung Tersusun' => 'Kampung Tersusun',
            'Bayan Lepas' => 'Bayan Lepas',
            'Bukit Gedung' => 'Bukit Gedung',
            'Bayan Baru' => 'Bayan Baru',
            'Sungai Tiram' => 'Sungai Tiram',
            'Sungai Nibong Kecil' => 'Sungai Nibong Kecil',
            'Teluk Kumbar' => 'Teluk Kumbar',
            'Batu Maung' => 'Batu Maung',
            'Pantai Jerejak' => 'Pantai Jerejak',
            'Sungai Dua' => 'Sungai Dua',
            'Batu Uban' => 'Batu Uban',
            'Jelutung' => 'Jelutung',
            'Sg. Pinang' => 'Sg. Pinang',
            'Greenlane' => 'Greenlane',
            'Batu Lancang' => 'Batu Lancang'
        )
    );
    return $address_fields;
}
