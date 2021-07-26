<!doctype html>
<html>
    <head>
        <title>
            User Inventory
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;

    background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  /*background-color:rgba(43, 3, 3, 0.945);*/
  
}
.topnav {
  overflow: hidden;
  background-color:rgb(73, 25, 21);
  height: 70px;
  border: 2px solid black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 180px 8px;
    -webkit-transition-duration: 0.2s; /* Safari 0.4*/
    transition-duration: 0.2s;/*0.4*/
    cursor: pointer;
}
.screen
{
    background-image:url('users.jpeg');
    background-size: cover;
    width:100%;
    height:600px;
}

.button1 {
    background-color: transparent;
    color:black; /* black*/
    border: 3px solid #4CAF50;
    border-radius: 5px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color:  transparent;
    color: black; 
    border-radius: 5px;
    border: 3px solid rgba(31, 58, 147, 1);
}

.button2:hover {
    background-color:rgba(31, 58, 147, 1);
    color: white;
}

.button3 {
    background-color:transparent; 
    color: white; 
    border-radius: 5px;
    border: 3px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: transparent;
    color: white;
    border-radius: 5px;
    border: 3px solid rgba(249, 105, 14, 1);
}

.button4:hover {background-color:rgba(249, 105, 14, 1);
 color:white;
}

.button5 {
    background-color:  transparent;
    color: white;
    border-radius: 5px;
    border: 3px solid #b40a70;
}

.button5:hover {
    background-color:#8d2663;
    color: white;
}

</style>
    </head>
    <body>

        <div class="topnav">
            <a href="index.php">User inventory</a>
          </div>
      

       
     <div class="screen">      
     <form>
          
            <button class="button button1"  type="submit" formaction="addUser.php">Add user</button>
            <button class="button button2"  type="submit" formaction="searchUser.php">Search user</button>
        
     </form> 
    </div>

    </body>
   
</html>