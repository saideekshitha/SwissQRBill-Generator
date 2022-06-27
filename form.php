<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    table {
        width: 50%;
        border-collapse: collapse;    
    }
    table.center {
  margin-left: auto; 
  margin-right: auto;
}
    table tr td,
    table tr th {
        border: 1px solid black;
        padding: 25px;
    }
</style>
<body>
<form method="POST" action="formaction.php">
<div style="display:inline-block;vertical-align:top;">
<img src="Logo.png" alt="img" width="450" height="450"/>
</div>

<div style="display:inline-block;">
<div style="position:relative;left:130px; top:20px;">
	<label for="name"><b>CREDITOR DETAILS</b> <br><br>
    Customer Name: <input type="text" class="form-control" name="dcustomerName" id="dcustomerName" placeholder="Enter customer name" required><br>
	Address:<input type="text" class="form-control" name="dAddress" id="dAddress" placeholder="Enter Address" required><br>
	Zip:<input type="text" class="form-control" name="dZip" id="dZip" placeholder="Enter Zip" required><br>
	City:<input type="text" class="form-control" name="dCity" id="dCity" placeholder="Enter City" required><br>
	Country:<input type="text" class="form-control" name="dCountry" id="dCountry" placeholder="Enter Country" required>
    <br>
    <br>
    <br>
</div>

<div style="position:relative;left:500px;bottom:515; ">	
	<label for="name"><b>DEBTOR DETAILS</b> <br><br>
    Customer Name:<input type="text" class="form-control" name="customerName" id="customerName" placeholder="Enter customer name" required><br>
	Address:<input type="text" class="form-control" name="Address" id="Address" placeholder="Enter Address" required><br>
	Zip:<input type="text" class="form-control" name="Zip" id="Zip" placeholder="Enter Zip" required><br>
	City:<input type="text" class="form-control" name="City" id="City" placeholder="Enter City" required><br>
	Country:<input type="text" class="form-control" name="Country" id="Country" placeholder="Enter Country" required><br>
</div>

<div style="position:relative;left:500px;bottom:1000px;width: 50vw; margin-left : 20vw; margin-bottom : 50vw;">
	<label for="name"><b>INVOICE DETAILS</b><br><br>
	Date:<input type="text" class="form-control" name="date" id="date" placeholder="Enter Date" required><br>
	Day:<input type="text" class="form-control" name="day" id="day" placeholder="Enter Day" required><br>	
    <table>
        <tr>
            <th>#</th>
            <th>Count</th>
            <th>Label</th>
			<th>Total</th>
        </tr>
        <tbody id="tbody"></tbody>
    </table><br>
 
    <button type="button" onclick="addItem();">Add Item</button>
    <input type="submit" name="addInvoice" value="Add Invoice">
	<input type="submit" name="reset" value="Reset"><br><br>
	<input type="submit" name="generate" value="GENERATE PDF">
	
	<script>
    var items = 0;
    function addItem() {
        items++;
 
        var html = "<tr>";
            html += "<td>" + items + "</td>";
            html += "<td><input type='number' name='Count[]'></td>";
			html += "<td><input type='text' name='Label[]'></td>";
			html += "<td><input type='number' name='Total[]'></td>";
            html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";
 
        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
    }
 
function deleteRow(button) {
    button.parentElement.parentElement.remove();
    // first parentElement will be td and second will be tr.
}
</script>
</form>
</div>
</div>
</body>
</html>