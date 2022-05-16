<?php
include 'dao.php';
/*for registration*/
/*Add to database */
    if(isset($_POST['REGISTER'])){
        $nam=$_POST['fname'];
        $em=$_POST['femail'];
        $nu=$_POST['fpassword'];
        $user=array("name"=>$nam,"email"=>$em,"pass"=>$nu);
        $re=adduser($user);
        if($re){
          session_start();
          $_SESSION['n']=$nam;
          header("Location:logi.php");
        }
        else{
          session_start();
          $_SESSION['msg']="user credential is wrong!!!";
          header("Location:404.php");
        }
    }
    /*for Login*/
/*For check Password Database */
if(isset($_POST['login'])){
    $nam=$_POST['fname'];
    $em=$_POST['femail'];
    $nu=$_POST['fpassword'];
    $user=array("name"=>$nam,"email"=>$em,"pass"=>$nu);
    $p=login($user);
    if($p>0){
      session_start();
      $_SESSION['n']=$nam;
      $_SESSION['i']=$p;
      header("location:disp.php");
  }
  else{
     session_start();
     $_SESSION['msg']="user credential is wrong!!!";
    header("location:404.php");
  }
}
/*Admin Login */
if(isset($_POST['Submit'])){
    $nam=$_POST['fname'];
    $nu=$_POST['fpassword'];
    $user=array("name"=>$nam,"pass"=>$nu);
    if(adlogin($user)){
     session_start();
     $_SESSION['n']=$nam;
     header("location:adminpanel.php");
  }
  else{
     session_start();
     $_SESSION['msg']="Admin credential is wrong!!!";
     header("location:404.php");
  }
}
/*Show Database Data For Student*/
$u=getUser();
/*Show Database Data For Book */
$ua=getUserB();
 /*Delete Student*/
 if(isset($_POST['d'])){
  $id=$_POST['id'];
  delUser($id);
  header("Location:regtab.php");
}
/*Delete Book */
if(isset($_POST['dl'])){
  $id=$_POST['id'];
  delUserB($id);
  header("Location:bdetails.php");
}
/*Add Book to database */
if(isset($_POST['Upload']) && $_FILES['fpassword']){
  $nam=$_POST['fname'];
  $em=$_POST['femail'];
  $bo=$_POST['fbook'];
  $d=$_POST['fdept'];
  $file=$_FILES['fpassword'];
  $name=$file['name'];
  $type=$file['type'];
  $size=$file['size'];
  $error=$file['error'];
  $tmp_name=$file['tmp_name'];
  if($error == 0){
    if($size<1250000){
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      $ext_l=strtolower($ext);
      $n_name=uniqid("IMG-",true).".".$ext_l;
      $path='upload/'.$n_name;
    }
    else{
       echo "it exist maximum file size";
    }
  }
  else{
     echo "something went wrong!!";
  }
  $user=array("name"=>$nam,"email"=>$em,"pass"=>$n_name,"dept"=>$d,"des"=>$bo);
  $re=addbook($user);
  if($re){
    // session_start();
    // $_SESSION['n']=$nam;
    move_uploaded_file($tmp_name,$path);/*Save To folder */
    header("Location:bookupload.php");
  }
  else{
    echo "Failed!!!";
  }
}
/*Fatch Book Image Form data base*/
function getIMG(){
  $i=getFiles();
  return $i;
}
/*add Asdmin */
if(isset($_POST['add'])){
  $nam=$_POST['fname'];
  $nu=$_POST['fpassword'];
  $user=array("name"=>$nam,"pass"=>$nu);
  $re=addadmin($user);
  if($re){
    // session_start();
    // $_SESSION['n']=$nam;
    header("Location:addadmin.php");
  }
  else{
    // session_start();
    // $_SESSION['msg']="user credential is wrong!!!";
    header("Location:regi.php");
  }
}
/*Show Database Data For Admin */
$ad=getadmin();
/*Delete Admin*/
 if(isset($_POST['del'])){
  $id=$_POST['id'];
  deladmin($id);
  header("Location:addadmin.php");
}
$bok=getBooked();
/*Delete Book Booked*/
if(isset($_POST['delete'])){
  $id=$_POST['id'];
  delbooked($id);
  header("Location:adminpanel.php");
}
/*For book booked */
if(isset($_GET['book_id']) && isset($_GET['user_id'])){
  $b=$_GET['book_id'];
  $u=$_GET['user_id'];
  $book=array('b'=>$b,'u'=>$u);
  if(addbookitem($book)){
    header("Location:disp.php");
  }
  else{
    echo "not insert";
  }
}
/*Show Booked Book */
function getBookItem($id){
  $bi=bookitem1($id);
  return $bi;
}
/*Delete Book item */
if(isset($_POST['dlbi'])){
  $id=$_POST['id'];
  delbookitem($id);
  header("Location:booked.php");
}
//select * from booked_item as bi inner join book as b on bi.book_id=b.id where bi.user_id=?;
?>