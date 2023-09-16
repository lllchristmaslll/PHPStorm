<?php
$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$charactersLength = strlen($characters);
$password = "";

for ($i = 0; $i < 19; $i++){
        $password .= $characters[random_int(0,$charactersLength - 1)];
        if ($i % 5 == 4 && $i != 18){
                $password.="-";
        }
}
print $password;
echo "\n"
?>