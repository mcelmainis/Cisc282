<!DOCTYPE html>
<html>
	<head>
		<title>Giftworks Boutique</title>
		<link rel="stylesheet" type="text/css" href="./cssassn2.css">
		<meta charset="UTF-8">
		<meta name="author" content="Malcolm Celmainis"/>
	</head>
	
<body id="page1" >
<block>

<!-- First block has the nav bar, a logo and a short company description -->

	<h1> G.W</h1>  
	<h2> Edgemont Village North Vancouver</h2>
	<ul id="navBar">
		<li><nav><a href="./page2.php"  alt="page with current inventory"> Find your perfect gift here!</a></nav> </li>
		<li><nav><a href="http://edgemontvillage.ca/project/giftworks-boutique/"alt="Edgemont Village webpage" /> Edgemont Webpage</a></nav> </li>
	</ul>	
	<img src="images/logo2.jpg" alt="Giftworks" title="Giftworks" class="logo"/>
	<?php include_once "./paragraph.php";?>
	<hr/>
	
<?php include "./hourTable.php"; ?>

<block>
<!-- this block contains some advertising for some of the art suppliers -->
<h1 id="suppliersTitle">Some of our suppliers</h1>


<section class="twoColumnOuter">
	<div class="twoColumnInner">
<p> Vancouver Candle Company proudly supports local businesses by offering high quality, beatiful products. Owner and expert
	candle maker Nick Rabuchin uses science to craft the perfect candles. Using traditional techniques, and high quality ingredients
	such as soy wax, 100% premium cotton, and natural essential oils, Nick handcrafts the perfect balance of fregrance and ambiance. 
	Each candle is made by hand in small batches in you very own Vancouver, British Columbia.
	</p>
	
</div>
</section>

<section class="twoColumnOuter">
	<div class="twoColumnInner">
	<img src="images/vancouverCandleCo.jpg" alt="Vancouver Candle Company" title="Candle" style="width:100%; height:100%;"/>
</div>
</section>

<section class="noWrap"
</section>


<section class="twoColumnOuter">
	<div class="twoColumnInner">
	<img src="images/sueClarkePots.jpg" alt="Sue Clarke's Pottery" title="Pottery" style="width:100%; height:100%;" id="sue" />
</div>
</section>

<section class="twoColumnOuter">
	<div class="columnInner">
<p> From the lively, creative community, Bowen Island, Sue Clarke creats beautiful and unique pottery. With years of experience, 
her pottery is not only nice to look at, they are all functional. From serving at a dinner party to decanting wine. Her work makes the
perfect give for someone who appreciates good craftsmanship.</p>
	
</div>
</section>

<section class="noWrap"
</section>

<section class="twoColumnOuter">
	<div class="columnInner">
	<p id="paragraph"> An avid nature lover, Kari Lehr, living in a part of Canada where wildlife is all around her has inspired the artwork available at Giftworks Boutique.
	She has found humillity in nature and expresseses it through a variety of pieces. At Giftworks she sells a variety of paintings, postcards, and matte pressed 
	prints.
	

	</p>
</div>
</section>

<section class="twoColumnOuter">
	<div class="columnInner">
	<img src="images/kariLehr.JPG" alt="hand painted bear image" title"Kari Lehr painting" style="width:100%; height:100%;" id="kari1" />
	</div>
</section>

<section class="noWrap"
</section>

<hr>


<section class="twoColumnOuter">
	<div class="columnInner">
	<h1>CONTACT</h1>
	<h3>Sign up for our newletter!</h3>
	<p>We would love to hear from you! Please leave any comments you may have in the comment section with an 
	email and phone we can reach you at. Our goal is to cater to everyone so please fill in the information 
	as complete as possible. :)</p>
</div>
</section>

<section class="twoColumnOuter">
	<div class="columnInner">
	<form action="./contactPage.php" method="post">
	<label for="name">Name</lable><input type="text" name="name" maxLength="50" required><br>
	<label for="email">Email: </label><input type="email" name="email" id="userEmail" maxlength="30"><br>
	<label for="phone">Phone format(xxx-xxx-xxxx): </label><input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name="phone" required ><br>
	<label for="newsletter">Sign up for our newletter?</label><input name="newsletter" type="checkbox" value="TRUE"><br>
	<label for="gender">Gender (required)</label>
	<select name="gender" required>
		<label>
		<option value="">Select one</option>
		<option value="rns">Rather not say</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select><br>
	<label>Comments</label><input type="text" name="comments" maxlength="250"><br>
	<input type="reset">
	<input type="submit">
	
	</form>
	</div>
</section>

<section class="noWrap"
</section>



<hr>
<h3>Check to see if you're in our database!<h3>
<form action="./databasecheck.php" method="post">
	<label>Enter Name(required) </label><input type="text" name="checkName" required maxLength="50">
	<input type="submit">
</form>

<hr>

<?php include "./footer.php"; ?>

</body>
</html>