<?php 
session_start();
//var_dump($_SESSION);
if(isset($_GET['id']) && isset($_GET['name'])){
	$id = $_GET['id'];
	$name = $_GET['name'];
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		$flag = 1; //1 la ko tim thay, 0 la tim thay
		for ($i=0; $i < count($cart); $i++) { 
		    //neu san pham da ton tai trong gio hang
			if($id==$cart[$i]->id){
				//tang so luong len
				$cart[$i]->quantity++;
				$flag=0;//la tim thay
				break;
			}
		}//end for

		//trong truong hop ko tim thay
		if($flag==1){
			$product = new stdClass();
			$product->id=$id;
			$product->name=$name;
			$product->quantity=1;
			array_push($cart, $product);
		}
		$_SESSION['cart']=$cart;
	}else{
		$cart = array();
		$product = new stdClass();
		$product->id=$id;
		$product->name=$name;
		$product->quantity = 1;
		array_push($cart, $product);
		$_SESSION['cart']=$cart;
	}
}

if(isset($_GET['action'])){
	$action = $_GET['action'];
	switch ($action) {
		case 'delete':
		 //xoa san pham
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			if(isset($_SESSION['cart'])){
				$cart= $_SESSION['cart'];
				//so sanh id san pham can xoa voi id san pham trong gio hang
				for ($i=0; $i < count($cart); $i++) { 
					//neu bang nhau
					if($id==$cart[$i]->id){
						array_splice($cart, $i, 1);
						break;
					}
				}//end for
				$_SESSION['cart']=$cart;
			}
		}
		break;
		
		case 'clear':
		//xoa gio hang
		if(isset($_SESSION['cart'])){
			unset($_SESSION['cart']);
		}
		break;

		default:
		break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
</head>
<body>
	<?php 
	if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
		$cart = $_SESSION['cart'];
		foreach ($cart as $r) {
			?>
			<div>
				<h4><?php echo $r->quantity; ?>x<?php echo $r->name; ?></h4>
				<a href="?id=<?php echo $r->id ?>&action=delete">Remove</a>
			</div>
			<?php
		}
	}else{
		?>
		<p>Ban ko co san pham nao trong gio hang, luong ve roi thi mua di</p>
		<?php 
	}?>
	<a href="?action=clear">Clear All</a>
	<a href="checkout.php">Checkout</a>
</body>
</html>