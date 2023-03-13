<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
             echo"<script>alert('Item Already added to cart')</script>";
            }
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name','Price'=>$_POST['price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
            
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name','Price'=>$_POST['price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
        }
    }
}
?>