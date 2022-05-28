<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card{
            margin: 0 auto;
            height: 700px;
            width: 500px;
            margin-top: 50px;
            background-color: white;
            box-shadow: 0 4px 8px 0 royalblue;
            transition: 0.3s;
            font-size: 0%;
        }
        .card:hover{
            box-shadow: 0 4px 8px 0 royalblue;
        }
        .person{
            margin-top: 20px;
            margin-left: 220px;
        }
        #fname{
            margin-left: 70px;
            height: 30px;
            width: 150px;
            float: left;
        }
        #lname{

            height: 30px;
            width: 150px;
            float: right;
            margin-right: 70px;
        }
        span{
            margin: 20px;
          color: black;
           font-size: 2rem;
        }

        input[type=text]{

            width: 70%;
            padding: 10px 20px ;
            background-color: white;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: black;
            box-sizing: border-box;
            /*border: 3px solid salmon;
            border-radius: 5px;*/
            border: none;
            border-bottom: 3px solid salmon;
        }
        input[type=password]{
            width: 70%;
            padding: 10px 20px ;
            background-color: white;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: black;
            box-sizing: border-box;
            border: 3px solid salmon;
            border-radius: 5px;
            /*border: none;
            border-bottom: 3px solid salmon;*/
        }
        option{
            width: 70%;
            padding: 10px 20px ;
            background-color: black;
            /*font-size: 1rem;*/
            height: 30px;
            margin: 20px 0;
            color: black;
            box-sizing: border-box;
            border: 3px solid salmon;
            border-radius: 5px;
            /*border: none;
            border-bottom: 3px solid salmon;*/
        }
        input[type="radio"]{

            padding: 10px 20px ;
            background-color: white;
            /*font-size: 1rem;*/
            color: black;
            margin: 20px 0;
            color: white;
            box-sizing: border-box;


            /*border: none; 
            border-bottom: 3px solid salmon;*/
        }
        input[type="submit"]{
            width: 100px;
            border: none;
            background-color: indianred;
            color: black;
            padding: 10px;
            cursor: pointer;
            margin-left: 100px;
        }
        input[type="reset"]{
            width: 100px;
            border: none;
            background-color: indianred;
            color: black;
            padding: 10px;
            cursor: pointer;
            float: right;
            margin-right: 100px;
        }
        legend{
            color: white;
        }
    </style>
</head>
<body>




        <div class="card">
            <a href="HomePage.html"><img src="images/metro.png" height="100px" width="70px" class="person"></a>
            <br><br>
            <form action="insert.php" method="POST">

                    <legend>Registration</legend>
                <input type="text" name="fname" id="fname" placeholder="First Name" >
                <input type="text" name="lname" id="lname" placeholder="Last Name" class="name" >
                <br>
                <br><br>
                <br>
                <span>👤</span>
                <input type="text" name="username" id="userid" placeholder="Username" >
                <br>
                <span>📧</span>
                <input type="text" name="email" id="email" placeholder="Email" >
                <br>
                <span>⚤</span> <select name="gender" id="genderid" >
                    <option value="m">Male</option>
                    <option value="f">Female</option>

                </select>

                <br/><br/>

                <span>☎</span>
                <input type="text" name="telephone" id="telephone" placeholder="Phone Number" >
                <br>
                <span>🔓</span>
                <input type="password" name="Password" id="Password"  placeholder="Password" >
                <br>
                <span>🔒</span>
                <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password" >
                <br>
                <br>
                <input type="submit" value="Submit">
                  <input type="reset" value="Clear">

    </form>



    </div>
</body>
</html>
