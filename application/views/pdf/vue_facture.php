<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title span {
        font-size: 45px;
        line-height: 45px;
        color: #333;
        font-style: italic;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>


<?php           
                                                                $total_prix = 0;
                                                                foreach ($ventes as $item) { 
                                                                   $total_prix = $total_prix + ($item->prix_vente_v * $item->quantite_vendu);
                                                           
                                                                }
                                                            ?>


    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                               <span>Man Zong Electronic </span><br>
                                Phone : 56536373 <br>
                                Email : 
                            </td>
                            
                            <td>
                                <br>
                                Created: <?php echo date('M j, Y', strtotime($date_d)); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Customer : <br>
                                Address :<br>
                                phone : 
                            </td>
                            
                            <td>
                                <?php echo $client->nom; ?><br>
                                <?php echo $client->quartier; ?><br>
                                <?php echo $client->telephone; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading" colspan="2" style="text-align: center;">
                <td> 
                Product summary :
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    
                </td>
                
                <td>
                    
                </td>
            </tr>


            <tr>
                <td colspan="2">
                    <table>
                        <tr class="heading" style="text-align: center;">
                            <td>
                                Name
                            </td>
                            
                            <td>
                                Unit Price
                            </td>

                            <td>
                                Quantity
                            </td>
                            
                            <td>
                                Total
                            </td>
                        </tr>

                        <?php 
                                                                $i=0;
                                                                foreach ($ventes as $item) { 
                                                                    $i++;
                                                            ?>
                                                            <tr style="text-align: center;">
                                                                <td><?php echo $item->nom_produit; ?></td>
                                                                <td><?php echo $item->prix_vente_v." FCFA";?></td>
                                                                <td><?php echo $item->quantite_vendu; ?></td>
                                                                <td><?php echo $item->prix_vente_v*$item->quantite_vendu." FCFA"; ?></td>
                                                            </tr>
                                                            <?php 
                                                                }
                                                            ?>

                        <tr style="text-align: right; border-top: 2px solid #eee; font-weight: bold;">
                        <td>
                                
                            </td>
                            
                            <td>
                               
                            </td>

                            <td >
                               Total
                            </td>
                            
                            <td style="text-align: center;">
                                <?php echo $total_prix." FCFA"; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            
        </table>
    </div>
</body>
</html>