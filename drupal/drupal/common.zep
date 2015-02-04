namespace Drupal;

final class Common
{
    /*
    public drupal_static_data = null;
    public drupal_static_default = null;
    private static instance;

    public static final function getInstance() {
        if self::instance == null {
            let self::instance = new self;
        }

        return self::instance;
    }

	/*
	 * Around 40% slower than core, not implemented
	 */
	public static final function drupal_add_region_content(string region = NULL, var data = NULL, array content) {
		if !empty region && !empty data {
			let content[region] = data;
		}
		return content;
	}

	/*
	 * Around 40% slower than core, not implemented
	 */
	public static final function drupal_get_region_content(string region = NULL, string delimiter = " ", array content) {
		var tempregion;

		if !empty region {
			if isset content[region] && is_array(content[region]) {
				return implode(delimiter, content[region]);
			}
		}
		else {
			for tempregion in array_keys(content) {
				if is_array(content[tempregion]) {
					let content[tempregion] = implode(delimiter, content[tempregion]);
				}
			}
		}
		return content;
	}

	/*
	 * Around 30% faster than core
	 */
	public static final function drupal_get_query_parameters(array query = NULL, array exclude = ["q"], parent = "", array getarray = [])
	{
		var key;
		var value;
		string string_key;

		if empty query {
			let query = getarray;
		}

		if empty exclude {
			return query;
		}
		elseif empty parent {
			let exclude = array_flip(exclude);
		}

		array params = [];
		for key, value in query {
			if empty parent {
				let string_key = "" . key;
			} else {
				let string_key = parent . "[" . key . "]";
			}

			if isset exclude[string_key] {
				continue;
			}

			if is_array(value) {
				let params[key] = self::drupal_get_query_parameters(value, exclude, string_key, getarray);
			}
			else {
				let params[key] = value;
			}
		}

		return params;
	}

	/*
	 * Around 35% faster than core
	 */
	public static final function drupal_get_query_array(string query) {
		array result = [];
		var param;
		if !empty query {
			for param in explode("&", query) {
				let param = explode("=", param, 2);
				if isset param[1] {
					let result[param[0]] = rawurldecode(param[1]);
				}
				else {
					let result[param[0]] = "";
				}
			}
		}
		return result;
	}

    public static final function doExplode(string delimiter, string realstring) {

    }

	/*
	 * Around 35% faster than core
	 */
    public static final function drupal_http_build_query(array query, string parent = "")
    {
    	array params = [];
		var key;
		var value;

        for key, value in query {
        	if parent {
        		let key = parent . "[" . rawurlencode(key) . "]";
        	} else {
        		let key = rawurlencode(key);
        	}

        	if is_array(value) {
        		let params[] = self::drupal_http_build_query(value, key);
        	}
        	elseif empty value {
        		let params[] = key;
        	}
        	else {
        		string start = "";
        		let start = key . "=";
        		let params[] = start . str_replace("%2F", "/", rawurlencode(value));
        	}
        }
        return implode("&", params);
    }

    /*
     * Around 100% slower than core, so not implemented :)
     */
    public static final function drupal_get_destination(var $destination) {
    	string path;
    	string query;

    	if !empty destination {
    		return destination;
    	}

    	if fetch destination, _GET["destination"] {
    	}
    	else {
    		let path = "" . _GET["q"];
    		let query = "" . self::drupal_http_build_query(self::drupal_get_query_parameters(NULL, ["q"], "", _GET));
    		if (query != "") {
    			let path .= "?" . query;
    		}
    		let destination = ["destination": path];
    	}
    	return destination;
    }

	/*
	 * Around 25% faster than core
	 */
    public static final function drupal_parse_url(string url) {
    	array queryoptions = [];
    	array options = ["path": NULL, "fragment": ""];
    	var parts;
    	var queryparts;
	    var fragment;

    	if strpos(url, "://") !== false {
    		let parts = explode("?", url);
    		let options["path"] = parts[0];

    		if isset parts[1] {
    			let queryparts = explode("#", parts[1]);
    			parse_str(queryparts[0], queryoptions);

    			if isset queryparts[1] {
    				let options["fragment"] = queryparts[1];
    			}
    		}
    	}
    	else {
    		let parts = parse_url("http://example.com/" . url);
    		let options["path"] = substr(parts["path"], 1);
    		if isset parts["query"] {
    			parse_str(parts["query"], queryoptions);
    		}

    		if fetch fragment, parts["fragment"] {
    			let options["fragment"] = fragment;
    		}
    	}
    	let options["query"] = queryoptions;
    	
    	if isset options["query"]["q"] {
    		let options["path"] = options["query"]["q"];
    		unset(options["query"]["q"]);
    	}

    	return options;
    }

    // drupal_encode_path is more or less native, so not implemented

	/*
	 * Around 100% slower than core, so not implemented
	 */
    public static final function drupal_goto(string path = "", array options = [], int http_response_code = 302) {
    	/*string url;
    	var destination;
    	array reference = [];

    	if fetch destination, _GET["destination"] && !url_is_external(destination) {
    		let destination = drupal_parse_url(destination);
    		let path = "" . destination["path"];
    		let options["query"] = destination["query"];
    		let options["fragment"] = destination["fragment"];
    	}

    	let reference[] = path;
    	//drupal_alter("drupal_goto", reference, options, http_response_code);

    	let options["absolute"] = true;


    	header("Location: " . path, true, http_response_code);

    	//drupal_exit(path);*/
    }

    // drupal_site_offline is more or less native, so not implemented
    // drupal_not_found is more or less native, so not implemented
    // drupal_access_denied is more or less native, so not implemented
    // drupal_http_request and helper functions should be turned into curl, to long for this experiment to fix
    // _fix_gpc_magic* are more or less native, so not implemented
    // flood_* are more or less native so not implemented

    /*
     * Around 15% slower, so not implemented;
     */
    public static final function drupal_strip_dangerous_protocols(string uri, var allowed_protocols = []) {
    	string tempuri = "";
        string returnuri = "";
        char ch;
        boolean foundcolon = false;
        boolean allok = false;

        let uri = strtolower(uri);

        for ch in uri {
            if allok {
                let returnuri .=  ch;
            }
            elseif ch == '?' || ch == '#' || ch == '/' {
                if foundcolon == true {
                    if isset allowed_protocols[tempuri] {
                        let returnuri .= tempuri . ":";
                        let tempuri = "";
                    } else {
                        let tempuri = "";
                    }
                    let foundcolon = false;
                } else {
                    let allok = true;
                }
                let returnuri .= ch;
            }
            elseif ch != ':' {
                if foundcolon == true {
                    if !isset allowed_protocols[tempuri] {
                        let tempuri = "";
                    }
                    let foundcolon = false;
                }
                let tempuri .= ch; 
            }
            else {
                let foundcolon = true;
            }
        }
        let returnuri .= tempuri;
        return returnuri;
        /*
    	while(true) {
    		let before = uri;
    		let colonpos = strpos(uri, ":");
    		if colonpos > 0 {
    			let protocol = substr(uri, 0, colonpos);

    			if(preg_match("![/?#]!", protocol)) {
    				break;
    			}

    			if !isset allowed_protocols[strtolower(protocol)] {
    				let uri = substr(uri, (colonpos + 1));
    			}
    		}
    		if(before == uri) {
    			break;
    		}
    	}

    	return uri;*/
    }
    
    
    // check_url() is more or less native, so not implemented
    // filter_xss_admin() is more or less native, so not implemented

    // valid_email() is more or less native, so not implemented
    // valid_url() is more or less native, so not implemented

    public static function drupal_attributes(array attributes) {
        var attribute, data;
        
        for attribute, data in attributes {
            if typeof data == "array" {
                let data = join(" ", data);
            }
            let data = attribute . "=\"" . Bootstrap::check_plain(data) . "\"";
            let attributes[attribute] = data;
        }

        if typeof attributes == "array" {
            return " " . join(" ", attributes);
        }
        return "";
    }

}
