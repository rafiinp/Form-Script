
<?php
    if (isset($_POST['button'])) {
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            if(empty($_POST[
                "user_name"])){
                echo "Nama kosong";
                } else{
                    $user_name = cek_input($_POST["user_name"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
                        echo "nama harus huruf";
                    } else {
                        $user_name = $_POST['user_name'];
                        $user_email = $_POST['user_email'];
                        $pilihan = $_POST['pilihan'];

                        echo "Atas nama $user_name dengan alamat email
                        $user_email memesan buku $pilihan metode transfer akan kami infokan lewat E-Mail";
                    
                    }
                }
        }
    }
function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>