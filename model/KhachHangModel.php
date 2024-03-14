<?php

$a = "./config/connect.php";
$b = "../config/connect.php";
$c = "../../config/connect.php";
$d = "../../../config/connect.php";
$e = "../../../../config/connect.php";
$f = "../../../../../config/connect.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
}
if (file_exists($d)) {
    $des = $d;
}

if (file_exists($e)) {
    $des = $e;
}

if (file_exists($f)) {
    $des = $f;
}
include_once($des);

class KhachHangModel extends Database
{

    public function KhachHang__Get_All($trangthai = null)
    {
        if($trangthai != -1){
            $obj = $this->connect->prepare("SELECT * FROM khachhang");
        }else{
            $obj = $this->connect->prepare("SELECT * FROM khachhang WHERE trangthai =1");
        }
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    public function KhachHang__Add($tenkh, $gioitinh, $ngaysinh, $sodienthoai, $diachi, $email, $password, $trangthai)
    {
        $obj = $this->connect->prepare("INSERT INTO khachhang(tenkh, gioitinh, ngaysinh, sodienthoai, diachi, email, password, trangthai) VALUES (?,?,?,?,?,?,?,?)");
        $obj->execute(array($tenkh, $gioitinh, $ngaysinh, $sodienthoai, $diachi, $email, $password, $trangthai));
        return $obj->rowCount();
    }

    public function KhachHang__Update($makh, $tenkh, $gioitinh, $ngaysinh, $sodienthoai, $diachi, $email, $password, $trangthai)
    {
        $obj = $this->connect->prepare("UPDATE khachhang SET tenkh=?, gioitinh=?, ngaysinh=?, sodienthoai=?, diachi=?, email=?, password=?, trangthai=? WHERE makh=?");
        $obj->execute(array($tenkh, $gioitinh, $ngaysinh, $sodienthoai, $diachi, $email, $password, $trangthai, $makh));
        return $obj->rowCount();
    }
    
    public function KhachHang__Update_Info($makh, $tenkh, $sodienthoai, $diachi, $email)
    {
        $obj = $this->connect->prepare("UPDATE khachhang SET tenkh=?, sodienthoai=?, diachi=?, email=? WHERE makh=?");
        $obj->execute(array($tenkh, $sodienthoai, $diachi, $email, $makh));
        return $obj->rowCount();
    }
    

    public function KhachHang__Delete($makh)
    {
        $obj = $this->connect->prepare("DELETE FROM khachhang WHERE makh = ?");
        $obj->execute(array($makh));
        return $obj->rowCount();
    }

    public function KhachHang__Get_By_Id($makh)
    {
        $obj = $this->connect->prepare("SELECT * FROM khachhang WHERE makh = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($makh));
        return $obj->fetch();
    }

    
    public function KhachHang__Check_Email($email)
    {
        $obj = $this->connect->prepare("SELECT * FROM khachhang WHERE email = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($email));
        if ($obj->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function KhachHang__Get_By_Phan_Quyen($sodienthoai, $diachi, $email, $password)
    {
        $obj = $this->connect->prepare("SELECT * FROM khachhang WHERE sodienthoai = ? AND diachi, $email, $password = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($sodienthoai, $diachi, $email, $password));
        return $obj->fetch();
    }

    public function KhachHang__Dang_Nhap($email, $password)
    {
        $obj = $this->connect->prepare("SELECT * FROM khachhang WHERE email =? AND `password` = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($email, $password));
        if ($obj->rowCount() > 0) {
            return $obj->fetch();
        } else {
            return false;
        }
    }
}
