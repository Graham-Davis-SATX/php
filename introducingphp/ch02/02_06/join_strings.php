<?php
$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
$newLines = "\r\n\r\n";

$fullName = $firstName . ' ' . $lastName; //not efficient
//echo $fullName . '<br>';
//
$book = "$title by $author";
//echo $book;

$message = "Name: $fullName $newLines";
$message .= "Book: $book $newLines";
$message .= "Answer: $answer";
echo $message;