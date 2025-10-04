<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    // In a real application, this should check a 'users' table in the database
    public function validate_login($username, $password) {
        
        // --- SECURE: In a real system, use password_hash() and password_verify() ---
        // For a quick test, use simple static credentials
        $test_username = 'admin';
        $test_password = 'password123'; 
        
        if ($username === $test_username && $password === $test_password) {
            return TRUE;
        }
        return FALSE;
    }
}
