<html>
    <head>
        <style>
            
        </style>
    </head>
    <body>
    <a href="/userlogout">Log out me</a>
        <div class="table">
            <h1>My carts</h1>
        <table border="1">
            <tr>
                <td>Name of Products</td>
                <td>price</td>
                <td>Action</td>
                <td>Remove to cart</td>
            </tr>
            <?php
           
            foreach($members as $data){
            $data    = get_object_vars($data);
            $carts= $data['carts'];
            $amount= $data['amount'];
            
            $ordered= $data['ordered'];
            

            ?>
            <tr>
                <td>{{$carts}}</td>
                <td>{{$amount}}</td>
                
                <td>{{$ordered}}</td>
                @if($ordered=="carted")
                <td><a href={{"delete/".$carts}}>Delete</a></td>
                
                <td><a href={{"beforecheck/".$carts."/".$amount}}>Buy Now</a></td>
                @else
                <td><a href={{"delete/".$carts}}>Cancel Order</a></td>
                <td>Bought</a></td>
                @endif
            </tr>
            <?php

}
            ?>
        </table>
        <br>
        <a href="index">Home</a>
        </div>
    </body>
</html>