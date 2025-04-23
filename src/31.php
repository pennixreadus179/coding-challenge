<?php
/*
 * This file is part of the CodeChallenge PHP library.
 *
 * For more information see <https://github.com/CodeChallengePHP/codechallenge>
 *
 * The CodeChallenge framework provides a set of tools to simplify and automate web development tasks in PHP. 
 * More details can be found at <https://codechallengephp.github.io/>
 */

// Define the path to your project's directory
$projectPath = "path/to/your/project";

// Check if the project directory exists, return true if it does, false otherwise
if (file_exists($projectPath)) {
    // Get all files in the project directory
    $files = scandir($projectPath);
    
    foreach ($files as $file) {
        // If the file is a .php file, generate a random PHP code snippet
        if ($file == "." || $file == ".." || preg_match('/\.(js|css)$/', $file)) continue;
        
        if (isset($_GET[$file])) {
            echo $_GET[$file] . "\n";
        } else {
            // If the file does not exist, create a blank PHP block
            echo "<div id='block-" . md5($projectPath) . "'></div>\n";
            
            // Write the code snippet to the PHP block
            $code = file_get_contents(__DIR__ . "/../resources/code/challenge_code.php");
            echo $code;
        }
    }

    // Generate a unique identifier for the project directory and create an HTML page with all files and generated code
    $uniqueId = md5($projectPath);
    $page = "<html>\n<head><title>CodeChallenge PHP Library</title></head>\n<body id='codechallenge_page' onload='generate_code_files(this)'>";
    
    // Add the unique project ID to the page
    $page .= "  <a href='#'>[Project ID]</a>";
    
    $page .= "  <div class='projects'><h1>CodeChallenge PHP Library</h1></div>\n";
    $page .= "  <ul id='codechallenge_list'></ul>\n";
    
    // Add a link to generate code files
    echo $page;
}
