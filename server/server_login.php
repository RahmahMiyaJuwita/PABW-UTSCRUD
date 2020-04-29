<?php 

require_once("../conn.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika pengguna sudah terdaftar 
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            $_SESSION["status"] = 'login';
            // login sukses, masuk ke timeline
            header("Location: ../crud/form.php");
        }else{
            echo "
                <script type='text/javascript'>
                alert('Username atau Password anda salah!');
                history.back(self);
                </script>";
        }
    }
}
?>