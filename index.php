<?php

include __DIR__ . '/Sorting/Sort.php';

/**
 * Usage example
 * Please use this program for Educational only
 * 
 * Institut Teknologi Telkom Purwokerto
 * S1SE03B
 *
 * By : 
 * Teguh Rijanandi 19104008
 * Syahril A. K. Hamzah 19104036
 * Rahmat Dian Rifa’I 19104056
 * Fadlan Raka Satura 19104072
 */

 function insertionSort()
 {
    echo "<h4> insertionSort </h4>";

    // generate random array 
    $array_random = Sort::GenerateArray(10000);

    echo "Sebelum di sorting";
    Sort::printBeautyArray($array_random);

    //  deklarasi waktu mulai program
    $waktu_mulai = microtime(true);

    // proses sorting
    $sesudah_sorting = Sort::Algorithm() 
                                -> insertionSort($array_random);

    echo "Sesudah di sorting";
    Sort::printBeautyArray($sesudah_sorting);

    // print waktu yang dibutuhkan

    echo "Waktu mulai <br>";
    echo  ($waktu_mulai * 1000) . '<br><br>';

    echo "Waktu yang dibutuhkan untuk sorting data <br>";
    $waktu_akhir =  microtime(true) - $waktu_mulai;
    echo ($waktu_akhir * 1000);

 }

 function selectionSort()
 {
     echo "<h4> selectionSort </h4>";

    // generate random array 
    $array_random = Sort::GenerateArray(10000);

    echo "Sebelum di sorting";
    Sort::printBeautyArray($array_random);

    //  deklarasi waktu mulai program
    $waktu_mulai = microtime(true);

    // proses sorting
    $sesudah_sorting = Sort::Algorithm() 
                                -> selectionSort($array_random);

    echo "Sesudah di sorting";
    Sort::printBeautyArray($sesudah_sorting);

    // print waktu yang dibutuhkan

    echo "Waktu mulai <br>";
    echo  ($waktu_mulai * 1000) . '<br><br>';

    echo "Waktu yang dibutuhkan untuk sorting data <br>";
    $waktu_akhir =  microtime(true) - $waktu_mulai;
    echo ($waktu_akhir * 1000);

 }

 function bubbleSort()
 {
     echo "<h4> selectionSort </h4>";

    // generate random array 
    $array_random = Sort::GenerateArray(10000);

    echo "Sebelum di sorting";
    Sort::printBeautyArray($array_random);

    //  deklarasi waktu mulai program
    $waktu_mulai = microtime(true);

    // proses sorting
    $sesudah_sorting = Sort::Algorithm() 
                                -> bubbleSort($array_random);

    echo "Sesudah di sorting";
    Sort::printBeautyArray($sesudah_sorting);

    // print waktu yang dibutuhkan

    echo "Waktu mulai <br>";
    echo  ($waktu_mulai * 1000) . '<br><br>';

    echo "Waktu yang dibutuhkan untuk sorting data <br>";
    $waktu_akhir =  microtime(true) - $waktu_mulai;
    echo ($waktu_akhir * 1000);

 }

//  insertionSort();
//  selectionSort();
bubbleSort();