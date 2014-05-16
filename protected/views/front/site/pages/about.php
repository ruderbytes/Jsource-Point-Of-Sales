<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="About Us | ".$files->name_of_website;
endforeach;
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

