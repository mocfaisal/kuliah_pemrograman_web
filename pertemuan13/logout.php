<?php
session_start();

// menghapus semua session
session_destroy();

// mengallihkan halaman dan mengirim pesan logout
header('location:index.php?pesan=logout');
