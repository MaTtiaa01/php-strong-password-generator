<?php

// function generatePassword($length)
// {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// };

function generatePassword($length, $true)
{
    $randomString = '';

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/.@?|>$%&(!';
    $charactersLength = strlen($characters);

    $charNumber = '0123456789';
    $charNumberLength = strlen($charNumber);


    $charSymbols = '/.@?|>$%&(!';
    $charSymbolsLength = strlen($charSymbols);




    if ($true === 'on') {
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    } else {
        for ($i = 0; $i < $length; $i++) {
            $randomChar = $characters[rand(0, $charactersLength - 1)];
            if (!str_contains($randomString, $randomChar)) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        }
    }





    return $randomString;
};


function generatePasswordLetter($length, $true)
{
    $charLetter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLetterLength = strlen($charLetter);
    $randomString = '';
    if ($true === 'on') {
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $charLetter[rand(0, $charLetterLength - 1)];
        }
    } else {
        for ($i = 0; $i < $length; $i++) {
            $randomChar = $charLetter[rand(0, $charLetterLength - 1)];
            if (!str_contains($randomString, $randomChar)) {
                $randomString .= $charLetter[rand(0, $charLetterLength - 1)];
            }
        }
    }
};
