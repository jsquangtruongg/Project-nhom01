<div class="user-form-area position-relative">
    <a class="position-absolute top-0 end-0 me-3 mt-4 translate-middle" href="index.php">
        <i class="fa-solid fa-xmark"></i>
    </a>

    <div class="container-fluid p-0">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="assets/img/resgister-bg.jpg" alt="User" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="top">
                        <h2>Đăng nhập</h2>
                        <form action="index.php?act=signin" method="post">
                            <div class="form-group">
                                <label for="username">Tài khoản</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Tài khoản" required>
                            </div>
                            <div class="form-group">
                                <label for="pass">Mật khẩu</label>
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Mật khẩu" required>
                            </div>
                            <button type="submit" class="btn" name="signin">Đăng nhập</button>
                        </form>

                        <?php if (isset($thongbao) && $thongbao != '') { ?>
                            <div class="row">
                                <p style="color: red;"><?= htmlspecialchars($thongbao) ?></p>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="end mt-3">
                        Chưa có tài khoản? <a href="index.php?act=signup">Đăng ký ngay</a>
                    </div>
                    <div class="end mt-2">
                        Quên mật khẩu? <a href="index.php?act=forgot">Lấy lại mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
