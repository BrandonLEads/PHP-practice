<?php
echo preg_match("/^food/", "My food was great"), '<br />'; // returns false
echo preg_match("/^food/", "food is always on my brain"), '<br /><br />'; // returns true
?>

<?php
echo preg_match("/food$/", "That was some great food"), '<br />'; // returns true
echo preg_match("/food$/", "I don't let food go to waste"), '<br /><br />'; // returns false
?>

<?php
echo preg_match("/l.o/", "limo"), '<br />'; // returns false
echo preg_match("/c.n/", "c n"), '<br />'; // returns true
echo preg_match("/c.t/", "c_t"), '<br />'; // returns true
echo preg_match("/o.t/", "octet"), '<br />'; // returns true
echo preg_match("/a.a/", "austria"), '<br /><br />'; // returns false
?>

<?php
echo preg_match("/\$/", "It is all about the $"), '<br />'; // returns true
echo preg_match("/my $/", "It is my $"), '<br /><br />'; // returns false
?>

<?php
echo preg_match("/l[aeiou]t/", "I lost my wallet"), '<br />'; // returns true
echo preg_match("/t[aeiou]s/", "I tossed out the trash"), '<br />'; // returns true
echo preg_match("/a[aeiou]t/", "What about me?"), '<br />'; // returns false
echo preg_match("/n[aeiou]t/", "not today"), '<br /><br />'; // returns true
?>

<?php
echo preg_match("/l[^aeiou]t/", "I lost my wallet"), '<br />'; // returns false
echo preg_match("/t[^aeiou]t/", "That is not the case"), '<br />'; // returns true
echo preg_match("/a[^aeiou]t/", "I was about to do that"), '<br /><br />'; // returns false
?>

<?php
echo preg_match("/[0-9]%/", "I am at about 90% toward the end of my degree "), '<br />'; // returns true
echo preg_match("/[0123456789]%/", "We are at about 15%"), '<br />'; // returns true
echo preg_match("/[a-z]t/", "what"), '<br />'; // returns true
echo preg_match("/[a-z]t/", "not"), '<br />'; // returns true
echo preg_match("/[a-z]t/", "Knot"), '<br />'; // returns false
echo preg_match("/[a-zA-Z]!/", "what!"), '<br />'; // returns true
echo preg_match("/[a-zA-Z]!/", "55!"); // returns false
?>

