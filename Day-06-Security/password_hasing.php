<?php
/**
 * 
 * Password hashing is techinue that allow that we don't store password in hash(one way ) format instead of plain text.
 */
class Hash {

    public static function make(string $value, array $options = []): string {
        $hash = password_hash($value, PASSWORD_DEFAULT, $options);
        
        if ($hash === false) {
            throw new RuntimeException('Hashing not supported or failed.');
        }
        
        return $hash;
    }

    public static function check(string $value, string $hashedValue): bool {
        return password_verify($value, $hashedValue);
    }
}


$userPasswordInput = "SuperSecret123!";
echo "User inputs password: " . $userPasswordInput . "\n";

$hashedPassword = Hash::make($userPasswordInput);

echo "Hashed password to save in DB: " . $hashedPassword . "\n\n";


$databaseHash = $hashedPassword; 

$correctAttempt = "SuperSecret123!";
echo "Attempt A: Logging in with CORRECT password ('$correctAttempt')\n";

if (Hash::check($correctAttempt, $databaseHash)) {
    echo "Login successful! User session started.\n\n";
} else {
    echo "Invalid credentials. Access denied.\n\n";
}

$wrongAttempt = "WrongPasswordPassword456!";
echo "Attempt B: Logging in with WRONG password ('$wrongAttempt')\n";

if (Hash::check($wrongAttempt, $databaseHash)) {
    echo "Login successful! User session started.\n";
} else {
    echo "Invalid credentials. Access denied.\n";
}
