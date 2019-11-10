<?php require $_SERVER['DOCUMENT_ROOT']."/php/header.php" ?>

    <div class="main">
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="form-conatiner">
                        <h2 class="title">로그인</h2>
                        <hr>
                    <form action="/db/login_db.php" method="POST">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" id="id" name="id" class="form-control" name="id" placeholder="아이디를 입력해주세요">
                            </div>

                            <div class="form-group">
                                <label for="pw">PW</label>
                                <input type="text" id="pw" name="pw" class="form-control" placeholder="비밀번호를 입력해주세요">
                            </div>

                            <div>
                                <button class="btn btn-danger btn-block" type="submit">LOGIN</button>
                            </div>
                            <hr>
                            <div>
                                <a href="/page/join.php" class="btn btn-success btn-block">JOIN</a>
                            </div>
                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/php/footer.php" ?>
