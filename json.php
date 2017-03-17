<?php
$json_data=file_get_contents("widhi.json");
$obj = json_decode($json_data);
echo "nama: "; echo $obj->nama;
echo "<br>";
echo "nim: "; echo $obj->nim;
echo "<br>";
echo "email: "; echo $obj->email;
echo "<br>";
echo "no_hp: "; echo $obj->no_hp;
echo "<br>";
echo "Nama mata kuliah: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Nama mata kuliah: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Nama mata kuliah: ";echo $obj->mata_kuliah[2];
?>