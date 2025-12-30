<?php 
/*
========================================================
PHP COOKIES & SESSIONS — COMPLETE SUMMARY (WITH EXAMPLES)
========================================================

--------------------------------------------------------
1) WHAT IS A COOKIE?
--------------------------------------------------------
- Cookie = small data stored on the USER BROWSER
- Sent from server → stored in browser → sent back with every request
- Has expiration time
- NOT secure (user can see & modify it)

Uses:
- Remember user preferences
- Login "remember me"
- Language, theme, settings

--------------------------------------------------------
2) CREATE A COOKIE — setcookie()
--------------------------------------------------------
Syntax:
setcookie(name, value, expire, path, domain, secure, httponly);

Basic Example:
setcookie("user", "Ali", time() + 3600); // 1 hour

IMPORTANT:
- Must be set BEFORE any output (HTML, echo)
- Uses UNIX timestamp for expiration

--------------------------------------------------------
3) READ A COOKIE
--------------------------------------------------------
Cookies are stored in $_COOKIE (superglobal array)

Example:
echo $_COOKIE["user"]; // Ali

Check if cookie exists:
if (isset($_COOKIE["user"])) {
    echo "Cookie exists";
}

--------------------------------------------------------
4) DELETE A COOKIE
--------------------------------------------------------
To delete → set expiration time in the past

Example:
setcookie("user", "", time() - 3600);

--------------------------------------------------------
5) COOKIE PATH & SECURITY FLAGS
--------------------------------------------------------
Path: what is the path that need this cookie used?? 
setcookie("user", "Ali", time()+3600, "/");

Secure (HTTPS only): used with https only
setcookie("user", "Ali", time()+3600, "/", "", true);

HttpOnly : used with http only
setcookie("user", "Ali", time()+3600, "/", "", false, true);

Domain : what is the domins that need this cookie shared with it ??

--------------------------------------------------------
6) COOKIE LIMITATIONS
--------------------------------------------------------
- Max size ≈ 4KB
- Max ~20 cookies per domain
- Not suitable for sensitive data
- User can disable cookies

========================================================
SESSIONS
========================================================

--------------------------------------------------------
7) WHAT IS A SESSION?
--------------------------------------------------------
- Session = data stored on SERVER
- User is identified by SESSION ID
- Session ID stored in cookie (PHPSESSID)
- More secure than cookies

Uses:
- Login systems
- Shopping carts
- User authentication
- Sensitive data

--------------------------------------------------------
8) START A SESSION — session_start()
--------------------------------------------------------
MUST be called before any output

Example:
session_start();

--------------------------------------------------------
9) SET SESSION VARIABLES
--------------------------------------------------------
Stored in $_SESSION superglobal

Example:
$_SESSION["user"] = "Ali";
$_SESSION["role"] = "admin";

--------------------------------------------------------
10) READ SESSION VARIABLES
--------------------------------------------------------
Example:
echo $_SESSION["user"]; // Ali

Check existence:
if (isset($_SESSION["user"])) {
    echo "User logged in";
}

--------------------------------------------------------
11) UPDATE SESSION DATA
--------------------------------------------------------
Example:
$_SESSION["user"] = "Ahmed";

--------------------------------------------------------
12) DELETE SESSION VARIABLES
--------------------------------------------------------
Remove one variable:
unset($_SESSION["user"]);

Remove all session variables:
session_unset();

--------------------------------------------------------
13) DESTROY SESSION COMPLETELY
--------------------------------------------------------
Ends session & removes session ID

Example:
session_destroy();

NOTE:
- Does NOT unset $_SESSION array automatically
- Usually combined with session_unset()

--------------------------------------------------------
14) SESSION LIFETIME
--------------------------------------------------------
Controlled by PHP settings:
- session.gc_maxlifetime
- session.cookie_lifetime

Example (set manually):
ini_set("session.gc_maxlifetime", 3600);

--------------------------------------------------------
15) COOKIE VS SESSION (IMPORTANT)
--------------------------------------------------------
Cookie:
- Stored on browser
- Less secure
- Has expiration
- Small size

Session:
- Stored on server
- More secure
- Ends when browser closes (default)
- Larger data allowed

--------------------------------------------------------
16) COMMON LOGIN EXAMPLE
--------------------------------------------------------
session_start();

if ($username == "admin") {
    $_SESSION["logged_in"] = true;
}

Protect page:
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}

--------------------------------------------------------
17) BEST PRACTICES
--------------------------------------------------------
- Never store passwords in cookies
- Always use sessions for authentication
- Use HTTPS with cookies
- Regenerate session ID after login

Example:
session_regenerate_id(true);

--------------------------------------------------------
18) SUPERGLOBALS USED
--------------------------------------------------------
$_COOKIE   → cookies data
$_SESSION  → session data

========================================================
FINAL SUMMARY
========================================================
- Cookies = client-side storage
- Sessions = server-side storage
- Cookies are less secure
- Sessions are best for login systems
- session_start() is mandatory
- setcookie() must be before output

========================================================
END OF SUMMARY
========================================================
*/

setcookie("token", "usertoken", time() + 60 * 60 * 24 * 7, "/");
echo $_COOKIE["token"];