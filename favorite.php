<?php
if (isset($_SESSION['customer'])) {
	echo '<table>';
	echo '<tr><th>商品番号</th><th>商品名</th>';
	echo '<th>価格</th><th></th></tr>';
	$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
		'root', '');
	$sql=$pdo->prepare("SELECT * FROM favorite JOIN product ON favorite.product_id = product.id WHERE favorite.customer_id = ?");
	$sql->execute([$_SESSION['customer']['id']]);
	foreach ($sql as $row) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td><a href="detail.php?id='.$id.'">', $row['name'], 
			'</a></td>';
		echo '<td>', $row['price'], '</td>';
		echo '<td><a href="favorite-delete.php?id=', $id, 
			'">削除</a></td>';
		echo '</tr>';
	}
	echo '</table>';
	
} else {
	echo 'お気に入りを表示するには、ログインしてください。';
		    // ボタンのスタイルと配置のためのCSS
			echo '<style>
			.button-container {
				margin-top: 20px;
			}
			.shop-button, .checkout-button {
				padding: 10px 20px;
				border: none;
				color: white;
				cursor: pointer;
			}
			.shop-button {
				background-color: #4CAF50; /* 緑色 */
			}
			.checkout-button {
				background-color: #008CBA; /* 青色 */
			}
		  </style>';
	
	// ボタンの配置
	echo '<div class="button-container">
			<button onclick="location.href=\'login-input.php\'" class="shop-button">ログイン</button>
			<button onclick="location.href=\'customer-input.php\'" class="checkout-button">新規会員登録</button>
		  </div>';
}
?>
