<?php
//ARRAY
//Indeksnya dari 0
$buah = array('apple', 'orange', 'watermelon', 'mango');
echo '<pre>';
print_r($buah);

//menginisialilasi/menampilkan array menggunakan print_r($array);
//echo '<pre>'; untuk membuat output array dengan bentuk list (versi simple dari <br>=breakline)
$array = [];
$array[] = 'one';
$array[] = 'two';
$array[] = 'three';
echo '<pre>';
print_r($array);

//Array Asosiatif
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];

//ambil value NAME dari variable $employee
echo '<br>';
echo $employee['name'];
echo '<br>';

//ambil semua value
foreach ($employee as $key => $value) {
    echo $key . ':' . $value;
    echo '<br>';
}
?>