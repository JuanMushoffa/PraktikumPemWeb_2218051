<?php
include 'koneksi.php';

// Mulai sesi sebelum memeriksa login
session_start();

if (isset($_POST['login'])) {
    // Ambil inputan dari form
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    // Validasi dan sanitasi input
    $requestUsername = trim($requestUsername);
    $requestPassword = trim($requestPassword);

    if (!empty($requestUsername) && !empty($requestPassword)) {
        // Query untuk mencari username yang sesuai
        $sql = "SELECT id, password, username FROM tb_admin WHERE username = ?";
        $stmt = $koneksi->prepare($sql);
        
        if ($stmt === false) {
            // Jika statement gagal dipersiapkan
            die("Kesalahan persiapan query: " . $koneksi->error);
        }

        // Bind parameter dan eksekusi query
        $stmt->bind_param("s", $requestUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        // Periksa apakah username ditemukan
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verifikasi password
            if (password_verify($requestPassword, $row['password'])) {
                // Set session dan redirect jika login berhasil
                $_SESSION['username'] = $row['username'];
                header('Location: admin.php');
                exit();
            } else {
                // Password salah
                echo "<script>
                        alert('Password yang Anda masukkan salah. Silakan coba lagi.');
                        window.location = 'login.php';
                      </script>";
            }
        } else {
            // Username tidak ditemukan
            echo "<script>
                    alert('Username tidak ditemukan. Silakan coba lagi.');
                    window.location = 'login.php';
                  </script>";
        }

        // Tutup statement
        $stmt->close();
    } else {
        // Jika input kosong
        echo "<script>
                alert('Username dan Password tidak boleh kosong.');
                window.location = 'login.php';
              </script>";
    }
}

// Tutup koneksi
$koneksi->close();
?>
