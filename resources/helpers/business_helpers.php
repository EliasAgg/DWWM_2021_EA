<?php
// Helpers functions for App\Models\Business class

/**
 * Format a french phone number to display
 * @param string $phone
 * @return string $formattedPhoneNumber
 */
if (!function_exists("formatPhone")) {
    function formatPhone(string $phone) : string
    {
        return implode(' ', str_split($phone, 2));
    }
}
