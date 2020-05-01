<?php
echo '<input type="text" id="txthasil" value="0" style="margin-top:-15px;margin-bottom:10px;text-align:right;width:200px;"/><br>';
 
echo '<span>variabel 1 </span><br>';
echo '<input type="text" id="var_a">';
echo '<br><span>operator </span><br>';
echo '<input type="text" id="opr" value="+">';
echo '<br><span>variabel 2 </span><br>';
echo '<input type="text" id="var_b">';
 
echo '<br><button style="width:200px;height:30px;margin-top:10px;margin-bottom:5px;" onclick="mulai();">Mulai</button><br>';
 
echo '<button style="width:50px;" onclick="btn(9);">9</button>';
echo '<button style="width:50px;" onclick="btn(8);">8</button>';
echo '<button style="width:50px;" onclick="btn(7);">7</button>';
echo '<button style="width:50px;" onclick="opr(1);">+</button><br>';
echo '<button style="width:50px;" onclick="btn(6);">6</button>';
echo '<button style="width:50px;" onclick="btn(5);">5</button>';
echo '<button style="width:50px;" onclick="btn(4);">4</button>';
echo '<button style="width:50px;" onclick="opr(2);">-</button><br>';
echo '<button style="width:50px;" onclick="btn(3);">3</button>';
echo '<button style="width:50px;" onclick="btn(2);">2</button>';
echo '<button style="width:50px;" onclick="btn(1);">1</button>';
echo '<button style="width:50px;" onclick="opr(3);">*</button><br>';
echo '<button style="width:200px;height:30px;margin-top:5px;" onclick="hasil();">=</button>';
 
echo '<script>';
echo 'function btn(angka){';
echo 'if (document.getElementById("txthasil").value == "0") {';
echo 'document.getElementById("txthasil").value = angka;';
echo 'document.getElementById("var_a").value = angka';
echo '} else {';
echo 'document.getElementById("txthasil").value = angka;';
echo 'document.getElementById("var_b").value = angka';
echo '}';
echo '}';
 
echo 'function opr(opr){';
echo 'if (opr == 1) {';
echo 'document.getElementById("opr").value = "+";';
echo '} else if (opr == 2) {';
echo 'document.getElementById("opr").value = "-";';
echo '} else if (opr == 3) {';
echo 'document.getElementById("opr").value = "*";';
echo '}';
echo '}';
 
echo 'function mulai(){';
echo 'document.getElementById("txthasil").value = "0";';
echo 'document.getElementById("var_a").value = "";';
echo 'document.getElementById("var_b").value = "";';
echo 'document.getElementById("opr").value = "+";';
echo '}';
 
echo 'function hasil(){';
echo 'if (document.getElementById("opr").value == "+") {';
echo 'var a = document.getElementById("var_a").value;';
echo 'var b = document.getElementById("var_b").value;';
echo 'document.getElementById("txthasil").value = parseInt(a) + parseInt(b);';
echo '} else if (document.getElementById("opr").value == "-") {';
echo 'var a = document.getElementById("var_a").value;';
echo 'var b = document.getElementById("var_b").value;';
echo 'document.getElementById("txthasil").value = parseInt(a) - parseInt(b);';
echo '} else if (document.getElementById("opr").value == "*") {';
echo 'var a = document.getElementById("var_a").value;';
echo 'var b = document.getElementById("var_b").value;';
echo 'document.getElementById("txthasil").value = parseInt(a) * parseInt(b);';
echo '}';
echo '}';
echo '</script>';
?>
 