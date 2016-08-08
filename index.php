<!-- 入力された商品コードに合致する商品画像を表示させるデモ 2015.10 -->
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>デモ|コードから商品画像を表示</title>
		<style>
			body{
				margin: 20px 0 0 30px;
				font-family: sans-serif;
				font-weight: 100;
			}
			th{
				width: 80px;
				color: #434343;
			}
			input{
				background: #f8f8f8;
				width: 200px;
			}
			input:focus{
				background: #fff6b5;
			}
			img{
				width: 100px;
			}
		</style>
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	</head>
	<body>
		<!-- Ajaxでの他phpファイルとのデータ送受信 -->
		<!-- 入力コードをリアルタイムに取得 DBからコードの画像パスを取得、置換する -->
		<script>
			function checkA(value){
				$.ajax({type:"POST",
					url:"check.php",	//データ送信先ファイル指定
					data:{code:$('.inputA').val()},	//入力されたコードを外部へ送信するための格納
					success:function(receivedData,dataType){	//データ送信成功時送信先からのデータ受信、格納
						if(receivedData !=""){
							$('#imgA').attr('src',receivedData);	//画像パスを受信したデータへ置換
							$('.inputB').focus();	//フォーカスを次のinputへ移す
						}else{
							$.('#imgA').attr('src','inf.png');	//ImageNotFoundの画像へ置換
						}
					},
					error:function(){
						alert("ajaxエラー");
					}
				});
				return false;
			}
			function checkB(value){
				$.ajax({type:"POST",
					url:"check.php",
					data:{code:$('.inputB').val()},
					success:function(receivedData,dataType){
						if(receivedData !=""){
							$('#imgB').attr('src',receivedData);
							$('.inputC').focus();
						}else{
							$.('#imgB').attr('src','inf.png');
						}
					},
					error:function(){
						alert("ajaxエラー");
					}
				});
				return false;
			}
			function checkC(value){
				$.ajax({type:"POST",
					url:"check.php",
					data:{code:$('.inputC').val()},
					success:function(receivedData,dataType){
						if(receivedData !=""){
							$('#imgC').attr('src',receivedData);
							$('.inputD').focus();
						}else{
							$.('#imgC').attr('src','inf.png');
						}
					},
					error:function(){
						alert("ajaxエラー");
					}
				});
				return false;
			}
			function checkD(value){
				$.ajax({type:"POST",
					url:"check.php",
					data:{code:$('.inputD').val()},
					success:function(receivedData,dataType){
						if(receivedData !=""){
							$('#imgD').attr('src',receivedData);
							$('.inputE').focus();
						}else{
							$.('#imgD').attr('src','inf.png');
						}
					},
					error:function(){
						alert("ajaxエラー");
					}
				});
				return false;
			}
			function checkE(value){
				$.ajax({type:"POST",
					url:"check.php",
					data:{code:$('.inputE').val()},
					success:function(receivedData,dataType){
						if(receivedData !=""){
							$('#imgE').attr('src',receivedData);
						}else{
							$.('#imgE').attr('src','inf.png');
						}
					},
					error:function(){
						alert("ajaxエラー");
					}
				});
				return false;
			}
		</script>
		<table>
			<form action="index.php" method="post" accept-charset="utf-8">
				<!-- CodeA -->
				<tr>
					<th><p>CodeA</p></th>
					<td>
						<!-- キーボードのいずれかのキーを離した時JSイベント実行 -->
						<input type="text" name="CodeA" onkeyup="checkA(this.value)"
						autofocus="" placeholder="コードを入力してください" class="inputA">
					</td>
					<td>
						<img alt="画像表示欄" id="imgA" src="inf.png"
						onmousedown="return false" oncontextmenu="return false">
					</td>
				</tr>
				<!-- CodeB -->
				<tr>
					<th><p>CodeB</p></th>
					<td>
						<input type="text" name="CodeB" onkeyup="checkB(this.value)"
						autofocus="" placeholder="コードを入力してください" class="inputB">
					</td>
					<td>
						<img alt="画像表示欄" id="imgB" src="inf.png"
						onmousedown="return false" oncontextmenu="return false">
					</td>
				</tr>
				<!-- CodeC -->
				<tr>
					<th><p>CodeC</p></th>
					<td>
						<input type="text" name="CodeC" onkeyup="checkC(this.value)"
						autofocus="" placeholder="コードを入力してください" class="inputC">
					</td>
					<td>
						<img alt="画像表示欄" id="imgC" src="inf.png"
						onmousedown="return false" oncontextmenu="return false">
					</td>
				</tr>
				<!-- CodeD -->
				<tr>
					<th><p>CodeD</p></th>
					<td>
						<input type="text" name="CodeD" onkeyup="checkD(this.value)"
						autofocus="" placeholder="コードを入力してください" class="inputD">
					</td>
					<td>
						<img alt="画像表示欄" id="imgD" src="inf.png"
						onmousedown="return false" oncontextmenu="return false">
					</td>
				</tr>
				<!-- CodeE -->
				<tr>
					<th><p>CodeE</p></th>
					<td>
						<input type="text" name="CodeE" onkeyup="checkE(this.value)"
						autofocus="" placeholder="コードを入力してください" class="inputE">
					</td>
					<td>
						<img alt="画像表示欄" id="imgE" src="inf.png"
						onmousedown="return false" oncontextmenu="return false">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>