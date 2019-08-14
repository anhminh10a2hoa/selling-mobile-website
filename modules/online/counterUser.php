<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//Ket noi co so du lieu
$conn = mysqli_connect('localhost','root','','vietpro_mobile_shop');
mysqli_query($conn,"set names 'utf8'");
//Start Session


    $timeout=1;// Thoi gian timeout, tinh bang phut
    $id_online=session_id();//Lay id cua moi phien nguoi dung
    $sql="select 1 from `user_online` where `id`='$id_online'";
    $row = mysqli_query($conn, $sql);
    if(mysqli_num_rows($row)>0)
    {
        //Nếu đã có trong CSDL-> Cập nhật lại lastsvisit
        $sql="update `user_online` set `lastvisit`=unix_timestamp() where `id`='$id_online'";
        mysqli_query($conn,$sql);
    }
    else{
        //Chưa có trong CSDL -> Thêm vào CSDL
        $sql="insert into `user_online` values ('$id_online',unix_timestamp())";
        mysqli_query($conn,$sql);
    }

    //Xóa user hết hạn thời gian trong timeout
    $sql="delete from `user_online` where unix_timestamp()-lastvisit > $timeout * 60";
    mysqli_query($conn,$sql);

    //Lấy số lượng người đang online
    $sqlOnline = "SELECT * FROM user_online";
	$queryOnline = mysqli_query($conn, $sqlOnline);
    $rowsOnline = mysqli_num_rows($queryOnline);





    $id=session_id();//Lay id cua moi phien nguoi dung
    $sql_User="select 1 from `counter_user` where `id`='$id'";
    $row = mysqli_query($conn, $sql_User);
    if(mysqli_num_rows($row)>0)
    {
        //Nếu đã có trong CSDL-> Cập nhật lại lastsvisit
        $sql_User="update `counter_user` where `id`='$id'";
        mysqli_query($conn,$sql_User);
    }
    else{
        //Chưa có trong CSDL -> Thêm vào CSDL
        $sql_User="insert into `counter_user` values ('$id')";
        mysqli_query($conn,$sql_User);
    }
    $sqlUser = "SELECT * FROM counter_user";
	$queryUser = mysqli_query($conn, $sqlUser);
    $rowsUser = mysqli_num_rows($queryUser);
?>