<?php
function greeting ($name){
    echo "<p>Hi, my name is $name </p>";
} 

$names = array('Emily','Yingyao','Miao');
$hobby = array('swimming','bouldering','scuba diving');
$count = 0;


while($count < count($names)){
    greeting($names[$count]);
    $count++;
}

?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
<p>I like <?php echo $hobby[0] ?></p>