# Lesson 10: File Handling

PHP has a rich set of functions for working with files. In this lesson, you will learn how to read from and write to files on the server.

## Reading a File

There are several ways to read a file in PHP.

### `readfile()`

The `readfile()` function reads a file and writes it to the output buffer.

```php
<?php
echo readfile("webdictionary.txt");
?>
```

### `fopen()`, `fread()`, `fclose()`

The `fopen()` function gives you more control over the file. It returns a file pointer resource, which can be used by other functions to read from or write to the file.

The `fread()` function reads from an open file. The first parameter of `fread()` contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

The `fclose()` function is used to close an open file.

```php
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
```

### Reading a File Line by Line

The `fgets()` function is used to read a single line from a file.

```php
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
```

## Writing to a File

### `fwrite()`

The `fwrite()` function is used to write to a file. The first parameter of `fwrite()` contains the name of the file to write to and the second parameter is the string to be written.

```php
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
```

**File Open Modes:**

- `r`: Read only.
- `w`: Write only. Opens and clears the contents of file; or creates a new file if it doesn't exist.
- `a`: Append. Opens and writes to the end of the file or creates a new file if it doesn't exist.
- `x`: Creates a new file for write only. Returns FALSE and an error if file already exists.
- `r+`: Read/Write.
- `w+`: Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist.
- `a+`: Read/Append. Opens and writes to the end of the file or creates a new file if it doesn't exist.
- `x+`: Creates a new file for read/write. Returns FALSE and an error if file already exists.

### `file_put_contents()`

The `file_put_contents()` function is a simpler way to write to a file. It is equivalent to calling `fopen()`, `fwrite()`, and `fclose()` successively.

```php
<?php
$file = 'people.txt';
// The new person to add to the file
$person = "John Smith\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
?>
```

## Next Lesson

In the next lesson, you will learn how to handle errors in your PHP scripts.
