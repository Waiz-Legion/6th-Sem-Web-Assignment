<html>
    <head>
        <title>Session counter</title>
        <style>
            #container{
                width: 100%;
                height: 100%;
                position: relative;
                background-color: rgb(46,46,46);
                
                flex-direction: column;
                
            }
            #btn{
                position: absolute;
                width: 20%;
                height: 10%;
                border: none;
                background-color: rgb(0, 197, 99);
                border-radius: 50px;
                cursor: pointer;
                transition: linear 0.2s;
                color:black;
                transform: translate(-50% -50%);
                top: 50%;
                left: 40%
            }
            #btn:hover, #btn:active{
                
                background-color: white;
                color: green;
                border: 3px solid rgb(0, 197, 99);
                
            }
            #php{
                
                height: 30%;
                width: fit-content;
                position:relative;
                display: flex;
                align-items:center;
                justify-content: center;
                top: 60%;
                font-size: 50px;
                color: white;
            }
        </style>
    </head>
    <body>
        <div id = "container">
            
            <form action="" method="POST">
                <div id="button">
                    <input type="submit" id = "btn" name="session-btn" value = "VIEWS"/>
                </div>
                
            </form>

            <!--PHP Script-->

            <div id = 'php'>
                <?php
                    function countview(){
                        session_start();
                        if(isset($_SESSION['views'])){
                            $_SESSION['views'] = $_SESSION['views'] + 1;
                        }
                        else{
                            $_SESSION['views'] = 1;
                        }
                        echo 'VIEWS = ' .$_SESSION['views'];
                    }
                    if(isset($_POST['session-btn'])){
                        countview();
                    }
                ?>
    
            </div>
        </div>
        
        
    </body>
</html>