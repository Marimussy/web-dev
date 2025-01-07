<section id="home" style="text-align: center; background-color: #C0E6F5;">
   <div class="row">
	   <?php
	   		//create a session for this client response
	   		session_start();
	   		if (!isset($_POST['submit']))
			{
				echo '<div class="section-title"><h3>Please Fill out the contact form below:</h3></div>';
				echo '<form action="contact.php" method="post">';
				
				// first name
				if (isset($_GET['fnameErr']))
				{
					if($_GET['fnameErr']=="null")
					{
						echo '<div class="container"> <div class="form-group has-error" id="firstNameGroup">
							<label class="control-label">First Name:</label>
							<input type="text" class="form-control" id="firstName" name="firstName">
							<span class="help-block" id="firstNameStatus">First Name cannot be blank!</span>
							  </div>';
			}
				
				elseif($_GET['fnameErr']=="invalid")
				{
							echo '<div class="form-group has-error" id="firstNameGroup">';
							echo '<label class="control-label">First Name:</label>';
							echo '<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
							echo '<span class="help-block" id="firstNameStatus">First Name contains invalid character!</span>';
							echo '</div>';
					}	  
				}
					else
					{ //success state
						if (isset ($_SESSION['firstName']))
						{
							echo '<div class="form-group has-success" id="firstNameGroup">';
							echo '<label class="control-label">First Name:</label>';
							echo '<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
							echo '<span class="help-block" id="firstNameStatus"></span>';
							echo '</div>';
					}
					else //default
							echo '<div class="form-group" id="firstNameGroup">
								<label class="control-label">First Name:</label>
								<input type="text" class="form-control" id="firstName" name="firstName">
								<span class="help-block" id="firstNameStatus"></span>
								  </div>';
					}
					
// last name
				if (isset($_GET['lnameErr']))
				{
					if($_GET['lnameErr']=="null")
					{
						echo '<div class="container"> <div class="form-group has-error" id="lastNameGroup">
							<label class="control-label">Last Name:</label>
							<input type="text" class="form-control" id="lastName" name="lastName">
							<span class="help-block" id="lastNameStatus">Last Name cannot be blank!</span>
							  </div>';
			}
				
				elseif($_GET['lnameErr']=="invalid")
				{
							echo '<div class="form-group has-error" id="lastNameGroup">';
							echo '<label class="control-label">Last Name:</label>';
							echo '<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
							echo '<span class="help-block" id="lastNameStatus">Last Name contains invalid character!</span>';
							echo '</div>';
					}	  
				}
					else
					{ //success state
						if (isset ($_SESSION['lastName']))
						{
							echo '<div class="form-group has-success" id="lastNameGroup">';
							echo '<label class="control-label">Last Name:</label>';
							echo '<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
							echo '<span class="help-block" id="lastNameStatus"></span>';
							echo '</div>';
					}
					else //default
							echo '<div class="form-group" id="lastNameGroup">
								<label class="control-label">Last Name:</label>
								<input type="text" class="form-control" id="lastName" name="lastName">
								<span class="help-block" id="lastNameStatus"></span>
								  </div>';
					}
				
		// email
				if (isset($_GET['emailErr'])) {
					if ($_GET['emailErr'] == "null") {
						echo '<div class="form-group has-error" id="emailNameGroup">
							<label class="control-label">Email Address:</label>
							<input type="text" class="form-control" id="email" name="email">
							<span class="help-block" id="emailStatus">Email cannot be blank!</span>
						</div>';
					} elseif ($_GET['emailErr'] == "invalid") {
						echo '<div class="form-group has-error" id="emailNameGroup">
							<label class="control-label">Email Address:</label>
							<input type="text" class="form-control" id="email" name="email" value="' . $_SESSION['email'] . '">
							<span class="help-block" id="emailStatus">Invalid email format!</span>
						</div>';
					}
				} else {
					// Default email 
					if (isset($_SESSION['email'])) {
						echo '<div class="form-group has-success" id="emailNameGroup">
							<label class="control-label">Email Address:</label>
							<input type="text" class="form-control" id="email" name="email" value="' . $_SESSION['email'] . '">
							<span class="help-block" id="emailStatus"></span>
						</div>';
					} else {
						echo '<div class="form-group" id="emailNameGroup">
							<label class="control-label">Email Address:</label>
							<input type="text" class="form-control" id="email" name="email">
							<span class="help-block" id="emailStatus"></span>
						</div>';
					}
				}
				
					
				// Phone number
					if (isset($_GET['phoneErr'])) {
						if ($_GET['phoneErr'] == "null") {
							echo '<div class="form-group has-error" id="phoneGroup">
								<label class="control-label">Phone Number:</label>
								<input type="text" class="form-control" id="phone" name="phone">
								<span class="help-block" id="phoneStatus">Phone number cannot be blank!</span>
							</div>';
						} elseif ($_GET['phoneErr'] == "invalid") {
							echo '<div class="form-group has-error" id="phoneGroup">
								<label class="control-label">Phone Number:</label>
								<input type="text" class="form-control" id="phone" name="phone" value="' . $_SESSION['phone'] . '">
								<span class="help-block" id="phoneStatus">Phone number must contain only digits!</span>
							</div>';
						}
					} else {
						// Default phone input field without errors
						if (isset($_SESSION['phone'])) {
							echo '<div class="form-group has-success" id="phoneGroup">
								<label class="control-label">Phone Number:</label>
								<input type="text" class="form-control" id="phone" name="phone" value="' . $_SESSION['phone'] . '">
								<span class="help-block" id="phoneStatus"></span>
							</div>';
						} else {
							echo '<div class="form-group" id="phoneGroup">
								<label class="control-label">Phone Number:</label>
								<input type="text" class="form-control" id="phone" name="phone">
								<span class="help-block" id="phoneStatus"></span>
							</div>';
						}
					}

						// Username 
						if (isset($_GET['usernameErr'])) {
							if ($_GET['usernameErr'] == "null") {
								echo '<div class="form-group has-error" id="usernameGroup">
									<label class="control-label">Username:</label>
									<input type="text" class="form-control" id="username" name="username">
									<span class="help-block" id="usernameStatus">Username cannot be blank!</span>
								</div>';
							}
						} else {
							// Default username 
							if (isset($_SESSION['username'])) {
								echo '<div class="form-group has-success" id="usernameGroup">
									<label class="control-label">Username:</label>
									<input type="text" class="form-control" id="username" name="username" value="' . $_SESSION['username'] . '">
									<span class="help-block" id="usernameStatus"></span>
								</div>';
							} else {
								echo '<div class="form-group" id="usernameGroup">
									<label class="control-label">Username:</label>
									<input type="text" class="form-control" id="username" name="username">
									<span class="help-block" id="usernameStatus"></span>
								</div>';
							}
						}

						// Password 
						if (isset($_GET['passwordErr'])) {
							if ($_GET['passwordErr'] == "null") {
								echo '<div class="form-group has-error" id="passwordGroup">
									<label class="control-label">Password:</label>
									<input type="password" class="form-control" id="password" name="password">
									<span class="help-block" id="passwordStatus">Password cannot be blank!</span>
								</div>';
							}
						} else {
							// Default password 
							if (isset($_SESSION['password'])) {
								echo '<div class="form-group has-success" id="passwordGroup">
									<label class="control-label">Password:</label>
									<input type="password" class="form-control" id="password" name="password" value="' . $_SESSION['password'] . '">
									<span class="help-block" id="passwordStatus"></span>
								</div>';
							} else {
								echo '<div class="form-group" id="passwordGroup">
									<label class="control-label">Password:</label>
									<input type="password" class="form-control" id="password" name="password">
									<span class="help-block" id="passwordStatus"></span>
								</div>';
							}
						}

					  
					echo '<div class="form-group" id="commentsGroup">
						  <label class="control-label"> Comments:</label>
						  <textarea type="text" class="form-control" id="comments"></textarea>
						  <span class="help-block" id="commentsStatus"></span>
					  </div>
					  <button class="btn btn-default" type="submit" name="submit" value="submit">Submit</button>
					 </form>';
		   
			}
	   		else //submit button has been pressed
			{
				$errors=array();
				
				//firstname
		   		$firstname=$_POST['firstName'];
				//  check for null
					if ($firstname==NULL)
						$errors[]="fnameErr=null";
					else if(preg_match('/^[a-zA-Z]+$/', $firstname)==FALSE){
						$errors[]="fnameErr=invalid";
						$_SESSION['firstName']=$firstname;
					}
					else
						$_SESSION['firstName']=$firstname;//data was not null, storrs in super global
				
				//lastname
		   		$lastname=$_POST['lastName'];
				//  check for null
					if ($lastname==NULL)
						$errors[]="lnameErr=null";
					else if(preg_match('/^[a-zA-Z]+$/', $lastname)==FALSE){
						$errors[]="lnameErr=invalid";
						$_SESSION['lastName']=$lastname;
					}
					else
						$_SESSION['lastName']=$lastname; //data was not null, storrs in super global
				
				//email
		   		$email=$_POST['email'];
					if ($email == NULL) {
						$errors[] = "emailErr=null";
					} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$errors[] = "emailErr=invalid";
						$_SESSION['email'] = $email;
					} else {
						$_SESSION['email'] = $email; //data was not null, storrs in super global
					}
				
				//phone
				$phone = $_POST['phone'];
					if ($phone == NULL) {
						$errors[] = "phoneErr=null";
					} elseif (!ctype_digit($phone)) {
						$errors[] = "phoneErr=invalid";
						$_SESSION['phone'] = $phone;
					} else {
						$_SESSION['phone'] = $phone; //data was not null, storrs in super global
					}
				
				//username
				$username = $_POST['username'];
					if ($username == NULL) {
						$errors[] = "usernameErr=null";
					} else {
						$_SESSION['username'] = $username; // Store valid username in session
					}

				//password
				$password = $_POST['password'];
					if ($password == NULL) {
						$errors[] = "passwordErr=null";
					} else {
						$_SESSION['password'] = $password; // Store valid password in session
					}

				
				if (count($errors) > 0) 
				{		
					$errorString = implode("&", $errors);
					header("Location: contact.php?$errorString");
					exit();
				} else {
					// Retrieve comments from POST data
					$comments = isset($_POST['comments']) ? $_POST['comments'] : "";
					
					// Connect to the database
					// Database connection
					include("functions.php");
					$dblink = db_connect("contact_data");
					//$slink = db_connect("sessions_data");	
				    //$link3 = db_connect("new database");			 
					if ($dblink->connect_error) {
						die("Connection failed: " . $dblink->connect_error);
					}
					
					// Insert data into the database
					$sql = "INSERT INTO `contact_info` (`first_name`, `last_name`, `email`, `phone`, `username`, `password`, `comments`) 
							VALUES ('$firstname', '$lastname', '$email', '$phone', '$username', '$password', '$comments')";

					if ($dblink->query($sql)) {
						echo '<div class="section-title"><h2>Data sent to the database!</h2></div>';
					} else {
						die("Error: " . $dblink->error);
					}

					// Close connection
					$dblink->close();


								}
			}
  
		   ?>
   </div>
</section>
	
			<h2>Contact</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum leo felis, quis porttitor elit rhoncus vitae. Quisque ante nisi, efficitur nec volutpat at, faucibus eu augue. Mauris ullamcorper iaculis tellus sed vestibulum. Maecenas elementum pretium ipsum. Aliquam venenatis erat nec mi molestie tristique. Nulla nec sapien velit. Aliquam tempus lacinia dui et auctor. Nam porta dui quam, id pretium elit ullamcorper ut. Etiam blandit condimentum maximus.</p>
				
			<img src="https://img.freepik.com/free-vector/thank-you-lettering_1262-6963.jpg" width="80" height="100" alt=""/>
			<br/>
		<td colspan="5"><a href="#top">Back to Top</a></td>

		  </div>