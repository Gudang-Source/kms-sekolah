<?php
require_once 'init.php';

$login= new Login();

$nik =@$_POST['nik'];
$pass =@$_POST['sandi'];

if(isset($_POST['login'])){
    if($nik=="" AND $pass==""){
        echo "<script>alert('Tidak Boleh Ada Daya yang kosong')</script>";
    }else{
        $login->login($nik,$pass);
    }
}

?>


<script>
$('.message a').click(function() {
    $('form').animate({
        height: "toggle",
        opacity: "toggle"
    }, "slow");
});
</script>


<div class="login-page">

    <div class="form">
        <H2>Login</H2>
        <form class="login-form" action="" method="post">
            <input type="text" name="nik" placeholder="NIK" />
            <input type="password" name="sandi" placeholder="Kata Sandi" />
            <button type='submit' name='login'>login</button>
        </form>
    </div>
</div>