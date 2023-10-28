<?php


$name = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$pswrpt = $_POST['pswrpt'];
$bday = $_POST['birthday'];
$gender = $_POST['gender'];
$file = "users.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$signupDate = date('d/m/Y');



if ($psw == $pswrpt) {
    $birlesdir = "$name $secondname $email $psw $bday $gender $signupDate $ip" . PHP_EOL;

    if (file_exists($file)) {
        $varmi = 0;
        $read = fopen($file, 'r');
        while (!feof($read)) {
            $line = fgets($read);
            $arr = explode(" ", $line);
            if ($arr[2] === $email ) {
                $varmi = 1;
                break;
            }
        
        }
        fclose($read);
        if ($varmi == 1) {
            echo "Boyle bir kullanici var";
        } else {
            $write = fopen($file, "a");
            fwrite($write, $birlesdir);
            fclose($write);
            echo "Congrats. You are welcome.<br><br>";
            echo "<a href='index.html'>Ana sehifeye qayidin</a><br><br>";
        }
    } else {
        $write = fopen($file, "a");
        fwrite($write, $birlesdir);
        fclose($write);
        echo "Congrats. You are welcome.<br><br>";
        echo "<a href='index.html'> Ana sehifeye qayidin</a><br><br>";
    }
} else {
    echo 'Sifreler eslesmiyor';
}
?>

