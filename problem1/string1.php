<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowelCount = preg_match_all('/["a","e","i","o","u","A","E","I","O","U"]/', $string);
    
    // Reverse the string
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


