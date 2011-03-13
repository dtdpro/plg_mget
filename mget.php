<?php
/**
 * MGet Content plugin for Joomla! 1.5/1.6
 * Version: 1.0
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v2.0.
 * @by DtD Productions
 * @Copyright (C) 2008-2011
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

class  plgContentMGet extends JPlugin
{
	function plgContentMGet( &$subject, $params )
	{
		parent::__construct( $subject, $params );
	}

	function onPrepareContent( &$article, &$params, $limitstart )
	{
		$app =& JFactory::getApplication();

		if($app->getName() != 'site') {
			return true;
		}

		$user = &JFactory::getUser();
		
		$uid=$user->id;
		if ($uid) {
			$username=$user->username;
			$usersname=$user->name;
			$email=$user->email;
		} else {
			$username='Guest';
			$usersname='Guest';
			$email='Guest';
			
		}
		
		//User ID
		$article->text = str_replace('{mgetuid}',$uid,$article->text);
		//Username
		$article->text = str_replace('{mgetuser}',$username,$article->text);
		//Users Name
		$article->text = str_replace('{mgetuname}',$usersname,$article->text);
		//Users Name
		$article->text = str_replace('{mgetueml}',$email,$article->text);
		
		

	}
	
	public function onContentPrepare($context, &$article, &$params, $limitstart)
	{
		$app = JFactory::getApplication();
		
		if($app->getName() != 'site') {
			return true;
		}

		
		$user = &JFactory::getUser();
		
		$uid=$user->id;
		if ($uid) {
			$username=$user->username;
			$usersname=$user->name;
			$email=$user->email;
		} else {
			$username='Guest';
			$usersname='Guest';
			$email='Guest';
			
		}
		
		//User ID
		$article->text = str_replace('{mgetuid}',$uid,$article->text);
		//Username
		$article->text = str_replace('{mgetuser}',$username,$article->text);
		//Users Name
		$article->text = str_replace('{mgetuname}',$usersname,$article->text);
		//Users Name
		$article->text = str_replace('{mgetueml}',$email,$article->text);
	}

}


?>
