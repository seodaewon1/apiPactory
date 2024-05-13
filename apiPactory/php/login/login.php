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
<<<<<<< HEAD
<?php
=======
        <header id="header">
            <div id="logos">
                <div id="logo"></div>
                <div id="title">
                    <h2><a href="/">apiPactory</a></h2>
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
>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97

    include "../component/header.php";

<<<<<<< HEAD
?>
        <div>
            <!-- login form -->
            <!-- <form action="" id="loginForm">
                <article id="main">
                    <div class="container">
                        <div class="login">
                            <div class="nav">
                                <ul>
                                    <li><a href="/">LOGIN</a></li>
                                </ul>   
                            </div>
                            <div class="idbox">
                                <div>
                                    <input type="email" name="userID" id="userID" placeholder="UserEmail" autocomplete="off"
                                        class="input-style" required>
                                </div>
                            </div>
                            <div class="passbox">
                                <div>
                                    <input type="password" name="userPass" id="userPass" placeholder="UserPassword"
                                        autocomplete="off" class="input-style" required>
                                </div>
                            </div>
                            <div class="forget">
                                <ul>
                                    <li>
                                        <a href="../member/choiceTarget.php">Forget?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="signup">
                                <ul>
                                    <li><a href="#" onclick="goSignUp()">Signup</a></li>
                                </ul>
                            </div>
                            <div class="confirm">
                                <ul>
                                    <li><a href="#">LOGIN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </form> -->
            <!-- // login form end -->
            
            <!-- // signup form start -->
            <form id="signInForm" action="signUpForm.php" name="signUpForm" method="post">
                <div class="login">
                    <div class="nav">
                        <ul>
                            <li><a href="#">SIGNUP</a></li>
                        </ul>
                    </div>
                    <div class="Userbox">
                        <label for="userEmail" class="required">이메일</label>
                        <div class="check">
                            <input type="email" name="userEmail" id="userEmail" placeholder="이메일을 입력하세요."
                                autocomplete="off" class="input-style" required>
                        </div>
                        <p class="msg"></p>
                    </div>
                    <div class="Userbox">
                        <label for="userName" class="required">이름</label>
                        <div class="check">
                            <input type="text" name="userName" id="userName" placeholder="이름을 입력하세요."
                                autocomplete="off" class="input-style" required>
                        </div>
                    </div>
                    <div class="Userbox">
                        <label for="userPass" class="required">비밀번호</label>
                        <div class="check">
                            <input type="password" name="userPass" id="userPass" placeholder="비밀번호를 입력하세요."
                                autocomplete="off" class="input-style" required>
                        </div>
=======
              

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="../../../assets/img/logo2.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form action="loginAction.php" name="loginAction" method="post" id="logInForm">
                    <input type="text" id="userEmail" name="userEmail" placeholder="이메일을 입력하세요.">
                    <input type="password" id="userPass" name="userPass" placeholder="비밀번호를 입력하세요.">
                    <input type="submit" value="로그인">
                </form>

                <form id="signInForm" action="signUpForm.php" name="signUpForm" method="post">
                    <div class="Check">
                        <input type="email" id="userEmail"  name="userEmail">
                        <label for="userEmail" >이메일</label>
                        <div class="btn" onclick="IDChecking()">이메일 중복검사</div>
                    </div>
                    <div class="Check">
                        <input type="text" id="userName"  name="userName">
                        <label for="userName" >이름</label>
                    </div>
                    <div class="Check">
                        <input type="password" id="userPass"  name="userPass">
                        <label for="userPass" >비밀번호</label>
                    </div>
                    <div class="Check">
                        <input type="password" id="userPassC"  name="userPassC">
                        <label for="userPassC" >확인</label>
                    </div>
                    <div class="Check">
                        <input type="text" id="userPhone"  name="userPhone">
                        <label for="userPhone" >전화번호</label>
>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97
                    </div>
                    <div class="Userbox">
                        <label for="userBirth" class="required">생년월일</label>
                        <div class="check">
                            <input type="text" name="userBirth" id="userBirth" placeholder="공백없이 8자리를 입력하세요."
                                autocomplete="off" class="input-style" required>
                        </div>
                    </div>
                    <input type="submit" class="signup-btn" value="회원가입">
                </div>
            </form>

            <!-- // signup form end -->
        </div>
        </div>
    </div>
    <script>
            document.addEventListener("DOMContentLoaded", function () {
<<<<<<< HEAD
               
=======
                const tabBtns = document.querySelectorAll(".underlineHover"); // 탭 버튼
                const tabContents = document.querySelectorAll("#signInForm, #logInForm"); // 콘텐츠
                
                // 로그인과 회원가입 폼 중에서 로그인 폼을 먼저 보여줍니다.
                tabContents[1].style.display = "none";
                tabContents[0].style.display = "block";

                tabBtns.forEach(function (tabBtn, index) {
                    tabBtn.addEventListener("click", function () {
                        // 클릭한 버튼의 인덱스를 가져옵니다.
                        const clickedIndex = index;

                        // 현재 클릭한 버튼에 active 클래스를 추가하고 다른 형제 요소들에게서 active 클래스를 제거합니다.
                        tabBtns.forEach(function (btn) {
                            btn.classList.remove("active");
                        });
                        tabBtn.classList.add("active");

                        // 클릭한 버튼과 같은 인덱스의 콘텐츠를 표시하고 다른 콘텐츠는 숨깁니다.
                        tabContents.forEach(function (tabContent, contentIndex) {
                            if (contentIndex === clickedIndex) {
                                tabContent.style.display = "block";
                            } else {
                                tabContent.style.display = "none";
                            }
                        });
                    });
                });
>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97
            });

            function goSignUp() {
                document.getElementById('loginForm').style.display = 'none';
            }
    </script>
</body>

</html>