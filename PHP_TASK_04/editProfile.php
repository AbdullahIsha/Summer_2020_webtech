<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year']))
        {
            echo "please fillup all";
        }
        else 
        {
            $name = $_POST['name'];
            $uname = $_POST['userName'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            setcookie('name', $name, time()+3600, '/');
            setcookie('userName', $uname, time()+3600, '/');
            setcookie('email', $email, time()+3600, '/');
            setcookie('gender', $gender, time()+3600, '/');
            setcookie('day', $day, time()+3600, '/');
            setcookie('month', $month, time()+3600, '/');
            setcookie('year', $year, time()+3600, '/');
            
            echo "cookie set";

            header('location: editprofile.php');
        }
    }
    else
    {
        echo "cookie not set";
    }

?>
<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="dashBoard.php"><?=$_COOKIE['name']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<li><a href="dashBoard.php"> Dashboard </a></li>
			<li><a href="profile.php"> View Profile </a></li>
			<li><a href="editProfile.php"> Edit Profile </a> </li>
			<li><a href="picture.php"> Change Profile Picture </a></li>
			<li><a href="change_password.php"> Change Password </a></li>
			<li><a href="logout.php"> Logout </a> </li>
		</ul>
	</td>
	<td width="60%">
		<form>
            <fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" ></td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><input type="radio" name=""> Male
                    <input type="radio" name=""> Female
                    <input type="radio" name=""> Other
                </td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="email">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <fieldset>
                    <legend>Date of Birth</legend>    
                    <input type="text" size="2" name="day" >/
                    <input type="text" size="2" name="month" >/
                    <input type="text" size="3" name="year" >
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </fieldset>
            </tr>
        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</fieldset>
        </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>