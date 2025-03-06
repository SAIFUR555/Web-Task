<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="submit_registration.php" method="post">

        <!-- Full Name -->
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" required placeholder="Enter your Full name"><br><br>

        <!-- Email Address -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required placeholder="Enter your email address"><br><br>

        <!-- Phone Number -->
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" pattern="" placeholder="123" required><br><br>

        <!-- Date of Birth -->
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>

        <!-- Present Address -->
        <label for="present_address">Present Address:</label><br>
        <textarea id="present_address" name="present_address" rows="4" cols="50" placeholder="Enter your present address" required></textarea><br><br>

        <!-- Permanent Address -->
        <label for="permanent_address">Permanent Address:</label><br>
        <textarea id="permanent_address" name="permanent_address" rows="4" cols="50" placeholder="Enter your permanent address" required></textarea><br><br>

        <!-- Guardian Information -->
        <h3>Guardian Information</h3>

        <!-- Guardian's Name -->
        <label for="guardian_name">Guardian's Name:</label><br>
        <input type="text" id="guardian_name" name="guardian_name" required placeholder="Enter your guardian's name"><br><br>

        <!-- Guardian's Phone Number -->
        <label for="guardian_phone">Guardian's Phone Number:</label><br>
        <input type="tel" id="guardian_phone" name="guardian_phone" pattern="" placeholder="123" required><br><br>

        <!-- Relationship with Guardian -->
        <label for="relationship">Relationship with Guardian:</label><br>
        <input type="text" id="relationship" name="relationship" required placeholder="Enter your relationship with guardian"><br><br>

        <!-- Password -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required placeholder="Enter your password"><br><br>

        <!-- Confirm Password -->
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password"><br><br>

        <!-- Course Selection -->
        <label for="course">Select Course:</label><br>
        <select id="course" name="course" required>
            <option value="c++">C++</option>
            <option value="java">Java</option>
            <option value="html">HTML</option>
            <option value="python">Python</option>
            <option value="javascript">JavaScript</option>
        </select><br><br>

        <!-- Gender -->
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <!-- Terms & Conditions -->
        <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the <a href="#">terms and conditions</a>.
        </label><br><br>

        <!-- Submit Button -->
        <input type="submit" value="Register">
    </form>
</body>
</html>
