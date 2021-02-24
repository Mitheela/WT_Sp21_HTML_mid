<!DOCTYPE html>
<html>
<body>
<form action="http://localhost/WebTech_Lab/Submitted.php" method="post">

<table>
<tr><td><span>Username:</span>
<input type="text" placeholder="Username" name="name"></td></tr>

<tr><td><span>Password:</span>
<input type="password" placeholder="Current" name="pass"></td></tr>

<tr><td><span>Date of Birth</span>
<input type="date" name="dob"></td></tr>


<tr><td><span>Choose Gender:</span></td></tr>
<tr><td><input type="radio" value="Male" name="gendr">Male
<input type="radio" value="Female" name="gendr">Female
<input type="radio" value="Transgender" name="gendr">Transgender
<input type="radio" value="Non-binary" name="gendr">Non-binary
<input type="radio" value="Prefer not to say" name="gendr">Prefer not to say</td></tr>

<tr><td><span>Hobbies(Choose Multiple):</span></td></tr>
<tr><td><input type="checkbox" value="Reading/Writing" name="hobby[]">Reading/Writing
<input type="checkbox" value="Gardening" name="hobby[]">Gardening
<input type="checkbox" value="Painting" name="hobby[]">Painting
<input type="checkbox" value="Gaming" name="hobby[]">Gaming
<input type="checkbox" value="Stamp/Antics Collection" name="hobby[]">Stamp/Antics Collection
<input type="checkbox" value="Puzzle/Riddle Solving" name="hobby[]">Puzzle/Riddle Solving
<input type="checkbox" value="Others" name="hobby[]">Others</td></tr>

<tr><td><span>Profession:</span>
<select name="prof"><option>Student</option>
<option>Job Holder</option>
<option>Entrepreneur</option>
<option>Business</option>
<option>Homemaker</option>
<option>Defence Sector</option>
<option>Others</option></select></td></tr>
		 
<tr><td style="vertical-align:up"><span>Bio</span>
<textarea id="bio" rows="1" cols="35" name="bio" placeholder="Tell us about yourself"></textarea></td></tr>

<tr><td><input type="submit" value="Submit"></td></tr>

 </table>
 </form>
 </body>
 </html>