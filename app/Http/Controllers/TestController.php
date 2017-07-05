<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller{

  public function info($id=null){
      $dataResult[] = ['1000','1001','1002','1003','1004','1005','1006','1007','1008','1009','1010'];
      $dataResult[] = ['2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010'];
      $dataResult[] = ['3000','3001','3002','3003','3004','3005','3006','3007','3008','3009','3010'];
      $dataResult[] = ['4000','4001','4002','4003','4004','4005','4006','4007','4008','4009','4010'];
      $dataResult[] = ['5000','5001','5002','5003','5004','5005','5006','5007','5008','5009','5010'];
      $dataResult[] = ['6000','6001','6002','6003','6004','6005','6006','6007','6008','6009','6010'];
      $dataResult[] = ['7000','7001','7002','7003','7004','7005','7006','7007','7008','7009','7010'];
      $headTitle = "XX保险公司 优惠券赠送记录";
      $title = "优惠券记录";
      $headtitle= "<tr style='height:50px;border-style:none;'><th border='0' style='height:60px;width:270px;font-size:22px;' colspan='11' >{$headTitle}</th></tr>";
      $titlename = "<tr> 
               <th style='width:70px;' >合作商户</th> 
               <th style='width:70px;' >会员卡号</th> 
               <th style='width:70px;'>车主姓名</th> 
               <th style='width:150px;'>手机号</th> 
               <th style='width:70px;'>车牌号</th> 
               <th style='width:100px;'>优惠券类型</th> 
               <th style='width:70px;'>优惠券名称</th> 
               <th style='width:70px;'>优惠券面值</th> 
               <th style='width:70px;'>优惠券数量</th> 
               <th style='width:70px;'>赠送时间</th> 
               <th style='width:90px;'>截至有效期</th> 
           </tr>";
      $filename = $title.".xls";
      $this->excelData($dataResult,$titlename,$headtitle,$filename);
  }


    /*
  *处理Excel导出
  *@param $datas array 设置表格数据
  *@param $titlename string 设置head
  *@param $title string 设置表头
  */
    public function excelData($datas,$titlename,$title,$filename){
        $str = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'> <head> <meta http-equiv=Content-Type content='text/html; charset=utf-8'> </head> <body>";
        $str .="<table border=1><head>".$title."</head>";
        $str .= $titlename;
        foreach ($datas  as $key=> $rt )
        {
            $str .= "<tr>";
            foreach ( $rt as $k => $v )
            {
                $str .= "<td>{$v}</td>";
            }
            $str .= "</tr>";
        }
        $str .= "</table></body></html>";
        header( "Content-Type: application/vnd.ms-excel; name='excel'" );
        header( "Content-type: application/octet-stream" );
        header( "Content-Disposition: attachment; filename=".$filename );
        header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
        header( "Pragma: no-cache" );
        header( "Expires: 0" );
        exit( $str );
    }
}
