<?php
include "partials-front/header.php";
if(isset($_SESSION['LoginOK'])){
    if(substr($_SESSION['LoginOK'], 0, 1) == '1'){
    ?>
    <head>
        <title>Tài khoản bị khóa</title>
    </head>
        <main style="margin-top: 70px; margin-bottom:70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ms-auto me-auto">
                        <div class="bg-dark shadow-sm rounded p-2">
                            <h4 class="text-warning text-center">Tài khoản của bạn đã bị khóa vui lòng liên hệ Admin để được hỗ trợ!</h4>
                            <br>
                            <h5 class="text-warning text-center">0366.889.368 & Daodan2612@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php
    }else if(substr($_SESSION['LoginOK'], 0, 1) == '2'){
    ?>
        <main style="margin-top: 70px; margin-bottom:70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ms-auto me-auto">
                        <div class="bg-dark shadow-sm rounded p-2">
                            <h4 class="text-warning text-center">  Tài khoản kinh doanh của bạn đã bị khóa vui lòng liên hệ Admin để được hỗ trợ!</h4>
                            <br>
                            <h5 class="text-warning text-center">0366.889.368 & Daodan2612@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php
    }
}else if(!isset($_SESSION['LoginOK'])){
    ?>
        <main style="margin-top: 70px; margin-bottom:70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ms-auto me-auto">
                        <div class="bg-dark shadow-sm rounded p-2">
                            <h4 class="text-warning text-center">  Tài khoản người dùng của bạn đã bị khóa vui lòng liên hệ Admin để được hỗ trợ!</h4>
                            <br>
                            <h5 class="text-warning text-center">0366.889.368 & Daodan2612@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php
}
require "partials-front/footer.php";
?>