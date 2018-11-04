<?php
/**
 * File ini hanya digunakan untuk menampilkan hasi input suatu form.
 * Dan file ini tidak wajib untuk kalian pelajari.
 * 
 * Cheers :*
 */

// Ganti pakai $_POST kalau HTTP method nya POST
$request = $_GET;

echo json_encode($request);
header("Content-Type: application/json");