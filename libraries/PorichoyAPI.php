<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PorichoyAPI {
    // Define the API URL and the API Key
    private $api_url = 'https://api.porichoybd.com//api/v2/verifications/autofill';
    private $api_key = 'apiKey'; // Replace with your actual API key

    // Constructor
    public function __construct() {
        // Load the cURL library if needed
        $this->CI =& get_instance();
    }

    // Function to perform the API request
    public function verify_nid($nid_number, $date_of_birth, $english_translation = true) {
        // API Request Body
        $data = array(
            'nidNumber' => $nid_number,
            'dateOfBirth' => $date_of_birth,
            'englishTranslation' => $english_translation
        );

        // Set the headers
        $headers = array(
            'Content-Type: application/json',
            'x-api-key: ' . $this->api_key
        );

        // Initialize cURL
        $ch = curl_init();

        // cURL options
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return array('error' => true, 'message' => $error_msg);
        }

        // Close cURL
        curl_close($ch);

        // Decode the JSON response
        $result = json_decode($response, true);

        return $result;
    }
}
