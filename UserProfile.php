<?php 
include_once 'header.php';
?>
<div class="body-image2">
    <section class="signup-form">
        <form action ="includes/UserProfile.inc.php" method="post">
		
		<table>
		
				
				<tr><td><h1>Profile </h1></tr></td>
				
				<div>
				<tr><td><label class="form-label" > Profile Picture </label></tr></td>
				<tr><td><input type="file" name="pass"><tr><td>
				</div>
				
				
				<tr><td>First Name: </tr></td>				
				
				
				<tr><td> Last Name: </tr></td>
				
				<tr><td>UserName: </tr></td>

				
				<tr><td>E-mail: </tr></td>
		
				<tr><td>Password: </tr></td>
				
				<tr><td><button type="submit" name="submit">Edit Profile</button>
						
				
		</table>		
        </form>
		
<?php 
include_once 'footer.php';
?>