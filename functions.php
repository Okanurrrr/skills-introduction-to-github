<?php
//koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'spbenaganraya';

$conn = mysqli_connect($host, $user, $password, $database); 

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function addweb($data) {
    global $conn;
     //ambil data dari tiap elemen form
     $nama= htmlspecialchars($data ["Nama"]);
     $deskripsi= htmlspecialchars($data["Deskripsi"]);
     $status=htmlspecialchars($data["Status"]);
     $link= htmlspecialchars($data["link"]);
     $gambar= htmlspecialchars($data["gambar"]);

    
     $query = "INSERT INTO dataweb (Nama, Deskripsi, Status, Link, Gambar) 
     VALUES ('$nama', '$deskripsi', '$status', '$link', '$gambar')";
$result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM dataweb WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    //ambil data dari tiap elemen form
    $id = $data["id"];
    $nama = htmlspecialchars($data["Nama"]);
    $deskripsi = htmlspecialchars($data["Deskripsi"]);
    $status = htmlspecialchars($data["Status"]);
    $link = htmlspecialchars($data["link"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "UPDATE dataweb SET 
                Nama = '$nama', Deskripsi = '$deskripsi', Status = '$status', Link = '$link', Gambar = '$gambar' 
                WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
} 
//////////////////////////////////////////////INI ADALAH BACKEND UNTUK DATAKEC//////////////////////////////////////////////////
// Fungsi untuk menghapus data berdasarkan ID
function hapuskec($id) {
    global $conn;

    // Melakukan sanitasi input untuk mencegah SQL injection
    $id = mysqli_real_escape_string($conn, $id);

    // Query untuk menghapus data dari tabel (ganti "nama_tabel" dengan nama tabel Anda)
    $sql = "DELETE FROM datakec WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'datakec.php';
        </script> ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// functions.php
function addkec($data) {
    global $conn;
    // Ambil data dari tiap elemen form dan lakukan sanitasi
    $nama_kecamatan = htmlspecialchars($data["nama_kecamatan"]);
    $link_web = htmlspecialchars($data["link_web"]);

    // Query insert data
    $query = "INSERT INTO datakec (nama_kecamatan, link_web) 
              VALUES ('$nama_kecamatan', '$link_web')";
    $result = mysqli_query($conn, $query);

    // Cek apakah data berhasil disimpan atau tidak
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}

// File: functions.php
// (fungsi-fungsi lainnya yang sudah Anda miliki)

// functions.php 

function editkec($data)
{
    global $conn;
    // Ambil data dari tiap elemen form
    $id = $data["id"];
    $nama_kecamatan = htmlspecialchars($data["nama_kecamatan"]);
    $link_web = htmlspecialchars($data["link_web"]);

    // Query update data
    $query = "UPDATE datakec SET 
                nama_kecamatan = '$nama_kecamatan', link_web = '$link_web' 
                WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}


/////////////////////////////////////// INI ADALAH BACKEND MENU REGISTRASI DAN MENU LOGIN///////////////////////////////////////////
function registrasi($data ) {
    global $conn;

    $username = strtolower($data["username"]);
    $password = mysqli_real_escape_string( $conn, $data["password"]);
    $password2 = mysqli_real_escape_string( $conn,$data["password2"]);
     
    // cek username sudah ada atau belum
    $result = mysqli_query ($conn, "SELECT username FROM user WHERE username ='$username'");
   
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert ('username sudah daftar')
        document.location.href = 'register.php';
        </script>";
        return false;
    }

    //cek konfirmasi password 
    if($password !== $password2 ) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        document.location.href = 'register.php';
        </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query ($conn, " INSERT INTO user VALUES ('','$username', '$password')");
    
    return mysqli_affected_rows($conn);


}

?>