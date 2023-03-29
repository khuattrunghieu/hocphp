<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài tập php</title>
</head>
<body>
	<h1>Bài thực hành số 1</h1>
	<h2>Bài 1</h2>
	<p>Viết chương trình cho phép người dùng nhập vào một số thực x từ bàn phím, sau đó:
		<br/>a.	In ra giá trị x2 và căn bậc 2 của x,
		<br/>b.	Tính giá trị của hàm f(x) = |x|(khi x<0) hoac ln(x+x^4) (khi x > 0) hoac (0 khi x = 0)
		<br/>c.	Tính giá trị của hàm f(x) = (e^|x| + log5x)/(3x +1).
		<br/>d.	Viết chương trình cho phép người dùng nhập vào một giá trị x từ bàn phím, sau đó tính các giá trị sinx, cosx, tgx, arcsinx, arccosx, arctgx.
</p>
	<form method="POST">
		<input type="int" name="sox" value="">
		<input type="submit" name="x" value="Nhap">
		<?php 
				if (isset($_POST['x'])) {
					$x = $_POST['sox'];
					echo "<br/>so vua nhap la " .($x);
					echo "<br/>a, x mu 2  = " . ($x*$x) . ", can bac 2 cua x la: " .(sqrt($x));
					echo "<br/>b, f(x) = ". bai1b($x);
					echo "<br/>c, f(x) = ". bai1c($x);
					echo "<br/>d, sinx = ". sin($x) .", cosx = ". cos($x). ", tgx = ". tan($x). ", arcsinx = ". sinh($x). ", arccosx = ". cosh($x).", arctgx = ". tanh($x);
				}

		?>
	</form>
	
	
	
</body>
</html>
<?php  
	function bai1b($x)
	{

		if($x < 0)
		{
			$f = abs($x);
		}
		elseif ($x>0) {
			$f = log($x+pow($x,4));
		}
		elseif($x == 0){
			$f = 0;
		}
		return $f;
	}
	function bai1c($x)
	{
		$f = (exp(abs($x)) + log($x)/log(5))/(pow(3,$x)+1);
		return $f;
	}


?> 