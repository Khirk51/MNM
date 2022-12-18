<?php


class Trangchu extends Controller{
    function __construct(){
      $this->sanPhamModel = $this->model("SanPhamModel");
      $this->taiKhoan = $this->model("TaiKhoanModel");
    }
    // Must have SayHi()
    function product(){
          $gets = (explode("page=", filter_var(trim($_SERVER['REQUEST_URI'], "page="))));
          $page = 1;
          if (count($gets) > 1) {
              //var_dump($gets);
              $page = explode("&",$gets[1])[0];
          }

          $serach = null;
          $gets = (explode("search=", filter_var(trim($_SERVER['REQUEST_URI'], "search="))));
          if (count($gets) > 1) {
              //var_dump($gets);
              $serach = explode("&",$gets[1])[0];
          }
          $arrS = explode("|",$serach);
          $num_per_page = 4;
          $start = ($page - 1) * $num_per_page;
        if(count($arrS) > 2 ){
          if($arrS[2] != "" && $arrS[2] != "Gi%C3%A1%20thu%C3%AA%20ph%C3%B2ng"){
         
            if($arrS[2]=='0%C4%91%20-%202%20tri%E1%BB%87u%C4%91')
            {
              $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price < 2000000 LIMIT $start,$num_per_page";
              $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price < 2000000";
            }
            elseif($arrS[2]=='2,000,000%C4%91%20-%203%20tri%E1%BB%87u%C4%91')
            {
              $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price BETWEEN 2000000 AND 3000000 LIMIT $start,$num_per_page";
              $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price BETWEEN 2000000 AND 3000000";
            }
            elseif($arrS[2]=='3,000,000%C4%91%20-%204%20tri%E1%BB%87u%C4%91')
            {
              $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price BETWEEN 3000000 AND 4000000 LIMIT $start,$num_per_page";
              $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Pric  e BETWEEN 3000000 AND 4000000";
            }
            else
            {
              $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price > 4000000 LIMIT $start,$num_per_page";
              $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Price > 4000000";
            }
          } elseif($arrS[0] != ""){
          $search_add = urldecode($arrS[0]);  
          $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Address like '%$search_add%' LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Address like '%$search_add%'";
        }
      elseif($arrS[1] != ""){
        $search_uti = urldecode($arrS[1]); 
          $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Utilities,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Utilities like '%$search_uti%' LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Utilities,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Utilities like '%$search_uti%'";
        }
      else{
          $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1'";
      }
    }
    else{
      $sql = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' LIMIT $start,$num_per_page";
      $sql1 = "SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1'";
  }

        $PTMN = $this->sanPhamModel->getData("SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' ORDER BY motel.Motel_Id DESC LIMIT 1");
        $PTNLX = $this->sanPhamModel->getData("SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' ORDER BY motel.Count_view DESC LIMIT 1");
        if(isset($_SESSION["user"])){
          $this->view('trangchu',["data1"=>$this->sanPhamModel->getData($sql),"data2"=>$this->sanPhamModel->getData($sql1),"PTMN"=>$PTMN,"PTNLX"=>$PTNLX,"number_page"=>$num_per_page,"page"=>$page,"userActive" =>$this->taiKhoan->info($_SESSION["username"])]);
        }else{
          $this->view('trangchu',["data1"=>$this->sanPhamModel->getData($sql),"data2"=>$this->sanPhamModel->getData($sql1),"PTMN"=>$PTMN,"PTNLX"=>$PTNLX,"number_page"=>$num_per_page,"page"=>$page]);
        }
       
    }
    function detail_product(){
      $gets = (explode("?ID=", filter_var(trim($_SERVER['REQUEST_URI'], "?ID="))));
      if (count($gets) > 1) {
          //var_dump($gets);
          $sp = explode("&",$gets[1])[0];
          $this->view('thongtinsanpham',["sp"=>$this->sanPhamModel->getData("SELECT motel.Motel_Id,Title,Area,Images,Address,Price,Created_at,Description,Utilities,user.Phone,user.Name FROM  motel,user WHERE motel.User_id = user.User_id and motel.Status = '1' and motel.Motel_Id='$sp'")]);
          $this->sanPhamModel->getData("UPDATE motel SET Count_view = Count_view+1 WHERE  motel.Motel_Id='$sp'");
      }

      
      
    }

}
?>