<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location:login.php');
	exit;
}
?>

<?php
require("header.php");
?>

<a id="btnEmpty" href="index.php?action=empty">Clear Cart</a><br> <br><hr>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
<div>
<table class="tbl-cart" cellpadding="5" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<!-- <th style="text-align:left;">Code</th> -->
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
?>
		<tr>
		<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
		<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
		<td  style="text-align:right;"><?php echo "Kshs. ".$item["price"]; ?></td>
		<td  style="text-align:right;"><?php echo "Kshs. ". number_format($item_price,2); ?></td>
		<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item"  width="14em" height="14em"/></a></td>
	</tr>
<?php
		$total_quantity += $item["quantity"];
		$total_price += ($item["price"]*$item["quantity"]);
	}
?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Kshs. ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
</div>

<div class="place-order">
	<form action="order.php">
	<button id="place-order-btn" type="submit"  action="order.php"  name="place-order" value="">Place Order</button>
	</form>

</div> 

<?php
}
 else {
?>
<div class="no-records">Your Cart is Empty</div>
<div class="no-records"><a href="index.php">Go to Shopping</a></div>
<?php 
}
?>
</div>

<?php
require("footer.html");
?>