<?php 
/*
====================================================
PHP FILE SYSTEM (FILES & DIRECTORIES) — FULL SUMMARY
====================================================

1) WHAT IS FILE SYSTEM IN PHP?
- PHP File System allows interaction with files and folders.
- Used to read, write, create, delete, upload, and manage files.
- Common use cases: logs, uploads, configs, caching, backups.

----------------------------------------------------

2) FILE PATHS
- Absolute Path: full path from root.
  Example: /home/user/project/file.txt
- Relative Path: path relative to current script.
  Example: file.txt, files/data.txt, ../config.php

----------------------------------------------------

3) CHECK FILE & DIRECTORY EXISTENCE
- file_exists(): checks if file or directory exists.
  Example: file_exists("data.txt")

- is_file(): checks if path is a file.
  Example: is_file("data.txt")

- is_dir(): checks if path is a directory.
  Example: is_dir("uploads")

----------------------------------------------------

4) FILE INFORMATION
- filesize(): returns file size in bytes.
  Example: filesize("data.txt")

- filetype(): returns "file" or "dir".
  Example: filetype("data.txt")

- fileperms(): returns file permissions.
  Example: fileperms("data.txt")

----------------------------------------------------

5) READING FILES (MOST IMPORTANT)
- file_get_contents(): reads entire file at once.
  Example:
    $content = file_get_contents("data.txt");

- fopen() + fread(): read with more control.
  Example:
    $file = fopen("data.txt", "r");
    $content = fread($file, filesize("data.txt"));
    fclose($file);

- fgets(): read file line by line.
  Example:
    while (!feof($file)) {
        echo fgets($file);
    }

----------------------------------------------------

6) WRITING TO FILES
- file_put_contents(): easiest way to write.
  Example:
    file_put_contents("data.txt", "Hello PHP");

- Append to file:
    file_put_contents("data.txt", "New Line\n", FILE_APPEND);

----------------------------------------------------

7) fopen() MODES
- r  : read only
- w  : write (overwrite)
- a  : append
- r+ : read/write
- w+ : read/write (overwrite)
- a+ : read/write (append)

Example:
  $file = fopen("data.txt", "a");
  fwrite($file, "Hello\n");
  fclose($file);

----------------------------------------------------

8) CREATE & DELETE FILES
- Create file:
  fopen("new.txt", "w");

- Delete file:
  unlink("new.txt");

----------------------------------------------------

9) DIRECTORIES (FOLDERS)
- mkdir(): create directory.
  Example:
    mkdir("uploads");

- Create nested directories:
    mkdir("files/images", 0777, true);

- rmdir(): remove directory (must be empty).
  Example:
    rmdir("uploads");

----------------------------------------------------

10) SCAN DIRECTORIES
- scandir(): returns array of files.
  Example:
    $files = scandir("uploads");
    // Returns: . .. file.txt image.png

----------------------------------------------------

11) RENAME & MOVE FILES
- rename(): rename or move file.
  Example:
    rename("old.txt", "new.txt");
    rename("file.txt", "backup/file.txt");

----------------------------------------------------

12) COPY FILES
- copy(): duplicates file.
  Example:
    copy("data.txt", "data_copy.txt");

----------------------------------------------------

13) FILE UPLOAD (BASIC IDEA)
- move_uploaded_file(): move uploaded file.
  Example:
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/file.jpg");

----------------------------------------------------

14) FILE PERMISSIONS (LINUX)
- chmod(): change permissions.
  Example:
    chmod("data.txt", 0644);

- Common permissions:
  777 → full access
  755 → directories
  644 → files

----------------------------------------------------

15) FILE LOCKING
- Prevents multiple scripts writing at same time.
  Example:
    flock($file, LOCK_EX);
    fwrite($file, "Safe Write");
    flock($file, LOCK_UN);

----------------------------------------------------

16) INCLUDE & REQUIRE (FILES)
- include(): warning if file missing.
- require(): fatal error if missing.

Example:
  include "config.php";
  require "database.php";

----------------------------------------------------

17) REAL-WORLD EXAMPLES
- Logging:
  file_put_contents(
    "log.txt",
    date("Y-m-d H:i:s") . " User logged in\n",
    FILE_APPEND
  );

- Read JSON config:
  $data = json_decode(file_get_contents("config.json"), true);

- Delete file safely:
  if (file_exists("old.txt")) {
      unlink("old.txt");
  }

----------------------------------------------------

18) MOST IMPORTANT FUNCTIONS
- file_exists
- file_get_contents
- file_put_contents
- fopen / fwrite / fclose
- unlink
- mkdir / rmdir
- scandir
- rename
- copy

----------------------------------------------------

FINAL NOTES:
- Always close files after opening.
- Check permissions before writing.
- Validate file uploads.
- File system is core skill for backend & Laravel.

====================================================
END OF PHP FILE SYSTEM SUMMARY
====================================================
*/
