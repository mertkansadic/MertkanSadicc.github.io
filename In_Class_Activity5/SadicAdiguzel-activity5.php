
<?php 

		$from_value = ($_POST['value']);
		$from_currency = $_POST['fromCurrency'];
		$to_currency = $_POST['toCurrency'];
	
		
		$exchange_rates = [
			"USD" => ["USD" => 1.0, "CAD" => 1.44, "EUR" => 0.92],
			"CAD" => ["USD" => 0.70, "CAD" => 1.0, "EUR" => 0.64],
			"EUR" => ["USD" => 1.08, "CAD" => 1.55, "EUR" => 1.0]
		];

	
			$converted_value = $from_value * $exchange_rates[$from_currency][$to_currency];

	
	

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />

</head>

<body>

	<form action = "" method="POST">
		<table>
			<tr>
				<td>
					From:
				</td>
				<td>
					<input type="number" name="value" value="<?php echo $from_value?? ''  ?>" >
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="fromCurrency">
						<option value="USD"  <?php echo  $from_currency=="USD"?"selected ":""   ?> > US Dollar </option>
						<option value="CAD"  <?php echo $from_currency=="CAD"?"selected ":""   ?> > Canadian Dollar </option>
						<option value="EUR"  <?php echo $from_currency=="EUR"?"selected ":""   ?> > Euro </option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<input  disabled="number" name="value2"/ value="<?php echo $converted_value?? "" ?>">
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="toCurrency">
					<option value="USD"  <?php echo  $to_currency=="USD"?"selected ":""   ?> > US Dollar </option>
						<option value="CAD"  <?php echo $to_currency=="CAD"?"selected ":""   ?> > Canadian Dollar </option>
						<option value="EUR"  <?php echo $to_currency=="EUR"?"selected ":""   ?> > Euro </option>
					</select>
				</td>	
			</tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" value="convert"/>
				</td>	
			</tr>
		</table>
		
	</form>		
</body>
