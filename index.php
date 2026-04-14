<?php
$errors = ""; // this holds the multiple errors that may happen during execution
$message = ""; // this holds the success message when login is successful

function login($email, $password) {
    global $errors, $message;
    // dummy credentials
    $userEmail = "admin@admin.com";
    // this will be hashed in the actual database
    $hashedPassword = password_hash("admin123", PASSWORD_DEFAULT);

    // use password_verify to compare the hashed password and the input
    if ($email === $userEmail && password_verify($password, $hashedPassword)) {
        // instead of using echo to display code blocks, use a variable
        // to hold the message values.
        $message = "Login Successful! Welcome admin!";
    } else {
        $errors = "Invalid email or password.";
    }
}

function myMessage() {
    echo "Hello World!";
}

function sayHello($name = "Person") { // parameters = definition of functions
    // Short Description:
    // returns a greeting based on the person's name
    // Parameters:
    // string $name: name of the person. Defaults to "Person"
    // Return Value:
    // Hello {name of the person}! Defaults to Hello Person!
    return "Hello $name!";
}

// use the $_SERVER superglobal to check for the request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // use htmlspecialchars to parse the email (this avoids XSS)
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    login($email, $password);
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    echo sayHello("Kyle"); // arguments = during the calling of function
    echo sayHello("James");
    echo sayHello("Bermoy");
    echo sayHello("Paras");
    echo sayHello("Paulo");
    echo sayHello();
}
?>

<!-- LOGIC MUST BE ON TOP (THE BULK OF YOUR PHP CODE) -->
<!-- SEPARATE YOUR CODE -->
<!-- INTERFACE (FRONTEND) SHOULD BE ON THE BOTTOM (PHP/HTML BLOCKS) -->

<!DOCTYPE html>
<html>
<head>
    <title>Example App</title>
</head>
<body>

<h1>Login</h1>

<!-- PHP/HTML block -->
<?php if (!empty($message)): ?> 
    <!-- use this syntax to refer variables -->
    <p style="color:green;"><?= $message ?></p>
<?php endif; ?>
<!-- END OF BLOCK -->

<!-- PHP/HTML block -->
<?php if (!empty($errors)): ?> 
    <!-- use this syntax to refer variables -->
    <p style="color:red;"><?= $errors ?></p>
<?php endif; ?>
<!-- END OF BLOCK -->

<form method="POST">
    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="test">Submit</button>
</form>

</body>
</html>