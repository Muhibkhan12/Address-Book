<?php
include('../Admin/connection.php');

// Database configuration (hardcoded based on provided details)
$dbHost = "localhost"; // Provided: "localhost"
$dbUser = "root";      // Provided: "root"
$dbPass = "";          // Provided: ""
$dbName = "e-project"; // Provided: "e-project"

// Backup file details
$backupDir = 'backups/'; // Directory to store backups
if (!file_exists($backupDir)) {
    mkdir($backupDir, 0777, true);
}
$dateTime = date('Y-m-d_H-i-s'); // Format: 2025-07-09_05-03-00 (current time)
$backupFile = $backupDir . 'backup_' . $dbName . '_' . $dateTime . '.sql';

// Full path to mysqldump (adjust if XAMPP is installed in a different location)
$mysqldumpPath = 'C:\\xampp\\mysql\\bin\\mysqldump.exe'; // Windows path with double backslashes
$command = "\"$mysqldumpPath\" --host=$dbHost --user=$dbUser --password=$dbPass $dbName > \"$backupFile\"";

// Execute the command and capture output
exec($command, $output, $return_var);

if ($return_var === 0) {
    echo "Backup created successfully: $backupFile";
} else {
    echo "Error creating backup. Please check database credentials and permissions. Output: \n";
    if (!empty($output)) {
        echo implode("\n", $output);
    } else {
        echo "No output captured. Possible issues:\n";
        echo "- mysqldump not found at $mysqldumpPath. Verify the path.\n";
        echo "- Insufficient permissions to write to $backupDir.\n";
        echo "- Invalid database credentials or database does not exist.\n";
        echo "Try running this command manually in Command Prompt:\n";
        echo "$command\n";
    }
}

// Close database connection
mysqli_close($con);
?>