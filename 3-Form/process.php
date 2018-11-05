<?php
/**
 * File ini hanya digunakan untuk memberikan bayangan bagaimana
 * bentuk data yang terima oleh server yang dikirim dari suatu form.
 * 
 * Cheers :*
 */

// Ganti pakai $_POST kalau HTTP method nya POST
$request = $_GET;

echo json_encode($request);
header("Content-Type: application/json");