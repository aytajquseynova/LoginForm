<?php
session_start();
$email = $_POST['email'];
$psw = $_POST['psw'];

$file = 'users.txt';

if(file_exists('users.txt')){

    $read = fopen($file, 'r');
    $varmi = 0;
    while(!feof($read)){
        $line = fgets($read);
        $arr = explode(" ", $line);

        // if($arr[2] == $email ){
        //     echo "Giris yapildi";
        //     $varmi = 1;
        //     break;
        // }
            // session_start();
            // echo "<pre>";
            // print_r($arr[1]);
            $_SESSION['firstname'] = $arr[0];
            $_SESSION['secondname'] = $arr[1];
            $_SESSION['email'] = $arr[2];
            $_SESSION['psw'] = $arr[3];
            $_SESSION['birthday'] = $arr[4];
            $_SESSION['gender'] = $arr[5];
            $_SESSION['signupDate'] = $arr[6];
            $_SESSION['ip'] = $arr[7];
            $_SESSION['page'] = 0;

            echo "<a href = 'sayfa1.php'>Sayfa 1</a>"."<br>";
            echo "<a href = 'sayfa2.php'>Sayfa 2</a>" . "<br>";
            echo "<a href = 'sayfa3.php'>Sayfa 3</a>" . "<br>";
            echo "<a href = 'sayfa4.php'>Sayfa 4</a>" . "<br>";
            echo "<a href = 'exit.php'>Cikis</a>" . "<br>";
            $varmi = 1;
            break;
    }
    if($varmi == 0){
        echo "Email ve ya sifre yanlis";
    }

}else{
   echo "Sistemde hic bir kullanici yok.Lutfen once kayd olun";
}