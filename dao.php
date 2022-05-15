<?php
include 'db.php';
/*Insert into Database Student*/
function adduser($user){
    $nam=$user['name'];
    $em=$user['email'];
    $nu=$user['pass'];
    $e_p=md5($nu);
    $con=$GLOBALS['con'];
    $sql="insert into reg(Uname,Email,Pass) values(?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sss",$nam,$em,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Login Form*/
function login($user){
    $con=$GLOBALS ['con'];
    $name=$user['name'];
    $em=$user['email'];
    $pass=$user['pass'];
    $e_p=md5($pass);
    $sql="select id,Uname,Email,Pass from reg where Uname=? and Email=? and Pass=?";
    $st=$con->prepare($sql);
        $st->bind_param("sss",$name,$em,$e_p);
        if($st->execute()){
            $rs=$st->get_result();
            if($rs->num_rows>0){ 
                return $rs->fetch_assoc()['id'];
                //return true;
            }
            else
            {
                return false;
            }
        }
 }
 /*Admin login */
 function adlogin($user){
    $con=$GLOBALS ['con'];
    $name=$user['name'];
    $pass=$user['pass'];
    $e_p=md5($pass);
    $sql="select Name,pass from adminlog where Name=? and pass=?";
    $st=$con->prepare($sql);
        $st->bind_param("ss",$name,$e_p);
        if($st->execute()){
            $rs=$st->get_result();
            if($rs->num_rows>0){ 
                return true;
            }
            else
            {
                return false;
            }
        }
 }
 /*show data base data For Student*/
function getUser(){
    $con=$GLOBALS['con'];
    $sql="select * from reg";
    $res=$con->query($sql);
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
/*show data base data For Book*/
function getUserB(){
    $con=$GLOBALS['con'];
    $sql="select * from Book";
    $res=$con->query($sql);
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
/*Delete Student */
function delUser($id){
    $con=$GLOBALS['con'];
    $sql="delete from reg where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Delete Book */
function delUserB($id){
    $con=$GLOBALS['con'];
    $sql="delete from Book where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Insert into Database Book*/
function addbook($user){
    $nam=$user['name'];
    $em=$user['email'];
    $nu=$user['pass'];
    $d=$user['dept'];
    $bo=$user['des'];
    $con=$GLOBALS['con'];
    $sql="insert into book(Bname,Aname,Uimage,Type,Des) values(?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sssss",$nam,$em,$nu,$d,$bo);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Fatch Image Form Database */
function getFiles(){
    $con=$GLOBALS['con'];
    $sql="select * from book";
    $result=$con->query($sql);
    $img=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $img[]=$row;
        }
    }
    return  $img;
}
/*Insert into Database Admin*/
function addadmin($user){
    $nam=$user['name'];
    $nu=$user['pass'];
    $e_p=md5($nu);
    $con=$GLOBALS['con'];
    $sql="insert into adminlog(Name,pass) values(?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("ss",$nam,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*show data base data For Admin*/
function getadmin(){
    $con=$GLOBALS['con'];
    $sql="select * from adminlog";
    $res=$con->query($sql);
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
/*Delete Addmin */
function deladmin($id){
    $con=$GLOBALS['con'];
    $sql="delete from adminlog where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*show data base data For Book Booked */
function getBooked(){
    $con=$GLOBALS['con'];
    $sql="select * from book";
    $res=$con->query($sql);
    $users=array();
    //die($res->num_rows);
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
// /*Delete Book Booked */
// function delbooked($id){
//     $con=$GLOBALS['con'];
//     $sql="delete from userbook where id=?";
//     $st=$con->prepare($sql);
//     $st->bind_param("i",$id);
//     if($st->execute()){
//         return true;
//     }
//     else{
//         return false;
//     }
// }
/*Insert into Database Book Booked_item*/
function addbookitem($book){
    $u=$book['u'];
    $b=$book['b'];
    $con=$GLOBALS['con'];
    $sql="insert into booked_item(user_id,book_id) values(?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("ii",$u,$b);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Show booked book item */
/*show data base data For Admin*/
function bookitem1($id){
    $con=$GLOBALS['con'];
    $sql="select * from booked_item as bi inner join book as b on bi.book_id=b.id where bi.user_id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    $st->execute();
    $res=$st->get_result();
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
?>