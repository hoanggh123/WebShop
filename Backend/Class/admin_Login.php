<?php
  include '../Backend/section.php';
  Session::checkLogin();
  include '../Backend/database.php';
  include '../Backend/fm.php';
?>

<?php 
  class admin_Login 
  {
    private  $db;
  private $fm;


    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function Login($admin_User,$admin_Pass){
    $admin_User = $this->fm->validation($admin_User);
    $admin_Pass = $this->fm->validation($admin_Pass);
    $admin_User = mysqli_real_escape_string($this->db->link, $admin_User);
    $admin_Pass = mysqli_real_escape_string($this->db->link, $admin_Pass);
    if(empty($admin_User)|| empty($admin_Pass)){
      $alert = "Vui lòng nhập đầy đủ thông tin";
      return $alert;
    }else{
      $query = "SELECT  * FROM tbl_admin WHERE admin_User = '$admin_User' AND admin_Pass = '$admin_Pass' LIMIT 1";
      $result = $this->db->select($query);
      if($result != false){
        $value = $result->fetch_assoc()();
        Session::set('admin_Login', true);
      }
    }
    }
    
  }
  
  ?>