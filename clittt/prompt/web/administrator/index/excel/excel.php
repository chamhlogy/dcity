<?php  
require_once '../PHPExcel/PHPExcel.php';
require_once '../PHPExcel/PHPExcel/Reader/Excel2007.php';
require_once '../PHPExcel/PHPExcel/Reader/Excel5.php';
include_once '../PHPExcel/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();  //创建PHPExcel实例

/*--------------下面是对mysql数据库的连接----------*/
$link=mysql_connect('localhost','root','10086');	
   mysql_select_db('asdf');
   mysql_query('set names utf8');	
$sqli="select * from bussiness"; 
$rest=mysql_query($sqli,$link);
//$result = mysql_query($sql);

/*--------------设置表头信息------------------*/
$objPHPExcel->setActiveSheetIndex(0)
  ->setCellValue('A1', 'ID')                        
->setCellValue('B1', '名称')
->setCellValue('C1', '密码')
->setCellValue('D1', '类型简介')
->setCellValue('E1', '提交时间')
->setCellValue('F1', '电话')
->setCellValue('G1', '住址');             

/*--------------开始从数据库提取信息插入Excel表中------------------*/
$i=2;                //定义一个i变量，目的是在循环输出数据时控制行数
while($row=mysql_fetch_array($rest)) {
$objPHPExcel->setActiveSheetIndex(0)
  ->setCellValue("A".$i, $row['id'])
->setCellValue("B".$i, iconv('gb2312', 'utf-8',$row['name']))  
->setCellValue("C".$i, iconv('gb2312', 'utf-8',$row['password']))
->setCellValue("D".$i, iconv('gb2312', 'utf-8',$row['type-introduce']))
->setCellValue("E".$i, iconv('gb2312', 'utf-8',$row['submit-time']))
->setCellValue("F".$i, iconv('gb2312', 'utf-8',$row['phone']))
->setCellValue("G".$i, iconv('gb2312', 'utf-8',$row['address']));

$i++;
}

/*--------------下面是设置其他信息------------------*/
$objPHPExcel->getActiveSheet()->setTitle('商家信息');      //设置sheet的名称
$objPHPExcel->setActiveSheetIndex(0);   //设置sheet的起始位置
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(19);    //设置excel：月份的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);    //设置excel：申请人的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(23);    //设置excel：部门的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);    //设置excel：用车人的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(23);    //设置excel：用车部门的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);    //设置excel：电话的宽度
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);    //设置excel：司机的宽度

/*--------------下面是设置保存路径------------------*/
$objPHPExcel->setActiveSheetIndex(0);  
// Redirect output to a clients web browser (Excel5)通知下载  
$fn="商家信息.xls";  
header('Content-Type: application/vnd.ms-excel; charset=utf-8');  
header("Content-Disposition: attachment;filename=$fn");  
header('Cache-Control: max-age=0');  
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
// browser_export('Excel5', 'testexport.xlsx'); 
$objWriter->save('php://output');  
exit;  
?>