<!Doctype html>



<html>

<head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="974506047732-1req04aot61qbe642a6qtpivuub7qq0s.apps.googleusercontent.com">
    
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
        }
        
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('login background.jpg');
            /* height: 150vh; */
            /* background-size: cover; */
            background-position: center;
        }
        
        #submit,
        #reset {
            width: 4cm;
            height: 1cm;
            font-size: 20px;
            border-radius: 35px;
            background-color: rgb(0, 0, 0);
            color: white;
            cursor: pointer;
            margin-left: -2px;
            transition: 0.6s;
        }
        
        .bor form {
            position: absolute;
            margin-top: 5%;
            margin-left: 40%;
            border: 4px solid rgb(187, 64, 64);
            border-radius: 15px;
            padding: 30px 15px;
            text-align: justify;
            background-color: rgba(255, 255, 255, 0.911);
        }
        
        .bor .labl {
            text-align: left;
        }
        
        .bor img {
            border: 4px solid limegreen;
            margin-left: 30%;
            height: 140px;
            width: auto;
            border-radius: 20px;
        }
        
        .bor .labl input:not(.chk) {
            width: 280px;
            height: 30px;
            border-radius: 10px;
            padding: 2px 5px;
            background-color: rgb(255, 255, 255);
            border: 2px solid rgb(0, 0, 0);
        }
        
        .bor .labl select {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            width: 100px;
            height: 30px;
            border-radius: 10px;
        }
        
        .bor .labl #robot {
            padding: 2px 2px;
            border-radius: 3px;
            margin-left: 0.15cm;
        }
        
        #submit:hover,
        #reset:hover {
            background-color: rgb(255, 255, 255);
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <div class="bor">
            <form>
                <img src="login page.jpg">
                <table>
                    <tr>
                        <td class="labl">
                            <label for="user">Username</label><br>
                            <input type="text" id="user" placeholder="Type Your Name"><br><br>
                            <!-- <label for="user">Last Name</label><br>
                            <input type="text" id="user" placeholder="Type Your Name"><br><br>
                            <label for="mail">E-mail:</label><br>
                            <input type="email" id="mail" placeholder="Type your E-Mail"><br><br>
                            <label for="user">Phone Number</label><br>
                            <input type="text" id="user" placeholder="Type Your Name"><br><br> -->
                            <label for="pwd">Password:</label><br>
                            <input type="password" id="pwd" placeholder="Type Your Password" required><br><br>
                            <!-- <label for="user">Date Of Birth</label><br>
                            <input type="text" id="user" placeholder="Type Your Name"><br><br> -->
                        </td>
                    </tr>
                </table>
                <!-- <div class="g-signin2 " data-onsuccess="onSignIn" data-width="250" data-heights="50" data-prompt="select_account" style="margin-left:25px;" ></div> -->
                
                <input type="submit" onclick="alert('Thank You For Signing In')" value="Submit" id="submit">
                <input type="reset" id="reset"><br><br>
                <h4 style="text-align:center ;">OR</h4>
                <br>
             <div class="g-signin2 " data-onsuccess="onSignIn" data-width="250" data-heights="50" data-prompt="select_account" style="margin-left:25px;" ></div><br>
            </form>
    

    


    </div>
</header>
</body>
</html>
<script>

        function logOut(){

           var at= gapi.auth2.getAuthInstance();
            at.signOut();
        }
        function onSignIn(user){
          var userdata=user.getBasicProfile();
          $.ajax({
            url:'storeuser.php',
            type:'post',
            data:{'username':userdata.getName(),'userid':userdata.getId(),'email':userdata.getEmail(),'imageurl':userdata.getImageUrl(),
             success:function(result){
                console.log("result");
             }
            }
          });
        }


    </script>