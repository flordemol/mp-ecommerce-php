<!DOCTYPE html>
<html>
<head>
	<title>Compra exitosa</title>
</head>
<body>
	<p>¡Su compra ha sido exitosa!</p>
	
    <?php
        echo "<p>collection_id: ".$_GET["collection_id"]."</p>";
        echo "<p>collection_status: ".$_GET["collection_status"]."</p>";
        echo "<p>external_reference: ".$_GET["external_reference"]."</p>";
        echo "<p>payment_type: ".$_GET["payment_type"]."</p>";
        echo "<p>merchant_order_id: ".$_GET["merchant_order_id"]."</p>";
        echo "<p>preference_id: ".$_GET["preference_id"]."</p>";
        echo "<p>site_id: ".$_GET["site_id"]."</p>";
        echo "<p>processing_mode: ".$_GET["processing_mode"]."</p>";
        echo "<p>merchant_account_id: ".$_GET["merchant_account_id"]."</p>";
	?>

<script src="https://www.mercadopago.com/v2/security.js" view="item"></script>
</body>
</html>