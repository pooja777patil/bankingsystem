<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
    
    button
           {
    position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color:white;
    text-transform: uppercase;
    font-size: 20px;
    letter-spacing: 2px;
    border-radius: 108px;
    background-image: linear-gradient(105deg, #fff 0%, black 40%);
        }

    .img{
        width:300px;
        height:300px;
        border: 8px solid #555;
        border-radius:150px;
        border-color:black;
    }
body{
       
        background-repeat:no-repeat;
        background-image:url("https://images.unsplash.com/photo-1574607408385-dc664a9c5272?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fG1vbmV5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=100")
    ;}
    h1 {
    font-family:Georgia, 'Times New Roman', Times, serif;
    color:white;
    font-weight: bold;
    transition: 0.1s;
    text-align: center;
}
   
    </style>

</head>


<body>
    <main></main>
    <div></div>
    <?php
  include 'navbar.php';
  ?>

    <div class="container">
    
        
          
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/user.jpeg" class="img">
                <br><br>
                <a href="transfermoney.php"><button>all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transfer.jpeg" class="img">
                <br><br>
                <a href="transfermoney.php"><button>Money transfer</button></a>
            </div>
            <div class="col-md act">
            <br><br>
                <img src="img/history.jpeg" class="img">
                <br><br>
                <a href="transactionhistory.php"><button >Transfer history</button></a>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

            
</body>

</html>
