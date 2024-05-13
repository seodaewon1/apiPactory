<?php

    include "../connection/connection.php";

    $userEmail = mysqli_real_escape_string($connection , $_POST['userEmail']);
    $userName = mysqli_real_escape_string($connection , $_POST['userName']);
    $userPass = mysqli_real_escape_string($connection , $_POST['userPass']);
<<<<<<< HEAD
    $userBirth =mysqli_real_escape_string($connection , $_POST['userBirth']);
=======
    $userPhone =mysqli_real_escape_string($connection , $_POST['userPhone']);
>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97
    $regTime = time();

    $hashedPass = password_hash($youPass , PASSWORD_DEFAULT) ;

<<<<<<< HEAD
    $sql = "INSERT INTO member(userEmail, userName, userPass, regTime)
    VALUES('$userEmail', '$userName' , '$hashedPass'  ,'$regTime')";
=======
     // 쿼리
    // $sql = "INSERT INTO members(youID , youName , youEmail , youPass , youAddress , youPhone , regTime) VALUES()";
    $sql = "INSERT INTO member(userEmail, userName, userPass, userPhone, regTime) 
        VALUES('$userEmail', '$userName' , '$hashedPass' , '$userPhone' ,'$regTime')";
>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97

    $result = $connection -> query($sql);
    

    if(!$result) {
        die("쿼리 실행에 실패했습니다. : ". $connection->error);
    }else {
        echo "쿼리 실행 성공";
    }

    // 연결 닫기
    mysqli_close($connection);

    echo "<script>alert('회원가입을 축하드립니다.')</script>";
<<<<<<< HEAD
    echo "<script>window.location.href='/'</script>"; 
?>

=======
    echo "<script>window.location.href='/'</script>";
?>


>>>>>>> 065b7376751f40b0f49dd2c86d83b9422be05d97
