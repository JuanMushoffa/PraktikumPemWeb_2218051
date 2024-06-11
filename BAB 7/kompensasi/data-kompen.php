<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1885ed">
    <title>Data Kompensasi - Sakura.id</title>
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        body{
          font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
              background-color: #f2f2f2;
        }
        table {
          width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed;
        }

        th, td {
          border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-top">
          <div class="header">
            <span class="icon logo">
              <img src="../assets/logoweb.png" alt="logo" style="width: 40px;"/>
            </span>
              </svg>
            </span>
            <span class="name">SAKURA ID</span>
          </div>
          <form class="search-box">
            <span class="icon">
              <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.1458 16.7292C13.9198 16.7292 16.9792 13.6698 16.9792 9.89583C16.9792 6.12189 13.9198 3.0625 10.1458 3.0625C6.37189 3.0625 3.3125 6.12189 3.3125 9.89583C3.3125 13.6698 6.37189 16.7292 10.1458 16.7292Z"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path d="M18.6875 18.4375L14.9719 14.7219" stroke="white" stroke-width="2" stroke-linecap="round"stroke-linejoin="round"/>
              </svg>
            </span>
            <input type="search" name="" placeholder="Search" class="user-search"/>
          </form>
          <menu class="side-nav">
            <li class="side-nav__item">
              <a href="../admin.php" class="side-nav__link">
                <span class="icon">
                  <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.38606 0.918961C8.74717 0.638097 9.25283 0.638097 9.61394 0.918961L17.3014 6.89813C17.545 7.08758 17.6875 7.37889 17.6875 7.68748V17.0833C17.6875 17.8016 17.4022 18.4905 16.8942 18.9984C16.3863 19.5063 15.6975 19.7916 14.9792 19.7916H3.02083C2.30254 19.7916 1.61366 19.5063 1.10575 18.9984C0.597841 18.4905 0.3125 17.8016 0.3125 17.0833V7.68748C0.3125 7.37889 0.454973 7.08758 0.698559 6.89813L8.38606 0.918961ZM2.3125 8.17656V17.0833C2.3125 17.2712 2.38713 17.4513 2.51997 17.5842C2.6528 17.717 2.83297 17.7916 3.02083 17.7916H14.9792C15.167 17.7916 15.3472 17.717 15.48 17.5842C15.6129 17.4513 15.6875 17.2712 15.6875 17.0833V8.17656L9 2.97517L2.3125 8.17656Z"
                      fill="white"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.4375 10.25C5.4375 9.69772 5.88522 9.25 6.4375 9.25H11.5625C12.1148 9.25 12.5625 9.69772 12.5625 10.25V18.7917C12.5625 19.344 12.1148 19.7917 11.5625 19.7917C11.0102 19.7917 10.5625 19.344 10.5625 18.7917V11.25H7.4375V18.7917C7.4375 19.344 6.98978 19.7917 6.4375 19.7917C5.88522 19.7917 5.4375 19.344 5.4375 18.7917V10.25Z"
                      fill="white"
                    />
                  </svg>
                </span>
                <span class="text" >Dashboard</span>
              </a>
            </li>
            <li class="side-nav__item">
              <a href="../total/data-total.php" class="side-nav__link">
                <span class="icon">
                  <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.64799 0.571687C8.05918 0.334788 8.52542 0.210083 9 0.210083C9.4746 0.210083 9.94086 0.3348 10.3521 0.57172C10.3528 0.572123 10.3535 0.572527 10.3542 0.572931L16.3333 3.98959C16.6639 4.18045 16.9495 4.4385 17.1723 4.74593C17.2292 4.80425 17.2798 4.87051 17.3225 4.94427C17.3589 5.00731 17.3878 5.07267 17.4092 5.13928C17.5915 5.50976 17.6871 5.9178 17.6875 6.33231V13.1677C17.687 13.6426 17.5616 14.1091 17.324 14.5203C17.0863 14.9315 16.7446 15.2729 16.3333 15.5104L16.3295 15.5126L10.3542 18.9271C10.3536 18.9274 10.353 18.9278 10.3524 18.9281C10.0731 19.0891 9.7684 19.1983 9.45296 19.2518C9.31697 19.321 9.16304 19.36 9 19.36C8.83696 19.36 8.68303 19.321 8.54704 19.2518C8.23162 19.1983 7.92696 19.0891 7.6477 18.9281C7.64708 18.9278 7.64646 18.9274 7.64583 18.9271L1.67053 15.5126L1.66667 15.5104C1.25536 15.2729 0.913723 14.9315 0.676042 14.5203C0.43836 14.1091 0.312987 13.6426 0.3125 13.1677V6.33231C0.312925 5.91781 0.408471 5.50977 0.590778 5.13929C0.612233 5.07268 0.64105 5.00731 0.677517 4.94427C0.720187 4.87051 0.770837 4.80424 0.827744 4.74592C1.05051 4.4385 1.33608 4.18046 1.66667 3.9896L1.67052 3.98737L7.64799 0.571687ZM2.3125 7.04531V13.166C2.3127 13.2901 2.34548 13.412 2.40758 13.5194C2.46945 13.6264 2.55826 13.7154 2.66517 13.7775C2.66567 13.7778 2.66617 13.7781 2.66667 13.7783L8 16.826V10.3353L2.3125 7.04531ZM10 10.3353V16.826L15.3333 13.7783C15.3338 13.7781 15.3343 13.7778 15.3348 13.7775C15.4417 13.7154 15.5305 13.6264 15.5924 13.5194C15.6545 13.412 15.6873 13.2903 15.6875 13.1663C15.6875 13.1661 15.6875 13.1665 15.6875 13.1663V7.04531L10 10.3353ZM14.6533 5.33306L9.35416 2.30499C9.24648 2.24282 9.12434 2.21008 9 2.21008C8.87566 2.21008 8.75351 2.24281 8.64583 2.30498L8.64198 2.30721L3.34672 5.33306L9 8.60328L14.6533 5.33306Z"
                      fill="white"
                    />
                  </svg>
                </span>
                <span class="text" >Data Total</span>
              </a>
            </li>
            <li class="side-nav__item">
              <a href="../kompensasi/data-kompen.php" class="side-nav__link">
                <span class="icon">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M1.54325 1.29319C2.05116 0.78528 2.74004 0.499939 3.45833 0.499939H10.2917C10.5569 0.499939 10.8112 0.605296 10.9988 0.792832L16.1238 5.91783C16.3113 6.10537 16.4167 6.35972 16.4167 6.62494V16.8749C16.4167 17.5932 16.1313 18.2821 15.6234 18.79C15.1155 19.2979 14.4266 19.5833 13.7083 19.5833H3.45833C2.74004 19.5833 2.05116 19.2979 1.54325 18.79C1.03534 18.2821 0.75 17.5932 0.75 16.8749V3.20827C0.75 2.48998 1.03534 1.8011 1.54325 1.29319ZM3.45833 2.49994C3.27047 2.49994 3.0903 2.57457 2.95747 2.7074C2.82463 2.84024 2.75 3.02041 2.75 3.20827V16.8749C2.75 17.0628 2.82463 17.243 2.95747 17.3758C3.0903 17.5086 3.27047 17.5833 3.45833 17.5833H13.7083C13.8962 17.5833 14.0764 17.5086 14.2092 17.3758C14.342 17.243 14.4167 17.0628 14.4167 16.8749V7.62494H10.2917C9.73938 7.62494 9.29167 7.17722 9.29167 6.62494L9.29167 2.49994H3.45833ZM11.2917 3.91415L13.0025 5.62494H11.2917L11.2917 3.91415ZM4.16667 7.47911C4.16667 6.92682 4.61438 6.47911 5.16667 6.47911H6.875C7.42728 6.47911 7.875 6.92682 7.875 7.47911C7.875 8.03139 7.42728 8.47911 6.875 8.47911H5.16667C4.61438 8.47911 4.16667 8.03139 4.16667 7.47911ZM4.16667 10.8958C4.16667 10.3435 4.61438 9.89577 5.16667 9.89577H12C12.5523 9.89577 13 10.3435 13 10.8958C13 11.4481 12.5523 11.8958 12 11.8958H5.16667C4.61438 11.8958 4.16667 11.4481 4.16667 10.8958ZM4.16667 14.3124C4.16667 13.7602 4.61438 13.3124 5.16667 13.3124H12C12.5523 13.3124 13 13.7602 13 14.3124C13 14.8647 12.5523 15.3124 12 15.3124H5.16667C4.61438 15.3124 4.16667 14.8647 4.16667 14.3124Z"
                      fill="white"
                    />
                  </svg>
                </span>
                <span class="text" >Data Kompen</span>
              </a>
            </li>
            <li class="side-nav__item">
              <a href="" class="side-nav__link">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.55277 0.313886C9.8343 0.173122 10.1657 0.173122 10.4472 0.313886L18.9889 4.58472C19.3277 4.75411 19.5417 5.10037 19.5417 5.47915C19.5417 5.85792 19.3277 6.20418 18.9889 6.37357L10.4472 10.6444C10.1657 10.7852 9.8343 10.7852 9.55277 10.6444L1.0111 6.37357C0.672321 6.20418 0.458318 5.85792 0.458318 5.47915C0.458318 5.10037 0.672321 4.75411 1.0111 4.58472L9.55277 0.313886ZM3.69439 5.47915L9.99999 8.63195L16.3056 5.47915L9.99999 2.32635L3.69439 5.47915ZM0.563891 9.30277C0.81088 8.80879 1.41155 8.60856 1.90553 8.85555L9.99999 12.9028L18.0944 8.85555C18.5884 8.60856 19.1891 8.80879 19.4361 9.30277C19.6831 9.79675 19.4828 10.3974 18.9889 10.6444L10.4472 14.9152C10.1657 15.056 9.8343 15.056 9.55277 14.9152L1.0111 10.6444C0.517126 10.3974 0.316902 9.79675 0.563891 9.30277ZM0.563891 13.5736C0.810881 13.0796 1.41155 12.8794 1.90553 13.1264L9.99999 17.1736L18.0944 13.1264C18.5884 12.8794 19.1891 13.0796 19.4361 13.5736C19.6831 14.0676 19.4828 14.6683 18.9889 14.9152L10.4472 19.1861C10.1657 19.3268 9.8343 19.3268 9.55277 19.1861L1.0111 14.9152C0.517126 14.6683 0.316902 14.0676 0.563891 13.5736Z"
                      fill="white"
                    />
                  </svg>
                </span>
                <span  class="text" >Contact us</span>
              </a>
            </li>
            <li class="side-nav__item">
              <a href="../logout.php" class="side-nav__link">
                <span class="icon">
                  <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M4.16666 0.5625C4.71894 0.5625 5.16666 1.01022 5.16666 1.5625V7.54167C5.16666 8.09395 4.71894 8.54167 4.16666 8.54167C3.61437 8.54167 3.16666 8.09395 3.16666 7.54167V1.5625C3.16666 1.01022 3.61437 0.5625 4.16666 0.5625ZM11 0.5625C11.5523 0.5625 12 1.01022 12 1.5625V4.83333H13.5625C14.1148 4.83333 14.5625 5.28105 14.5625 5.83333C14.5625 6.38562 14.1148 6.83333 13.5625 6.83333H8.43749C7.88521 6.83333 7.43749 6.38562 7.43749 5.83333C7.43749 5.28105 7.88521 4.83333 8.43749 4.83333H9.99999V1.5625C9.99999 1.01022 10.4477 0.5625 11 0.5625ZM17.8333 0.5625C18.3856 0.5625 18.8333 1.01022 18.8333 1.5625V9.25C18.8333 9.80229 18.3856 10.25 17.8333 10.25C17.281 10.25 16.8333 9.80229 16.8333 9.25V1.5625C16.8333 1.01022 17.281 0.5625 17.8333 0.5625ZM11 8.25C11.5523 8.25 12 8.69772 12 9.25V16.9375C12 17.4898 11.5523 17.9375 11 17.9375C10.4477 17.9375 9.99999 17.4898 9.99999 16.9375V9.25C9.99999 8.69772 10.4477 8.25 11 8.25ZM0.604156 10.9583C0.604156 10.406 1.05187 9.95833 1.60416 9.95833H6.72916C7.28144 9.95833 7.72916 10.406 7.72916 10.9583C7.72916 11.5106 7.28144 11.9583 6.72916 11.9583H5.16666V16.9375C5.16666 17.4898 4.71894 17.9375 4.16666 17.9375C3.61437 17.9375 3.16666 17.4898 3.16666 16.9375V11.9583H1.60416C1.05187 11.9583 0.604156 11.5106 0.604156 10.9583ZM14.2708 12.6667C14.2708 12.1144 14.7185 11.6667 15.2708 11.6667H20.3958C20.9481 11.6667 21.3958 12.1144 21.3958 12.6667C21.3958 13.219 20.9481 13.6667 20.3958 13.6667H18.8333V16.9375C18.8333 17.4898 18.3856 17.9375 17.8333 17.9375C17.281 17.9375 16.8333 17.4898 16.8333 16.9375V13.6667H15.2708C14.7185 13.6667 14.2708 13.219 14.2708 12.6667Z"
                      fill="white"
                    />
                  </svg>
                </span>
                <span class="text" >Log out</span>
              </a>
            </li>
          </menu>
        </div>
        <div class="sidebar-bottom">
          <figure class="profile">
            <img src="../assets/fotoprofile.jpg" alt="user profile image" class="profile-pic"/>
            <figcaption class="profile-details">
              <span class="user-name">Juan Mushoffa.</span>
              <span class="user-email">juanmushoffa@gmail.com</span>
            </figcaption>
          </figure>
        </div>
      </aside>
      <section class="home-section">
        <nav>
            <div class="profile-details">
                <span class="admin_name" style="font-size: 20px; margin-right: 10px;margin-top:15px">Admin</span>
                <a href="../admin.php">
                    <img src="../assets/fotoprofile.jpg" alt="" />
                </a>
            </div>
         </nav>
    </section>
    <div class="table-container__datkom">
        <h1>Data Kompensasi</h1>

        <!-- Daftar data kompen -->
        <table id="listKompen">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>ID Pegawai</th>
                    <th>Jenis Kompensasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data akan ditampilkan di sini -->
            </tbody>
        </table>

        <div class="btn-container__datkom">
            <button class="btn__datkom" onclick="goToEntryKompen()">Tambah Data</button>
        </div>
    </div>

    <!-- Pop-up container -->
    <div id="editPopupContainer" class="popup-container__datkom">
        <!-- Pop-up form untuk edit data -->
        <div id="editPopup" class="popup__datkom">
            <h2>Edit Data Kompen</h2>
            <form id="editForm">
                <input type="text" id="editNama" placeholder="Nama Pegawai"><br>
                <input type="text" id="editJabatan" placeholder="Jabatan Pegawai"><br>
                <input type="text" id="editId" placeholder="ID Pegawai"><br>
                <input type="text" id="editJenis" placeholder="Jenis Kompensasi"><br>
                <button type="submit" class="btn">Simpan</button><br><br>
            </form>
        </div>
    </div>
    <div class="sosmed">
        <strong>sakuraid@gmail.com | +6285852153554</strong>
        <h5>&copy; Administrator Sakura ID  </h5>
    </div>

    <script>
        // Ambil data yang dikirim dari halaman entry-kompen.html
        function goToEntryKompen() {
            window.location.href = '../kompensasi/kompen-entry.php';
        }

        

    </script>
</body>
</html>
