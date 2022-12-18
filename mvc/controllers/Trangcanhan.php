<?php


class Trangcanhan extends Controller{
    public $infoUser;
    public $taikhoanModel;
    function __construct(){
        $this->taikhoanModel = $this->model("TaiKhoanModel");
    }
    // Must have SayHi()
    function product(){
      
      $this->view('admin/profile');
    }
    function baidang(){
      
      $this->view('admin/view-baidang');
    }
    function loai(){
      
      $this->view('admin/view-category');
    }
    function districts(){
      
      $this->view('admin/view-districts');
    }

    function motel($a="",$b=""){
      if($a == "DEL"){
      
        $this->view('admin/view-motel',["iddel" => $b]);
      }else{

        $this->view('admin/view-motel');
      }
    }
    function user($a="",$b=""){
      if($a == "DEL"){
      
        $this->view('admin/view-user',["iddel" => $b]);
      }else{

        $this->view('admin/view-user');
      }
    }
   

}
?>