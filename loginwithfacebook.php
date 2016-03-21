<?php
// Must pass session data for the library to work (only if not already included in your app).
session_start();
// Facebook app settings
$app_id       = '418205805053676';
$app_secret   = '5a03672408cffd9c9c6a22f2cb6ab169';
$redirect_uri = 'http://localhost/cazpro/login.php';
 
// Requested permissions for the app - optional.
$permissions = array('email');
 

// Define the root directoy.
 
// Autoload the required files
require_once __DIR__ . "facebook_login/facebook-php-sdk-v4-4.0-dev/autoload.php";
 
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphUser;
 
// Initialize the SDK.
FacebookSession::setDefaultApplication( $app_id, $app_secret );
 
// Initialize the Facebook SDK.
FacebookSession::setDefaultApplication( $app_id, $app_secret );
$helper = new FacebookRedirectLoginHelper( $redirect_uri);

 
// Authorize the user.

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
    print_r( $ex );
} catch( Exception $ex ) {
 
    // When validation fails or other local issues.
    print_r( $ex );
}
//unset($session);
if ( isset( $session ) ) {
 
    // Retrieve & store the access token in a session.
    $_SESSION['access_token'] = $session->getToken();
 	echo $_SESSION['access_token']."<BR><br>";
  // $logoutURL = $helper->getLogoutUrl( $session,"www.cazpro.com");
 	
    // Logged in
    echo 'Successfully logged in! === >>   <a href="log.php">Logout</a><br>';

    $request = ( new FacebookRequest( $session, 'GET', '/me' ) )->execute();
 
		// Get response as an array
		$user = $request->getGraphObject()->asArray();
		$_SESSION['FBID']=$user["id"];
		echo '<li><img src="https://graph.facebook.com/'.$_SESSION['FBID'].'/picture?type=large"></li><br>';
		print_r($user);
		echo "<br><br>";
		echo $user["email"];

		/*$request = ( new FacebookRequest( $session, 'GET', '/me/picture?type=large&redirect=false' ) )->execute();
 
		// Get response as an array
		$picture = $request->getGraphObject()->asArray();
		 
		print_r( $picture );

		echo "<br><br><Br><Br>";*/


	/*	// Publish to User’s Timeline
		$request = ( new FacebookRequest( $session, 'POST', '/me/feed', array(
		  'message' => 'I love articles on benmarshall.me!'
		) ) )->execute();
		 
		// Get response as an array, returns ID of post
		$response = $request->getGraphObject()->asArray();
		 
		print_r( $response );
		 
		*/
	// Graph API to publish to timeline with additional parameters
		header('location:login.php');






} 

else {
 
    // Generate the login URL for Facebook authentication.
     $loginUrl = $helper->getLoginUrl( $permissions );
    echo '<a href="' . $loginUrl . '">Login</a>';
}