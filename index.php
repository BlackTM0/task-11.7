<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>

<div class ="table"> 
    <div class = "tr_head"> 
        <div class = "td"> A</div> 
        <div class = "td"> B</div> 
        <div class = "td"> !A</div> 
        <div class = "td"> A||B</div> 
        <div class = "td"> A && B</div> 
        <div class = "td"> A xor B</div> 
</div> 
<div class = "tr"> 
<?php $a=0; $b=0; ?>
        <div class = "td"> 0</div> 
        <div class = "td"> 0</div> 
        <div class = "td" id ="tr1_td3"><?php echo !$a; ?></div> 
        <div class = "td" id ="tr1_td4"><?php echo var_export($a||$b, true); ?> </div> 
        <div class = "td" id ="tr1_td5"> <?php echo ($a && $b)?'true':'false'; ?></div> 
        <div class = "td" id ="tr1_td6"><?php echo var_export ($a xor $b, true)?> </div> 
</div> 

<div class = "tr"> 
<?php $a=0; $b=1; ?>
        <div class = "td"> 0</div> 
        <div class = "td"> 1</div> 
        <div class = "td" id ="tr2_td3"><?php echo !$a; ?> </div> 
        <div class = "td" id ="tr2_td4"><?php echo $a||$b; ?> </div> 
        <div class = "td" id ="tr2_td5"><?php echo var_export($a && $b, true); ?> </div> 
        <div class = "td" id ="tr2_td6"><?php echo $a xor $b;?> </div> 
</div> 
<div class = "tr"> 
<?php $a=1; $b=0; ?>
        <div class = "td"> 1</div> 
        <div class = "td"> 0</div> 
        <div class = "td" id ="tr3_td3"><?php echo var_export(!$a,true);  ?> </div> 
        <div class = "td" id ="tr3_td4"><?php echo $a||$b; ?> </div> 
        <div class = "td" id ="tr3_td5"><?php echo var_export($a && $b, true); ?> </div> 
        <div class = "td" id ="tr3_td6"><?php echo $a xor $b; ?> </div> 
</div> 

<div class = "tr"> 
<?php $a=1; $b=1; ?>
        <div class = "td"> 1</div> 
        <div class = "td"> 1</div> 
        <div class = "td" id ="tr4_td3"><?php echo var_export(!$a, true); ?> </div> 
        <div class = "td" id ="tr4_td4"><?php echo $a||$b; ?> </div> 
        <div class = "td" id ="tr4_td5"><?php echo $a && $b; ?> </div> 
        <div class = "td" id ="tr4_td6"><?php echo var_export($a xor $b,true); ?> </div> 
</div> 

<?php 
$tr = true;
$fa = false; 
$one =1; 
$zero =0; 
$minus =-1; 
$str ="1";
$nothing = null; 
$str2 ="php"; ?>

<div class ="container">
<div class ="table"> 

        <p><h4>Гибкое сравнение в PHP</h4></p>
    <div class = "tr_head"> 
        <div class = "td"></div> 
        <div class = "td"> true</div> 
        <div class = "td"> false</div> 
        <div class = "td"> 1</div> 
        <div class = "td"> 0</div> 
        <div class = "td"> -1</div> 
        
        <div class = "td"> "1"</div> 
        <div class = "td"> null</div> 
        <div class = "td"> "php"</div> 
</div> 
<div class = "tr"> 

        <div class = "td">true </div> 
        <div class = "td"> <?php echo $tr==$tr; ?> </div> 
        <div class = "td" ><?php echo var_export($tr==$fa,true); ?> </div> 
        <div class = "td" ><?php echo $tr==$one; ?> </div> 
        <div class = "td" ><?php echo var_export($tr==$zero,true); ?> </div> 
        <div class = "td" ><?php echo $tr==$minus; ?> </div> 
        <div class = "td" > <?php echo $tr==$str; ?></div> 
        <div class = "td" > <?php echo var_export($tr==$nothing,true); ?></div>
        <div class = "td" > <?php echo $tr==$str2; ?></div> 
        
        
</div> 
<div class = "tr"> 
        <div class = "td">false</div> 
        <div class = "td"><?php echo var_export($fa ==$tr,true);?> </div> 
        <div class = "td"><?php echo $fa ==$fa;?> </div> 
        <div class = "td" ><?php echo var_export ($fa ==$one,true);?> </div> 
        <div class = "td" ><?php echo $fa == $zero; ?> </div> 
        <div class = "td" ><?php echo var_export ($fa == $minus,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($fa == $str,true); ?> </div> 
        <div class = "td" > <?php echo var_export ($fa == $nothing,true); ?></div> 
        <div class = "td" > <?php echo var_export ($fa == $str2,true); ?></div> 
        
</div> 

<div class = "tr"> 
        <div class = "td">1 </div> 
        <div class = "td"><?php echo $one ==$tr; ?> </div> 
        <div class = "td"> <?php echo  var_export ($one ==$fa,true); ?></div> 
        <div class = "td" > <?php echo $one ==$one; ?></div> 
        <div class = "td" > <?php echo var_export($one ==$zero,true); ?></div> 
        <div class = "td" ><?php echo var_export($one ==$minus,true); ?> </div> 
        <div class = "td" ><?php echo $one ==$str; ?> </div> 
        <div class = "td" ><?php echo var_export($one ==$nothing,true); ?> </div> 
        <div class = "td" ><?php echo var_export($one ==$str2,true)     ; ?> </div> 
       
</div> 

<div class = "tr"> 
        <div class = "td">0 </div> 
        <div class = "td"><?php echo var_export ($zero == $tr,true);?> </div> 
        <div class = "td"> <?php echo $zero == $fa;?></div> 
        <div class = "td" > <?php echo var_export ($zero == $one,true);?></div> 
        <div class = "td" ><?php echo $zero == $zero;?> </div> 
        <div class = "td" ><?php echo var_export ($zero == $minus,true);?></div>  
        <div class = "td" > <?php echo var_export ($zero == $str,true);?></div> 
        <div class = "td" ><?php echo $zero == $nothing;?>  </div> 
        <div class = "td" ><?php echo  $zero == $str2;?> </div> 
         
</div> 

<div class = "tr"> 
        <div class = "td"> -1</div> 
        <div class = "td"><?php echo $minus == $tr;?> </div> 
        <div class = "td"><?php echo var_export ($minus == $fa,true);?> </div> 
        <div class = "td" ><?php echo var_export ($minus == $one,true);?> </div> 
        <div class = "td" ><?php echo var_export ($minus == $zero,true);?> </div> 
        <div class = "td" ><?php echo $minus == $minus;?> </div> 
        <div class = "td" ><?php echo var_export ($minus == $str,true);?>  </div> 
        <div class = "td" > <?php echo var_export ($minus == $nothing,true);?></div> 
        <div class = "td" ><?php echo var_export ($minus == $str2,true);?> </div> 
      
</div> 

<div class = "tr"> 
        <div class = "td">"1" </div> 
        <div class = "td"><?php echo $str == $tr; ?> </div> 
        <div class = "td"><?php echo var_export ($str == $fa,true);?> </div> 
        <div class = "td" ><?php echo $str == $one; ?> </div> 
        <div class = "td" ><?php echo var_export ($str == $zero,true);?>  </div> 
        <div class = "td" ><?php echo var_export ($str == $minus,true) ; ?> </div> 
        <div class = "td" ><?php echo $str == $str; ?> </div> 
        <div class = "td" ><?php echo var_export ($str == $nothing,true);?>  </div> 
        <div class = "td" > <?php echo var_export ($str == $str2,true); ?> </div> 
        
</div> 

<div class = "tr"> 
        <div class = "td"> null</div> 
        <div class = "td"><?php echo var_export ($nothing == $tr,true);?> </div> 
        <div class = "td"><?php echo $nothing == $fa;?> </div> 
        <div class = "td" ><?php echo var_export ($nothing == $one,true);?>  </div> 
        <div class = "td" ><?php echo $nothing == $zero;?> </div> 
        <div class = "td" ><?php echo var_export ($nothing == $minus,true);?> </div> 
        <div class = "td" ><?php echo var_export ($nothing == $str,true);?> </div> 
        <div class = "td" > <?php echo $nothing == $nothing;?></div> 
        <div class = "td" > <?php echo var_export ($nothing == $str2,true);?></div> 
        
</div> 

<div class = "tr"> 
        <div class = "td">"php" </div> 
        <div class = "td"><?php echo $str2 == $tr;?>  </div> 
        <div class = "td"> <?php echo var_export ($str2 == $fa,true);?></div> 
        <div class = "td" > <?php echo var_export ($str2 == $one,true);?> </div> 
        <div class = "td" ><?php echo  $str2 == $zero;?>         </div> 
        <div class = "td" ><?php echo var_export ($str2 == $minus,true);?> </div> 
        <div class = "td" ><?php echo var_export ($str2 == $str,true);?> </div> 
        <div class = "td" ><?php echo var_export ($str2 == $nothing,true);?> </div> 
        <div class = "td" ><?php echo $str2 == $str2;?> </div> 
        
</div> 

</div>

<button onclick="alert('Гибкое логическое сравнение в PHP позволяет использовать нестрогое сравнение значений разных типов, при котором значения могут быть автоматически приведены к нужному типу.Гибкое логическое сравнение может быть удобным инструментом при работе с данными разных типов, но может привести к неожиданным результатам, если не учитывать особенности преобразования типов. Поэтому, при использовании гибкого логического сравнения важно следить за типами данных и учитывать их особенности.')">Выводы по гибкому сравнению</button>

</div> 



<div class ="table"> 
        <p><h4>Жесткое сравнение в PHP</h4></p>
    <div class = "tr_head"> 
        <div class = "td"> </div> 
        <div class = "td"> true</div> 
        <div class = "td"> false</div> 
        <div class = "td"> 1</div> 
        <div class = "td"> 0</div> 
       
        <div class = "td"> -1</div> 
        <div class = "td"> "1"</div> 
        <div class = "td"> null</div> 
        <div class = "td"> "php"</div> 
</div> 
<div class = "tr"> 
        <div class = "td">true </div> 
        <div class = "td"><?php echo $tr===$tr; ?> </div> 
        <div class = "td" ><?php echo var_export ($tr === $fa,true);?> </div> 
        <div class = "td" > <?php echo var_export ($tr===$one,true); ?></div> 
        <div class = "td" > <?php echo var_export ($tr===$zero,true); ?></div> 
        <div class = "td" > <?php echo var_export ($tr===$minus,true); ?></div> 
        <div class = "td" > <?php echo var_export ($tr===$str,true); ?></div> 
        <div class = "td" > <?php echo var_export ($tr===$nothing,true); ?></div> 
        <div class = "td" ><?php echo var_export ($tr===$str2,true); ?> </div> 
    
</div> 
<div class = "tr"> 
        <div class = "td">false</div> 
        <div class = "td"> <?php echo var_export ($fa === $tr,true);?></div> 
        <div class = "td"> <?php echo $fa===$fa; ?></div> 
        <div class = "td" > <?php echo var_export ($fa === $one,true);?></div> 
        <div class = "td" > <?php echo var_export ($fa === $zero,true);?></div> 
        <div class = "td" > <?php echo var_export ($fa === $minus,true);?></div> 
        <div class = "td" ><?php echo var_export ($fa === $str,true);?> </div> 
        <div class = "td" > <?php echo var_export ($fa === $nothing,true);?></div> 
        <div class = "td" > <?php echo var_export ($fa === $str2,true);?></div> 
       
</div> 

<div class = "tr"> 
        <div class = "td">1 </div> 
        <div class = "td"><?php echo var_export ($one===$tr,true); ?> </div> 
        <div class = "td"><?php echo var_export ($one===$fa,true); ?> </div> 
        <div class = "td" ><?php echo $one===$one; ?> </div> 
        <div class = "td" ><?php echo var_export ($one===$zero,true); ?> </div> 
        <div class = "td" > <?php echo var_export ($one===$minus,true); ?></div> 
        <div class = "td" ><?php echo var_export ($one===$str,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($one===$nothing,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($one===$str2,true); ?> </div> 
     
</div> 

<div class = "tr"> 
        <div class = "td">0 </div> 
        <div class = "td"><?php echo var_export ($zero===$tr,true); ?> </div> 
        <div class = "td"><?php echo var_export ($zero===$fa,true); ?> </div> 
        <div class = "td" > <?php echo var_export ($zero===$one,true); ?></div> 
        <div class = "td" ><?php echo $zero===$zero; ?> </div> 
        <div class = "td" ><?php echo var_export ($zero===$minus,true); ?> </div> 
        <div class = "td" > <?php echo var_export ($zero===$str,true); ?></div> 
        <div class = "td" > <?php echo var_export ($zero===$nothing,true); ?></div> 
        <div class = "td" ><?php echo var_export ($zero===$str2,true); ?> </div> 
       
</div> 

<div class = "tr"> 
        <div class = "td"> -1</div> 
        <div class = "td"><?php echo var_export ($minus===$tr,true); ?> </div> 
        <div class = "td"><?php echo var_export ($minus===$fa,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($minus===$one,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($minus===$zero,true); ?> </div> 
        <div class = "td" ><?php echo $minus===$minus; ?> </div> 
        <div class = "td" > <?php echo var_export ($minus===$str,true); ?></div> 
        <div class = "td" ><?php echo var_export ($minus===$nothing,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($minus===$str2,true); ?> </div> 
         
</div> 

<div class = "tr"> 
        <div class = "td">"1" </div> 
        <div class = "td"><?php echo var_export ($str===$tr,true); ?> </div> 
        <div class = "td"><?php echo var_export ($str===$fa,true); ?> </div> 
        <div class = "td" > <?php echo var_export ($str===$one,true); ?></div> 
        <div class = "td" > <?php echo var_export ($str===$zero,true); ?></div> 
        <div class = "td" ><?php echo var_export ($str===$minus,true); ?> </div> 
        <div class = "td" ><?php echo $str===$str; ?> </div> 
        <div class = "td" ><?php echo var_export ($str===$nothing,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str===$str2,true); ?> </div> 
         
</div> 

<div class = "tr"> 
        <div class = "td"> null</div> 
        <div class = "td"> <?php echo var_export ($nothing===$tr,true); ?></div> 
        <div class = "td"> <?php echo var_export ($nothing===$fa,true); ?></div> 
        <div class = "td" > <?php echo var_export ($nothing===$one,true); ?></div> 
        <div class = "td" ><?php echo var_export ($nothing===$zero,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($nothing===$minus,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($nothing===$str,true); ?> </div> 
        <div class = "td" ><?php echo $nothing===$nothing; ?> </div> 
        <div class = "td" > <?php echo var_export ($nothing===$str2,true); ?></div> 
        
</div> 

<div class = "tr"> 
        <div class = "td">"php" </div> 
        <div class = "td"><?php echo var_export ($str2===$tr,true); ?> </div> 
        <div class = "td"><?php echo var_export ($str2===$fa,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str2===$one,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str2===$zero,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str2===$minus,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str2===$str,true); ?> </div> 
        <div class = "td" ><?php echo var_export ($str2===$nothing,true); ?> </div> 
        <div class = "td" ><?php echo $str2===$str2; ?> </div> 
         
        </div>
</div>
<button onclick="alert('Жесткое логическое сравнение позволяет точно контролировать типы данных и избежать неожиданных результатов при преобразовании типов. Однако, при использовании жесткого сравнения нужно учитывать, что значения разных типов всегда будут несовпадать, даже если они эквивалентны друг другу. В целом, жесткое логическое сравнение в PHP является более предсказуемым и безопасным способом сравнения значений, чем гибкое логическое сравнение.')">Выводы по жесткому сравнению</button>
</div> 
</body>
</html>


