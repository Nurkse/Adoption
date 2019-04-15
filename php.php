<?php
  $city = $_GET["city"];//取前面的值
  $type = $_GET["type"];//取前面的值
  $gender = $_GET["gender"];//取前面的值
  $error = "查詢失敗，以下無資料";//錯誤訊息


  $contets = file_get_contents('http://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL&animal_area_pkid='.$city."&animal_kind=".$type."&animal_sex=".$gender);//載入資料
  $contets = json_decode($contets,true);//JSON轉Array
  $a = rand(0,5);//隨機值

  $contets = array_slice($contets,$a,count($contets));//隨機取陣列的數目，可以每次按查詢後跳出隨機資料

  for($i=0;$i<10;$i++){
  	
  	$sexarray = array("M","F");//更改性別英文轉中文用
  	$sexarray2 = array("公","母");//更改性別英文轉中文用
  	$Shelter = $contets[$i]["animal_place"];//取得收容所的值
	$kind    = $contets[$i]["animal_kind"];//取得種類的值
	$color   = $contets[$i]["animal_colour"];//取得顏色的值
	$sex     = $contets[$i]["animal_sex"];//取得性別的值
	$address = $contets[$i]["shelter_address"];//取得收容所地址的值
	$tel     = $contets[$i]["shelter_tel"];//取得收容所電話的值
	$img     = $contets[$i]["album_file"] ;//取得圖片的網址
	$remark  = $contets[$i]["animal_remark"] ; //取得資料介紹的值
	$Shelter = "<span>收容所:".$Shelter."</span><br>";//整理資料
	//$kind = "<span>種類:".$kind."</span><br>";//整理資料
	$color = "<span>顏色:".$color."</span><br>";//整理資料
	$sex = str_replace($sexarray,$sexarray2,$sex);//將性別英文替換成中文
	//$sex = "<span>性別:".$sex."</span><br>";//整理資料
	$address = "<span>收容所地址:".$address."</span><br>";//整理資料
    //$img = "<img class=img src=".$img."><br>";//整理資料
    $tel = "<span>收容所電話:".$tel."</span><br>";//整理資料
   
    if(empty($remark)){//整理資料，如查詢資料處是空值則輸出無資料字串
    	$remark = "<span>資料介紹:無資料</span><br>";
    }else{
    	$remark = "<span>資料介紹:".$remark."</span><br>";
    }
  
    $in = "<li class=col-sm-6>".$Shelter."<span>種類:".$kind."</span><br>".$color."<span>性別:".$sex."</span><br>".$remark."<img class=img src=".$img."><br>".$address.$tel."</li>";//將資料整理，上面沒整理得值是下面還要判斷用
    if($img!=""){//如果圖片沒提供網址則不顯示這筆全部資料>>圖片網址就輸出到前端
    	echo $in;
    }
  };
  if($city==""OR$sex==""OR$kind==""){//如果都沒資料或者查詢有沒填寫到的就輸出錯誤
  	echo $error;
  }
  
	
  //print_r($contets);
  


 
?>