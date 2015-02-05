namespace Drupal;

final class Bootstrap 
{
	private static conf_path_conf = "";

	public static final function conf_path(boolean require_settings = TRUE, boolean reset = FALSE, string drupal_root, var serverarray) {
	  if self::conf_path_conf && !reset {
	    return self::conf_path_conf;
	  }

	  string confdir = "sites", dir = "";
	  array sites = [];
	  var uri, server;
	  int i, j;

	  if file_exists(drupal_root . "/" . confdir . "/sites.php") {
	  	include(drupal_root . "/" . confdir . "/sites.php");
	  }
	  if isset serverarray["SCRIPT_NAME"] {
	  	let uri = ZephirHelper::explode("/", serverarray["SCRIPT_NAME"]);
	  }
	  else {
	  	let uri = ZephirHelper::explode("/", serverarray["SCRIPT_FILENAME"]);
	  }

	  let server = ZephirHelper::explode(".", join(".", array_reverse(ZephirHelper::explode(":", ZephirHelper::rtrim(serverarray["HTTP_HOST"], ".")))));
	  for i in range(ZephirHelper::count(uri), 0) {
	  	for j in range(ZephirHelper::count(server), 0) {
	  		let dir = join(".", ZephirHelper::array_slice(server, -j)) . join(".", ZephirHelper::array_slice(uri, 0, i));
	  		if isset sites[dir] && file_exists(drupal_root . "/" . confdir . "/" . sites[dir]) {
	  			let dir = sites[dir];
	  		}
	  		if file_exists(drupal_root . "/" . confdir . "/" . dir . "/settings.php") || require_settings && file_exists(drupal_root . "/" . confdir . "/" . dir) {
	  			let self::conf_path_conf = confdir . "/" . dir;
	  			return self::conf_path_conf;
	  		}
	  	}
	  }
	  let self::conf_path_conf = confdir . "/default";
	  return self::conf_path_conf;
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
