<style>
table, th, td {
  border: 1px solid black;
}
table {
  width: 70%;
}
table {
  border-collapse: collapse;
}
th {
  height: 20px;
}
th, td {
  padding: 5px;
  text-align: left;
 
}
</style>
<table >
<tr >
    <th >Tên Tour</th>
    
    <th >Ngày Đi</th>
    
    <th>Giờ đi</th>
   <th>Chấp nhận</th>
   <th>Từ chối</th>
    

</tr>
<?php 
  $id = Session::get('idhdv');
  $key = Session::get('Key');
  foreach($show_tourhdv as $key=>$value){
    if($id == $value->idhdv){
      echo '<tr><td>'.$value->tentour.'</td>';
      echo '<td>'.$value->ngay_di.'</td>';
      echo '<td>'.$value->gio_di.'</td>';
      if(!$key){
        echo '<td><a href="server/agree">Nhận</a></td>';
        echo'<td><a href="server/disagree">Từ Chối</a></td></tr>';
      }else{
        echo '<td>Tour đã có người nhận</td>';
      
      }
     
    }else{
    
    }
  }
 
  
  

 ?>
 </table>   