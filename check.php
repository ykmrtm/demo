<? //index.phpへ入力されたコードとDB内で合致する画像パスを取得する
	$code = @$_POST['code'];	//受信した入力データを代入
	if(!@$code)exit;	//受信した入力データがからであれば実行しない
	$db = mysqli_connect('localhost','root','','demo')
	or die(mysqli_connect_error());		//DB接続、DB選択
	$sql = "SELECT * FROM demo WHERE code = '$code';";	//クエリを変数へ代入
	$select = mysqli_query($db, $sql) or die(mysqli_error($db));	//受信データをcodeカラムとして持つrowを検索、選択
	$row = mysqli_fetch_assoc($select);	//rowデータを配列として取得、代入
	$img = $row['img'];	//imgカラムを変数へ代入
	echo $img;	//index.phpのAjax内successへ送信される
	mysqli_close($db);
?>