<?php
include('partials-front/header.php');
require "../config/config.php";
if (isset($_SESSION['LoginOK']) && substr($_SESSION['LoginOK'], 0, 1) == '3') {
    
} else {
    header('location: ../index.php');
}
?>
<head>
    <title>Admin User</title>
</head>
<body >
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Họ người dùng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Trạng thái</th>
                        <!-- <th scope="col">Địa chỉ</th> -->
                        <th scope="col">Liên kết lúc</th>
                        <th scope="col">Khóa</th>
                        <th scope="col">Người quản trị</th>
                        <th scope="col">Khóa</th>
                        <th scope="col">Mở</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tb_user";
                        $res = mysqli_query($conn,$sql);
                        $sn = 1;
                        if(mysqli_num_rows($res) > 0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id_user = $row['id_user'];
                                $nameuser = $row['nameuser'];
                                $surnameuser = $row['surnameuser'];
                                $email = $row['email'];
                                $phonenumber = $row['phonenumber'];
                                if($row['status_user'] == 0)
                                    $status = 'Không hoạt động';
                                else
                                    $status = 'Hoạt động';
                                
                                $email_verification_link = $row['email_verification_link'];
                                $email_verified_at = $row['email_verified_at'];
                                
                                if($row['lock'] == 0)
                                    $lock = 'Không Khóa';
                                else
                                    $lock = 'Đang Khóa';
                                if($row['admin'] == 0)
                                    $admin = 'Sai';
                                else
                                    $admin = 'Đúng';


                                ?>
                                <tr>
                                    <th scope="row"><?php echo $sn++; ?></th>
                                    <td><?php echo $id_user; ?></td>
                                    <td><?php echo $nameuser; ?></td>
                                    <td><?php echo $surnameuser; ?></td>
                                    <td> <?php echo $email; ?></td>
                                    <td><?php echo $phonenumber; ?></td>
                                    <td><?php echo $status; ?></td>
                                    
                                    <td><?php echo $email_verified_at; ?></td>
                                    <td><?php echo $lock; ?></td>
                                    <td><?php echo $admin; ?></td>

                                    <td>
                                        <a onclick="return confirm('Bạn chắc chắn muốn khóa người dùng này?')" href="process-lockuser.php?id=<?php echo $id_user;?>" >
                                        <i class="fas fa-lock text-center" style="color:blue"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="process-unlockUser.php?id=<?php echo $id_user;?>" onclick="return confirm('Bạn chắc chắn muốn mở khóa người dùng này?')">
                                        <i class="fas fa-lock-open" style="color:red"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else{}
                    ?>
            </table>
            <?php
            /*
            <td><?php echo $email_verification_link.substr($row['email_verification_link'], 50); ?></td>
            */
            ?>
        </div>
    </div>
</body>

<?php include('partials-front/footer.php') ?>