<?php

    include "../connection/connection.php";

    $userEmail = mysqli_real_escape_string($connection , $_POST['userEmail']);
    $userName = mysqli_real_escape_string($connection , $_POST['userName']);
    $userPass = mysqli_real_escape_string($connection , $_POST['userPass']);
    $userBirth =mysqli_real_escape_string($connection , $_POST['userBirth']);
    $regTime = time();

    $hashedPass = password_hash($youPass , PASSWORD_DEFAULT) ;

    $sql = "INSERT INTO member(userEmail, userName, userPass, regTime)
    VALUES('$userEmail', '$userName' , '$hashedPass'  ,'$regTime')";

    $result = $connection -> query($sql);
    

    if(!$result) {
        die("쿼리 실행에 실패했습니다. : ". $connection->error);
    }else {
        echo "쿼리 실행 성공";
    }

    // 연결 닫기
    mysqli_close($connection);

    echo "<script>alert('회원가입을 축하드립니다.')</script>";
    echo "<script>window.location.href='/'</script>"; 
?>

