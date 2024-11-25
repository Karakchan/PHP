<?php

$fullname = "U Kyaw";
$job = "developer";

echo $fullname;
print $job;

echo "$fullname";
print "$job";

echo "My name is $fullname"; //My name is U Kyaw
echo 'My name is $fullname'; //My name is $fullname
echo "My name is ${fullname}"; //My name is U Kyaw
echo "My name is {$fullname}"; //My name is U Kyaw

echo `My name is ${fullname}`; //errer My name is $fullname


echo "He's my father, he is a $job"; //He's my father, he is a Developer
echo "He's my father, he is a \$job"; //He's my father, he is a $job
echo 'He\'s my father, he is a $job';  //He's my father, he is a $job
echo "He's my fater, he is a \${job}"; // He's my father, he is a ${job}
echo "he's my father, he is a \{$job}" //he's my father, he is \{Developer}
echo "he's my father, he is a {\$job}" //he is my father, he is a ${job}

$gender = echo "female"; //error
$nation = print "Burma";  //burma

// Concat(.)

$firstname = "Kyaw";
$lastname = "Oo";

echo $firstname.$lastname;
echo $firstname.' '.$lastname;

//comments
# Single Line Comment

/* Multi Line Comment
comment 1
comment 2
comment 3 */

?>
