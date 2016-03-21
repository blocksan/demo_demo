<?php
session_start();
// Facebook app settings
$app_id       = '418205805053676';
$app_secret   = '5a03672408cffd9c9c6a22f2cb6ab169';
$redirect_uri = 'http://localhost/fcbk/';
$permissions = array('publish_actions');

require_once __DIR__ . "/facebook-php-sdk-v4-4.0-dev/autoload.php";
 
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphUser;
 
 FacebookSession::setDefaultApplication( $app_id, $app_secret );
 
// Initialize the Facebook SDK.
FacebookSession::setDefaultApplication( $app_id, $app_secret );
$helper = new FacebookRedirectLoginHelper( $redirect_uri);


try {
    if ( isset( $_SESSION['access_token'] ) ) {
        // Check if an access token has already been set.
        $session = new FacebookSession( $_SESSION['access_token'] );
    } else {
        // Get access token from the code parameter in the URL.
        $session = $helper->getSessionFromRedirect();
    }
} catch( FacebookRequestException $ex ) {
 
    // When Facebook returns an error.
    echo "<br><br>validation fails";
    header('location:post.php');

} 
catch( src\Facebook\FacebookPermissionException $ex )
{	
	echo "<br><br>validation fails";
}
if ( isset( $session ) ) {
 
    // Retrieve & store the access token in a session.
    $_SESSION['access_token'] = $session->getToken();

    $request = ( new FacebookRequest( $session, 'GET', '/me' ) )->execute();
 
		// Get response as an array
		$user = $request->getGraphObject()->asArray();

		try
		{
			$request = ( new FacebookRequest( $session, 'POST', '/me/feed', array(
			    'name' => 'Facebook SDK PHP v4 — a complete guide!',
			    'caption' => 'Learn how to easily use the Facebook SDK PHP v4 library.',
			    'link' => 'http://www.cazpro.com',
			    'message' => 'Check out how to integrate Facebook with your website.'
			) ) )->execute();
		 
		// Get response as an array, returns ID of post
		
				$response = $request->getGraphObject()->asArray();
				header('location:post.php');  
				 // to redirecting user after successful share of post
		 }
		 catch( Facebook\FacebookPermissionException $ex)   // to catch the exception if user denies the permission to publish on facebook
		 {
		 	//echo "permission not given";
		 	$loginUrl = $helper->getLoginUrl( $permissions );
   			 echo '<a href="' . $loginUrl . '">post to facebook</a>';
		 }
		


} 
else
{
	$loginUrl = $helper->getLoginUrl( $permissions );
    echo '<a href="' . $loginUrl . '">post to facebook</a>';
	
		}
if(isset($_GET['error']))
{
	echo "please give us permission";
}
?>