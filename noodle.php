<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#996666"
<body>

<form id="form1" name="form1" method="post" action="">

  <p><img src="10735852_556284847804908_586248593_n.jpg" width="750" height="150" alt="g" longdesc="http://localhost/noodle.php" /></p>
  <p>
    <label for="noodle">	เส้น :</label>
    <input type="text" name="noodle"  />
  </p>
  <p>
    <label for="num">จำนวน :</label>
    <input type="text" name="num" />
  </p>
  <p>
    <label for="soup">น้ำซุป :</label>
    <select name="soup" >
      <option value="ต้มยำ">ต้มยำ</option>
      <option value="น้ำใส">น้ำใส</option>
    </select>
    จำนวน :
    <label for="textfield"></label>
    <input type="text" name="num1"  />
    
    <label for="smell3">ความแซ่บ :</label>
    <select name="smell3" >
      <option value="เผ็ดมาก">เผ็ดมาก</option>
      <option value="เผ็ดปานกลาง">เผ็ดปานกลาง</option>
      <option value="เผ็ดน้อย">เผ็ดน้อย</option>
      <option value="ไม่เผ็ด">ไม่เผ็ด</option>
    </select>
  </p>
  <p>
    <label for="soup2">น้ำซุป :</label>
    <select name="soup2" >
      <option value="ต้มยำ">ต้มยำ</option>
      <option value="น้ำใส">น้ำใส</option>
    </select>
จำนวน :
<label for="textfield3"></label>
<input type="text" name="num5"  />

  <label for="smell4">ความแซ่บ :</label>
  <select name="smell4" >
 		<option value="เผ็ดมาก">เผ็ดมาก</option>
      <option value="เผ็ดปานกลาง">เผ็ดปานกลาง</option>
      <option value="เผ็ดน้อย">เผ็ดน้อย</option>
      <option value="ไม่เผ็ด">ไม่เผ็ด</option>
    </select>
  </p>
  <p>
    <label>ธรรมดา :<br />
      <input type="checkbox" name="original1" value="หมู"  />
      หมู</label>
    
    <label for="num2"> จำนวน :</label>
    <input type="text" name="num6" />
<br />
    <label>
      <input type="checkbox" name="original2" value="หมูสับ" />
      หมูสับ</label>
    
    <label for="num3">จำนวน :</label>
    <input type="text" name="num7" />
<br />
    <label>
      <input type="checkbox" name="original3" value="ลูกชิ้น"  />
      ลูกชิ้น</label>
    
    <label for="num4">จำนวน :</label>
    <input type="text" name="num11" />
<br />
    <label>
      <input type="checkbox" name="original4" value="ตับลวก" />
      ตับลวก</label>
  
    <label for="num5">จำนวน :</label>
    <input type="text" name="num12" />
  </p>
  <p>
    <label> พิเศษ : <br />
      <input type="checkbox" name="special1" value="ไข่มะตูม" />
      ไข่มะตูม</label>
&nbsp; จำนวน :
<label for="textfield"></label>
    <input type="text" name="num2"  />
    จำนวน :
    <label for="textfield6"></label>
    <input type="text" name="num8"  />
<br />
    <label>
      <input type="checkbox" name="special2" value="กุ้ง"  />
      กุ้ง</label>
    &nbsp;จำนวน :
    <label for="textfield2"></label>
    <input type="text" name="num3"  />
    จำนวน :
    <label for="textfield7"></label>
    <input type="text" name="num9"  />
<br />
    <label>
      <input type="checkbox" name="special3" value="ปลาหมึก" />
      ปลาหมึก</label>
  &nbsp;จำนวน :
  <label for="textfield"></label>
  <input type="text" name="num4"  />
  จำนวน :
  <label for="textfield8"></label>
  <input type="text" name="num10"  />
  </p>
  <p>
    <input type="submit" name="btnsubmit"  value="ส่งข้อมูล" />
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

<?
	
		$num = $_POST[num]*35;
		$_POST[special1]=$_POST[special4];
		$_POST[special2]=$_POST[special5];
		$_POST[special3]=$_POST[special6];
		$_POST[special4]=15;
		$_POST[special5]=55;
		$_POST[special6]=55;
		$sum1=$_POST[num2]*$_POST[special4];
		$sum2=$_POST[num3]*$_POST[special5];
		$sum3=$_POST[num4]*$_POST[special6];
		
		echo "เส้น :$_POST[noodle] &nbsp;&nbsp;&nbsp;";
		echo "จำนวน : $_POST[num] ถ้วย &nbsp;&nbsp;&nbsp;<br>";
		echo "น้ำซุป : $_POST[soup] จำนวน : $_POST[num1] ถ้วย ความแซ่บ :$_POST[smell3]&nbsp;&nbsp;&nbsp;<br>";
		echo "น้ำซุป : $_POST[soup2] จำนวน : $_POST[num5] ถ้วย ความแซ่บ :$_POST[smell4]&nbsp;&nbsp;&nbsp;<br>";
		
		echo "ธรรมดาใส่ :$_POST[original1] จำนวน :$_POST[num6] ถ้วย<br> $_POST[original2] จำนวน : $_POST[num7] ถ้วย<br> $_POST[original3] จำนวน : $_POST[num11] ถ้วย<br> $_POST[original4] จำนวน : $_POST[num12] ถ้วย<br>";
		echo "พิเศษใส่ : ไข่ยางมะตูม :$_POST[special1] จำนวน : $_POST[num2] ใบ <br>  กุ้ง :$_POST[special2] จำนวน : $_POST[num3] ตัว <br> ปลาหมึก : $_POST[special3] จำนวน : $_POST[num4] ตัว<br>";
		
		$sum = $num + $sum1 + $sum2 + $sum3 ;
		echo "รวม $sum บาท ";
?>


