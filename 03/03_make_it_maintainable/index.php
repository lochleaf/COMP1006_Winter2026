<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?

My Comment:

I learned how to include other files and separate PHP logic from HTML
so the code is easier to maintain and does not affect scalability.

*/

$items = ["Home", "About", "Contact"];
include "header.php"; ?>


<h1>Welcome</h1>

<ul>
<?php foreach ($items as $item): ?>
    <li><?= $item ?></li>
<?php endforeach; ?>
</ul>

<?php include "footer.php"; ?>
