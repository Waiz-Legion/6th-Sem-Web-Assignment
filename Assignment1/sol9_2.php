

<!DOCTYPE html>
<html>
    <head>
        <title>
            Fetch Record
        </title>
        <style>
            body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
            }
            #container{
                position: absolute;
                width: 100%;
                height: 100%;
                
            }
            #search{
                display: flex;
                width: 100%;
                height: 10%;
                position: relative;
                margin-top: 3%;
                justify-content: center;
                align-items: center;
            }
            #search-box{
                width: 20%;
                height: 100%;
                
                position: relative;
                justify-content: center;
                align-items: center;
                display: flex;
            }

            #search-tab{
                width: 100%;
                margin: 5%;
                height: 50%;
                position: relative;
                text-decoration: none;
                box-shadow: inset 2px 2px 7px #6e6e6e;
                border-radius: 20px;
                text-align: center;
                font-size: large;
            }
            #btn-btn{
                width: 10%;
                height: 100%;
                margin-left: 1%;
                position: relative;
                justify-content: center;
                align-items: center;
                display: flex;
            }

            #btn-submit{
                width: 100%;
                height: 50%;
                border-style: none;
                border-radius: 20px;
                background-color: #0ba6ff;
                position: relative;
                font-size: medium;
                color: white;
                box-shadow: 5px 5px 20px #6e6e6e;
                cursor: pointer;
            }
            #btn-submit:active{
                box-shadow: none;
                width: 95%;
                font-size: 15px;
            }
            #search-tab:focus{
                
                outline: none;
            }
            #data-table{
                
                width: 100%;
                height: 100%;
                position: relative;
                
            }
            table,th,td{
                border: 1px solid black;
            }
            table{
                position: relative;
                width: 100%;
                margin-top: 5%;
                background: linear-gradient(90deg, #ddd6f3, #faaca8);
            }
            th{
                width: 25%;
                margin: 5%;
                
            }
            form{
                width:100%;
                height: 100%;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }

        </style>
    </head>
    <body>
        
        <div id="container">
            <div id="search">
                <form action="" method="POST">
                    <div id="search-box">
                        <input type="text" id="search-tab" name='search-value'/>
                    </div>
                    <div id="btn-btn">
                        <input type="submit" id="btn-submit" name = 'btn' value="Search Database"/>
                    </div>
                </form>

            </div>
            <div id="data-table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Address 1</th>
                        <th>Address2</th>
                        <th>Email</th>
                    </tr>
                    <?php
include_once 'Connection.php';
if(isset($_POST['btn'])){
    $id = $_POST['search-value'];
    $sql = "SELECT * FROM informations WHERE name = '$id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['addr1']; ?></td>
            <td><?php echo $row['addr2']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <?php
    }
}

?>
                </table>
                
            </div>
        </div>
    </body>
</html>