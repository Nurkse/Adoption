<!DOCTYPE html>

<html lang="zh-Hant-TW">
<head>
    <title>Learning</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>
<style>
  #Label {
  	margin: 5px;
  }

  .input-group {
  	width: 22%;
  	display: inline-flex;
  }

  #text {
  	margin-top: 50px;
  }

  .img {
  	position: relative;
    width: 100%;
  }

  li {
  	padding: 30px;
  }
</style>
</head>

<body>
	<div class="container">

		<form id="form">
		  <div class="input-group" id="input-city">
		   <label id="Label" for="city">地區:</label>
           <select class="custom-select" id="city" aria-label="Example select with button addon">
             <option selected>地區...</option>
	         <option value ="2">臺北市</option>
	         <option value ="3">新北市</option>
	         <option value ="4">基隆市</option>
	         <option value ="5">宜蘭縣</option>
	         <option value ="6">桃園縣</option>
	         <option value ="7">新竹縣</option>
	         <option value ="8">新竹市</option>
	         <option value ="9">苗栗縣</option>
	         <option value ="10">臺中市</option>
	         <option value ="11">彰化縣</option>
	         <option value ="12">南投縣</option>
	         <option value ="13">雲林縣</option>
	         <option value ="14">嘉義縣</option>
	         <option value ="15">嘉義市</option>
	         <option value ="16">臺南市</option>
	         <option value ="17">韓粉市</option>
	         <option value ="18">屏東縣</option>
	         <option value ="19">花蓮縣</option>
	         <option value ="20">臺東市</option>
	         <option value ="21">澎湖縣</option>
	         <option value ="22">金門縣</option>
	         <option value ="23">連江縣</option>
           </select>
         </div>
         <div class="input-group" id="input-type">
           <label id="Label" for="type">類型:</label>
           <select class="custom-select" id="type" aria-label="Example select with button addon">
             <option selected>類型...</option>
	         <option value ="貓">貓</option>
	         <option value ="狗">狗</option>
	         <option value ="">全部</option>
           </select> 
	     </div>
	     <div class="input-group" id="input-gender">
           <label id="Label" for="type">性別:</label>
           <select class="custom-select" id="gender" aria-label="Example select with button addon">
             <option selected>性別...</option>
	         <option value ="M">公</option>
	         <option value ="F">母</option>
           </select> 
	     </div>
	     <button id="button" type="button" type="submit" class="btn btn-primary">查詢</button>
		</form>
	</div>
	<section>
		<div class="container clearfix">
			<div >
				<div id="text">
					<ul class="row">
						
					</ul>

				</div>
			</div>
		</div>
	</section>

<script type="text/javascript">
 $('#button').click(function(e){
    e.preventDefault();
 	console.log($('#city').val());
 	console.log($('#type').val());
 	console.log($('#gender').val());
 	$.get("php.php?city="+$('#city').val()+"&gender="+$('#gender').val()+"&type="+$('#type').val(),function(data){
 		$('#text ul').html(data);//跟php連接用




 	});
    
 });

</script>

</body>
</html>
