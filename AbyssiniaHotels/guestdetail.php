<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

<?php


echo "		<p><b>Guest Details</b></p><hr>\n"; 
echo "		<form>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">First Name*\n"; 
echo "				<input id=\"firstname\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Last Name*\n"; 
echo "				<input id=\"lastname\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Email Address*\n"; 
echo "				<input id=\"email\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Telephone Number*\n"; 
echo "				<input id=\"phone\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Address Line 1*\n"; 
echo "				<input id=\"addressline1\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Address Line 2\n"; 
echo "				<input id=\"addressline2\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Zip/Postcode*\n"; 
echo "				<input id=\"postcode\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">City*\n"; 
echo "				<input id=\"city\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">State*\n"; 
echo "				<input id=\"state\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "			<div class=\"large-6 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Country*\n"; 
echo "				<input id=\"country\" type=\"text\" placeholder=\"\" />\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  \n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-12 columns\">\n"; 
echo "			  <label class=\"fontcolor\">Special Requirements\n"; 
echo "				<textarea id=\"specialrequirements\" placeholder=\"\"></textarea>\n"; 
echo "			  </label>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		  <div class=\"row\">\n"; 
echo "			<div class=\"large-12 columns\" >\n"; 
echo "			<div class=\"large-6 columns\"><button type=\"button\" class=\"button small fontslabo\" style=\"background-color:#2ecc71;\"  onClick=\"return confirmeverything();\"><a href=\"reservationdetail.php\">Confirm</a></button>\n"; 
echo "			</div>\n"; 
echo "			</div>\n"; 
echo "		  </div>\n"; 
echo "		</form>\n";

?>