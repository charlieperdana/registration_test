


<?php

/* @var $this yii\web\View */
use common\models\User;


$this->title = 'GO-JEK Test';
?>

 <?php
   

    if (Yii::$app->user->isGuest) {
    	 
    	 echo('<div class="site-index">');

    echo('<div class="jumbotron">');
        echo('<h1>Welcome to GO-JEK Test!!!</h1>');

        echo('<p class="lead">Please Sign Up or Login</p>');

        echo('<p><a class="btn btn-lg btn-success" href="http://localhost/gojek/frontend/web/index.php?r=site%2Fsignup">Sign Up</a> or'); 
           echo(' <a class="btn btn-lg btn-success" href="http://localhost/gojek/frontend/web/index.php?r=site%2Flogin">Login</a>');
       echo('</p>') ;
    echo('</div>');

    
echo('</div>');
        
    } else {
        $username= Yii::$app->user->identity->username;
        echo('<div class="site-index">');

    echo('<div class="jumbotron">');
        echo('<h1>Welcome to GO-JEK Test!!!</h1>');

        echo('<p class="lead">Hello '.$username.'!!!</p>');
        echo('<p class="lead">Please Enjoy to Explore our Web.</p>');

         echo('</p>') ;
    echo('</div>');

    
echo('</div>');
    }

?>