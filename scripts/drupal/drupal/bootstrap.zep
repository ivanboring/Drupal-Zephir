namespace Drupal;

final class Bootstrap 
{
	public static final function conf_path(boolean require_settings = TRUE, boolean reset = FALSE, var conf, string drupal_root, var serverarray) {
	  if conf && !reset {
	    return conf;
	  }

	  string confdir = "sites";
	  array sites = [];
	  var uri, server;

	  if file_exists(drupal_root . "/" . confdir . "/sites.php") {
	  	include(drupal_root . "/" . confdir . "/sites.php");
	  }
	  if isset serverarray["SCRIPT_NAME"] {
	  	let uri = ZephirHelper::explode("/", serverarray["SCRIPT_NAME"]);
	  }
	  else {
	  	let uri = ZephirHelper::explode("/", serverarray["SCRIPT_FILENAME"]);
	  }

	  let uri = ZephirHelper::explode(".", join(".", array_reverse(ZephirHelper::explode(":", ZephirHelper::rtrim(serverarray["HTTP_HOST"], ".")))));
	  /*$uri = explode('/', $_SERVER['SCRIPT_NAME'] ? $_SERVER['SCRIPT_NAME'] : $_SERVER['SCRIPT_FILENAME']);
	  $server = explode('.', implode('.', array_reverse(explode(':', rtrim($_SERVER['HTTP_HOST'], '.')))));
	  for ($i = count($uri) - 1; $i > 0; $i--) {
	    for ($j = count($server); $j > 0; $j--) {
	      $dir = implode('.', array_slice($server, -$j)) . implode('.', array_slice($uri, 0, $i));
	      if (isset($sites[$dir]) && file_exists(DRUPAL_ROOT . '/' . $confdir . '/' . $sites[$dir])) {
	        $dir = $sites[$dir];
	      }
	      if (file_exists(DRUPAL_ROOT . '/' . $confdir . '/' . $dir . '/settings.php') || (!$require_settings && file_exists(DRUPAL_ROOT . '/' . $confdir . '/' . $dir))) {
	        $conf = "$confdir/$dir";
	        return $conf;
	      }
	    }
	  }
	  $conf = "$confdir/default";
	  return $conf;*/
	}

	public static final function check_plain(string text) {
		char ch;
		string output = "";

		for ch in text { 
			switch ch {
				case '\'':
					let output .= "&#039;";
					break;
				case '"':
					let output .= "&quot;";
					break;
				case '&':
					let output .= "&amp;";
					break;
				case '<':
					let output .= "&lt;";
					break;
				case '>':
					let output .= "&gt;";
					break;										
				default:
					let output .= ch;
					break;
			}
		}
		return output;
	}
}
