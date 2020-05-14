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
   <th>Tên Khách hàng</th>
   <th></th>
  
    

</tr>


  <?php

  foreach($xem_tour as $key=>$value){
    echo '<td>'.$value->tentour.'</td>';
      echo '<td>'.$value->ngay_di.'</td>';
      echo '<td>'.$value->gio_di.'</td>';
      echo '<td>'.$value->tenkh.'</td>';
      echo '<td><a href="#">Hủy Tour<a></td>';
   
    }
  ?>
</table>