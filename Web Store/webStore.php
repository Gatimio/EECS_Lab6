<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Order Processed</title>
    <link href="wsstyle.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Thanks You For Your Purchase</h1>
    <h2 class='center'>Your order was sucessful</h2>
    <?php
        $vaseSet = $_POST["vaseSet"];
        $vaseSetCost = 179;
        $totalvaseSetCost = $vaseSetCost * $vaseSet;

        $wallLamp = $_POST["wallLamp"];
        $wallLampCost = 82;
        $totalwallLampCost = $wallLampCost * $wallLamp;

        $mug = $_POST["mug"];
        $mugCost = 31;
        $totalmugCost = $mugCost * $mug;

        $shipping = $_POST["shipping"];

        if($shipping == "sevenDay"){
            $shipping = "Free 7 day";
            $shippingCost = 0;
        }
        else if($shipping == "threeDay"){
            $shipping = "3 Day";
            $shippingCost = 5;
        }
        else{
            $shipping = "Over night";
            $shippingCost = 50;
        }

        $total = $totalvaseSetCost + $totalwallLampCost + $totalmugCost + $shippingCost;


        
        echo("<p>"."The password you entered in was: ".$_POST["password"]."</p>"."<br>");
        echo("<h2 class='center'>"."Receipt"."</h3>"."<br>");
        echo("<table class='backend'>");

        echo("<tr>");
            echo("<th>".""."</th>");
            echo("<th>"."Quantity"."</th>");
            echo("<th>"."Cost Per Item"."</th>");
            echo("<th>"."Sub Total"."</th>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Vase set"."</th>");
            echo("<td>".$vaseSet."</td>");
            echo("<td>"."$".$vaseSetCost."</td>");
            echo("<td>"."$".$totalvaseSetCost."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Wall Lamp"."</th>");
            echo("<td>".$wallLamp."</td>");
            echo("<td>"."$".$wallLampCost."</td>");
            echo("<td>"."$".$totalwallLampCost."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Mug"."</th>");
            echo("<td>".$mug."</td>");
            echo("<td>"."$".$mugCost."</td>");
            echo("<td>"."$".$totalmugCost."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Shipping"."</th>");
            echo("<td colspan='2'>".$shipping."</td>");
            echo("<td>"."$".$shippingCost."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th colspan='3'>"."Total Cost"."</th>");
            echo("<td>"."$".$total."</th>");
        echo("</tr>");

        echo("</table>");
    ?>
  </body>
</html>