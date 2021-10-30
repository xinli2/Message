<?php
// Filename: message.php on the server
// With AJAX, we usually access files or a database on
// the server and then echo data to a JS function.
// We don't ned AJAX for this code that could be run in <script>
$terms = array
(
    'anime' => 'the word is anime',
    'ajax' => 'What CSC337 is learning now',
    'cool' => 'This is really cool',
    'bro' => 'My brother!!',
    'ajax' => 'What CSC337 is learning now',
    'fnord' => 'Disinformation or irrelevant information intending' .
    'to misdirect, with the implication of a conspiracy.',
);
$term = $_GET ["n"];
if (array_key_exists($term,$terms)){
    echo '<b>'.$term."</b>: ". $terms[$term];
}
else{
    echo '<b>Not Here</b>: not found in my small dictionary';
}




?>