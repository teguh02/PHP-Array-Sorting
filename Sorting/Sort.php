<?php

/**
 * This program coded by Teguh Rijanandi
 * Please use this program for Educational only
 */

class Sort {

    /**
     * Initialize this program is
     * not running
     */
    protected static $instance = false;

    /**
     * To initialize this program is running
     */
    public static function Algorithm() {
        self::$instance = true;

        $self = new self;
        return $self;
    }

    /**
     * Insertion sort
     */

    public static function insertionSort($my_array)
    {
        for($i=0;$i<count($my_array);$i++){
            $val = $my_array[$i];
            $j = $i-1;
            while($j>=0 && $my_array[$j] > $val){
                $my_array[$j+1] = $my_array[$j];
                $j--;
            }
            $my_array[$j+1] = $val;
        }

        if(self::$instance) {
            return $my_array;
        }
        
    }

    /**
     * Selection Sort
     */

    public static function selectionSort(array $arr)
    {
        $n = sizeof($arr);
        for ($i = 0; $i < $n; $i++) {
            $lowestValueIndex = $i;
            $lowestValue = $arr[$i];
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $lowestValue) {
                    $lowestValueIndex = $j;
                    $lowestValue = $arr[$j];
                }
            }
        
            $arr[$lowestValueIndex] = $arr[$i];
            $arr[$i] = $lowestValue;
        }

        if(self::$instance) {
            return $arr;
        }
    }

    /**
     * Bubble sort
     */

    public static function bubbleSort(array $arr)
    {
        $n = sizeof($arr);
        for ($i = 1; $i < $n; $i++) {
            for ($j = $n - 1; $j >= $i; $j--) {
                if($arr[$j-1] > $arr[$j]) {
                    $tmp = $arr[$j - 1];
                    $arr[$j - 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }

        if(self::$instance) {
            return $arr;
        }
    }

    /**
     * Generate random array
     * by number
     */

     public static function GenerateArray($number = 1)
     {
         $array = [];
         for ($i=0; $i < $number ; $i++) { 
             array_push($array, rand(1, $number));
         }

         return (array) $array;
     }

     public static function printBeautyArray($array)
     {
         echo "<pre>";
            print_r($array);
         echo "</pre>";
     }
}