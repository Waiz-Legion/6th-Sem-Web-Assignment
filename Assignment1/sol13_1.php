<!DOCTYPE html>
<html>
    <head>
        <title>
            Insert Record
        </title>
        <style>
            #container{
                position: absolute;
                height: 100%;
                width: 100%;
                
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #form-container{
                position: relative;
                width: 40%;
                height: 80%;
                box-shadow: 5px 5px 20px #6e6e6e;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            form{
                
                position: relative;
                height: 100%;
                width: 100%;
                align-items: center;
                justify-content: center;
                display: flex;
                flex-direction: column;
                margin: 5%;
                transition: 2s;
            }
            input{
                width: 60%;
                height: 100%;
                position: relative;
                margin-top: 1%;
                border-style: none;
                border-bottom: 1px solid #6e6e6e;
            }
            input::placeholder{
                color: transparent;
            }
            .form-label{
                left: -60%;
                position: relative;
                font-family: 'Times New Roman', Times, serif;
            }
            #name:hover,
            #name:focus,
            #addr1:hover,
            #addr1:focus,
            #addr2:hover,
            #addr2:focus,
            #email:hover,
            #email:focus{
                border-bottom: 1px solid orange;
                outline: none;
                text-align: center;
            }
            input[type = 'text']:focus ~ .form-label,
            input[type = 'text']:hover ~ .form-label,
            input[type = 'text']:valid ~ .form-label
            {
                font-size: 15px;
                top: -70%;
                color: rgba(0, 0, 0, 1);
                background-color: white;
                
            }
            input[type = 'number']:focus ~ .form-label,
            input[type = 'number']:hover ~ .form-label,
            input[type = 'number']:valid ~ .form-label
            {
                font-size: 15px;
                top: -70%;
                color: rgba(0, 0, 0, 1);
                background-color: white;
                
            }
            #name-box,#addr1-box,#addr2-box,#email-box,#btn-btn{
                width: 100%;
                height: 7%;
                position: relative;
                margin: 3%;
                transition: 2s;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .email-label{
                left: -60%;
                top: -70%;
                position: relative;
            }

            #submit,#Search{
                border-style: none;
                background-color: dodgerblue;
                color: white;
                font-size: large;
                width: 50%;
                height: 100%;
                position: relative;
                cursor: pointer;
                border-radius: 20px;
                box-shadow: 3px 3px 10px dodgerblue;
            }
            #submit:active, #Search:active{
                width: 40%;
                box-shadow: none;
                font-size: 16px;
            }
            #Search{
                background-color: rgb(106, 252, 22);
                box-shadow: 3px 3px 10px rgb(106 ,252, 22);
                color: black;
            }
            a{
                width: 100%;
                position: relative;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
            }
            #php{
                display: block;
                font-size: 30px;
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>
        <div id="container">
            <div id="form-container">
                <form action="" method="POST">
                    <div id="name-box">
                        <input type="number" id="name" name="an-n" placeholder="Full Name" autocomplete="off" required>
                        <label for="name" class="form-label">Accesion number</label><br/>
                    </div>
                    
                    <div id="addr1-box">
                        <input type="text" id="addr1" name="title" placeholder="addr1" autocomplete="off" required>
                        <label for="name" class="form-label">Title</label><br/>
                    </div>
                    
                    <div    id="addr2-box">
                        <input type="text" id="addr2" name="author" placeholder="addr2" autocomplete="off" required>
                        <label for="name" class="form-label">Author</label><br/>
                    </div>
                    
                    <div id="email-box">
                        <input type="text" id="email" name="edition" placeholder="Email"  autocomplete="off" required>
                        <label for="name" class="email-label">Edition</label><br/>
                    </div>
                    <div id="email-box">
                        <input type="text" id="email" name="publisher" placeholder="Email"  autocomplete="off" required>
                        <label for="name" class="email-label">Publisher</label><br/>
                    </div>
                    <div id="btn-btn">
                        <input type="submit" name="submit" id="submit" value="Save Record">
                    </div>
                    <div id="btn-btn">
                        <a href="sol13_2.php"><button type="button" id="Search">Search Record</button></a>
                    </div>
                    
                    
                </form>
                <div id = 'php'>
                    <?php
                        include_once 'Connection2.php';
                        if(isset($_POST['submit'])){
                            $an = $_POST['an-n'];
                            $title = $_POST['title'];
                            $author = $_POST['author'];
                            $edition = $_POST['edition'];
                            $publisher = $_POST['publisher'];
                            $query = "INSERT INTO information VALUES ('$an', '$title', '$author', '$edition', '$publisher')";
                            if(mysqli_query($conn, $query)){
                                echo 'DONE';
                            }
                            else{
                                echo 'ERROR';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>