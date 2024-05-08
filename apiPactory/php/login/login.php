<?php
    include "../connection/connection.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/logintemp.css">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div id="logos">
                <div id="logo"></div>
                <div id="title">
                    <h2><a href="#">apiPactory</a></h2>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="#">api 상품</a></li>
                        <li><a href="#">카테고리</a></li>
                        <li><a href="#">공지사항</a></li>
                    </ul>
                </div>
            </div>
            <div id="controller">
                <div id="searchBar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="검색어를 입력하세요" class="search-input">
                </div>
                <div id="profile"></div>
            </div>
        </header>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="underlineHover"> 로그인 </h2>
                <h2 class="underlineHover"> 회원가입 </h2>

                <!-- Icon -->
                <!-- <div class="fadeIn first">
                    <img src="../../../assets/img/logo2.png" id="icon" alt="User Icon" />
                </div> -->

                <!-- Login Form -->
                <form action="loginAction.php" name="loginAction" method="post" id="logInForm">
                    <input type="text" id="userEmail" class="fadeIn second" name="userEmail" placeholder="이메일을 입력하세요.">
                    <input type="password" id="userPass" class="fadeIn third" name="userPass" placeholder="비밀번호를 입력하세요.">
                    <input type="submit" class="fadeIn fourth" value="로그인">
                </form>

                <form id="signInForm">
                    <div class="Check">
                        <input type="text" id="youID" class="fadeIn second" name="youID">
                        <label for="youID">이메일</label>
                        <div class="btn" onclick="IDChecking()">아이디 중복검사</div>
                    </div>
                    <input type="text" id="youName" class="fadeIn second" name="youName" placeholder="이름을 입력해주세요.">
                    <input type="password" id="youPass" class="fadeIn third" name="youPass" placeholder="비밀번호">
                    <input type="password" id="youPassC" class="fadeIn third" name="youPassC" placeholder="비밀번호 확인">
                    <input type="text" id="youPhone" class="fadeIn third" name="youPhone" placeholder="-없이 입력해주세요.">
                    <input type="submit" class="fadeIn fourth" value="다음">
                </form>



                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">아이디, 비밀번호가 생각나지 않습니다.</a>
                </div>

            </div>
        </div>
    </div>
    <script>
        var loginBox = document.querySelector('.outBox');
        var loginInputBox = document.querySelector('#sampleId');
        loginInputBox.addEventListener('keyup', function(){
            if(!loginInputBox.value == ''){
                loginBox.classList.add('existence');   
            }else{
                loginBox.classList.remove('existence');   
            }
});
    </script>
</body>

</html>