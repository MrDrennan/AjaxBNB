<?php

$terms = array(
    'ajax'=>"Asynchronous JavaScript and XML. Ajax is a new technique for creating better, faster, and more
    interactive web applications with the help of XML, HTML, CSS, and Java Script.",
    'button'=>"a small disk, knob, or the like for sewing or otherwise attaching to an article,
    as of clothing, serving as a fastening when passed through a buttonhole or loop.",
    'database'=>'An organized collection of data, generally stored and accessed electronically from a computer system.',
    'load'=>'a heavy or bulky thing that is being carried or is about to be carried',
    'pdo'=>'PDO is an acronym for PHP Data Objects. PDO is a lean, consistent way to access databases.',
    'peanut'=>'is Yummy! Can be used to make Peanut Butter'
);

//echo 'hello world';

echo $terms[$_POST['term']];