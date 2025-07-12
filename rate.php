<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Movers and Packers Management System|| Services</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<?php include_once('includes/header.php');?>
<!-- //header -->
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>

	
    </body>
</html>


<?php
// Function to create the table row
function createTableRow($householdType, $laborCost, $menRequired, $packingMaterial, $transportation, $shiftingCharges) {
    echo "<tr>";
    echo "<td>$householdType</td>";
    echo "<td>Rs. $laborCost</td>";
    echo "<td>$menRequired Men</td>";
    echo "<td>Rs. $packingMaterial</td>";
    echo "<td>Rs. $transportation</td>";
    echo "<td>Rs. $shiftingCharges</td>";
    echo "</tr>";
}

// HTML and CSS to center the table and style it
echo "<html><head>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f9; margin: 0; padding: 0; }";
echo "h1 { color: #333; }"; // Title color
echo "table { margin: 50px auto; border-collapse: collapse; width: 80%; }"; // Centers the table
echo "th, td { padding: 12px; border: 1px solid #ddd; text-align: left; font-size: 16px; }"; // Adds padding, border, and aligns text
echo "th { background-color: #4CAF50; color: white; font-weight: bold; }"; // Header row styles
echo "tr:nth-child(even) { background-color: #f2f2f2; }"; // Zebra striping for rows
echo "tr:hover { background-color: #ddd; }"; // Highlight row on hover
echo "td { font-size: 14px; color: #333; }"; // Table data font color and size
echo "</style>";
echo "</head><body>";

// Print the table header
echo "<h1>List of charges for moving locally - For Household Shifting</h1>";
echo "<table>";
echo "<tr>";
echo "<th>Household Type</th>";
echo "<th>Labor Cost (Updated cost)</th>";
echo "<th>Men Required</th>";
echo "<th>Packing Material</th>";
echo "<th>Transportation</th>";
echo "<th>Tentative Shifting Charges</th>";
echo "</tr>";

// Print the table rows with data
createTableRow("1 BHK", "700-1000", "2", "1200-2200", "1200-4000", "2000-8000");
createTableRow("2 BHK", "1200-2000", "4", "2000-3500", "1500-4500", "5000-12000");
createTableRow("3 BHK", "2000-3000", "6", "3500-4500", "3000-5500", "7500-14000");
createTableRow("4 BHK", "3000-4000", "8", "4000-5500", "4000-8500", "10500-19000");
createTableRow("Villa", "3500-8000", "8-10", "5000-8000", "5500-10000", "11500-23000");

echo "</table>";
echo "</body></html>";
?>


<?php
// Check if the function is already declared
if (!function_exists('createTableRow')) {
    // Function to create the table row
    function createTableRow($householdType, $laborCost, $menRequired, $packingMaterial, $transportation, $shiftingCharges) {
        echo "<tr>";
        echo "<td>$householdType</td>";
        echo "<td>Rs. $laborCost</td>";
        echo "<td>$menRequired Men</td>";
        echo "<td>Rs. $packingMaterial</td>";
        echo "<td>Rs. $transportation</td>";
        echo "<td>Rs. $shiftingCharges</td>";
        echo "</tr>";
    }
}

// HTML and CSS to center the table and style it
echo "<html><head>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f9; margin: 0; padding: 0; }";
echo "h1 { color: #333; }"; // Title color
echo "table { margin: 50px auto; border-collapse: collapse; width: 80%; }"; // Centers the table
echo "th, td { padding: 12px; border: 1px solid #ddd; text-align: left; font-size: 16px; }"; // Adds padding, border, and aligns text
echo "th { background-color: #4CAF50; color: white; font-weight: bold; }"; // Header row styles
echo "tr:nth-child(even) { background-color: #f2f2f2; }"; // Zebra striping for rows
echo "tr:hover { background-color: #ddd; }"; // Highlight row on hover
echo "td { font-size: 14px; color: #333; }"; // Table data font color and size
echo "</style>";
echo "</head><body>";

// Print the table header
echo "<h1>List of charges for moving long distance - For Household Shifting</h1>";
echo "<table>";
echo "<tr>";
echo "<th>Household Type</th>";
echo "<th>Labor Cost (Updated cost)</th>";
echo "<th>Men Required</th>";
echo "<th>Packing Material</th>";
echo "<th>Transportation</th>";
echo "<th>Tentative Shifting Charges</th>";
echo "</tr>";

// Print the table rows with data for long-distance charges
createTableRow("1 BHK", "1500-2500", "2", "2000-3000", "2500-8000", "4000-10000");
createTableRow("2 BHK", "2500-4000", "4", "3000-5000", "4000-10000", "10000-15000");
createTableRow("3 BHK", "4000-6000", "6", "5000-7000", "6000-12000", "15000-25000");
createTableRow("4 BHK", "6000-8000", "8", "7000-10000", "8000-15000", "25000-35000");
createTableRow("Villa", "7000-15000", "8-10", "10000-15000", "12000-20000", "30000-50000");

echo "</table>";
echo "</body></html>";
?>