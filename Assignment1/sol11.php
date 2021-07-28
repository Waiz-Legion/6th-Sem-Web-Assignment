<html>
    <head>
        <title>Last Visit</title>
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
                    <input type="submit" id = "btn" name="cookie-btn" value = "Last Visited"/>
                </div>
                
            </form>

            <!--PHP Script-->

            <div id = 'php'>
                <?php
                    function seecookie(){
                        date_default_timezone_set('Asia/Calcutta');
                        $expireTime = 60*60*24*60 + time();
                        setcookie('lastvisit', date("G:i - d/m/y"), $expireTime);
                        if(isset($_COOKIE['lastvisit'])){
                            $visited = $_COOKIE['lastvisit'];
                            echo $visited;
                        }
                        else{
                            echo "cookie is empty";
                        }
                    }
                    if(isset($_POST['cookie-btn'])){
                        seecookie();
                    }
                ?>
    
            </div>
        </div>
        
        
    </body>
</html>