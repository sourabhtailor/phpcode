<?php
// Hardcoded sensitive information (DB credentials)
$DB_USERNAME = "test";
$DB_PASSWORD = "test";
$DB_HOSTNAME = "localhost";

// Unused variable
$unusedVar = "This variable is never used";

// SQL injection vulnerability (improper use of user input)
$user_input = $_GET['user_id'];  // Assuming 'user_id' comes from an untrusted source like a URL parameter
$query = "SELECT * FROM users WHERE id = '$user_input'";  // Vulnerable to SQL injection

// Potential logic bug (undefined variable)
if ($undefinedVar == "some_value") {
    echo "This will cause a notice because \$undefinedVar is not defined.";
}

// Duplicate code example
$var1 = 10;
$var2 = 20;
$var3 = 30;
echo $var1 + $var2 + $var3;  // This could be simplified, but we're simulating duplicate logic here

$var1 = 10;
$var2 = 20;
$var3 = 30;
echo $var1 + $var2 + $var3;  // Same logic as above, simulating duplicate code

// Missing security headers (for web app security)
header("Content-Type: text/html");  // Missing security headers like X-Content-Type-Options, X-Frame-Options

// Possible XSS vulnerability (unsanitized user input output)
echo "Hello " . $_GET['name'];  // The 'name' parameter should be sanitized before output to prevent XSS attacks

// Function that does nothing (unused code)
function doNothing() {
    // Does nothing
}

// Deprecated function usage
$oldFunction = "This is a deprecated function!";
echo $oldFunction;  // Example to show SonarQube should flag usage of deprecated functions (e.g., `mysql_*` functions)
?>
