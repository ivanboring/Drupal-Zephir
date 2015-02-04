<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '*public final function drupal_static(string name, var default_value = null, boolean reset = false) {
        //let self::drupal_static_data = [];
        //let self::drupal_static_default = [];
        var newname;
        var value;
        array returnarray = [];
        
        if isset this->drupal_static_data[name] || array_key_exists(name, this->drupal_static_data) {
            if reset {
                let this->drupal_static_data[name] = this->drupal_static_default[name];
            }
            let returnarray["value"] = this->drupal_static_data[name];
            let returnarray["byname"] = true;
            return returnarray;
        }

        if name {
            if reset {
                let returnarray["value"] = this->drupal_static_data;
                let returnarray["byname"] = false;
                return returnarray;
            }
            let this->drupal_static_data[name] = default_value;
            let this->drupal_static_default[name] = default_value;
            let returnarray["value"] = this->drupal_static_data[name];
            let returnarray["byname"] = true;
            return returnarray;
        }

        for newname, value in this->drupal_static_default {
            let this->drupal_static_data[newname] = value;
        }

        let returnarray["value"] = this->drupal_static_data;
        let returnarray["byname"] = false;
        return returnarray;
    }

    public static final function theme(var hook, var variables = [], var issethooks, var hooks, var theme_path, string theme_engine) {
        var returnarray = [];
        string theme_hook_original, output, render_function, extension;
        var candidate, pos, info, temp, include_file, element, name, base_hook, base_hook_info, phase, processor_function, suggestions;
        var suggestion;
        boolean ran = false;

        if is_array(hook) {
            for candidate in hook {
                let ran = true;
                if isset hooks[candidate] {
                    break;
                }
            }
            let hook = candidate;
        }
        let theme_hook_original = "" . hook;

        if !issethooks {
            echo hook . "\\n";
            while(true) {
                let pos = strrpos(hook, \'__\');
                let hook = substr(hook, 0, pos);
                if isset hooks[hook] {
                    break;
                }
                if (int) pos == 0 {
                    break;
                }
            }

            if !isset hooks[hook] {
                if ran {
                    let returnarray["error"] = true;
                }
                let returnarray["answer"] = "";
                return returnarray;
            }
        }

        let info = issethooks;
        let temp = theme_path;

        let theme_path = info["theme path"];

        if isset info["includes"] {
            for include_file in info["includes"] {
                let returnarray["include_files"][] = include_file;
            }
        }

        if isset variables["#theme"] || isset variables["#theme_wrappers"] {
            let element = variables;
            let variables = [];
            if isset info["variables"] {
                for name in array_keys(info["variables"]) {
                    if isset element["#name"] {
                        let variables[name] = element["#" . name];
                    }
                }                
            }
            else {
                let variables[info["render element"]] = element;
            }
        }

        if isset info["variables"] {
            let variables += info["variables"];
        }
        elseif isset info["render element"] {
            let variables[info["render element"]] = [];
        }

        let variables["theme_hook_original"] = theme_hook_original;        

        if isset info["base hook"] {
            let base_hook = info["base hook"];
            let base_hook_info = hook[base_hook];

            if isset base_hook_info["includes"] {
                for include_file in base_hook_info["includes"] {
                    let returnarray["include_files"][] = include_file;
                } 
            }

            if isset base_hook_info["preprocess functions"] || isset(base_hook_info["process functions"]) {
                let variables["theme_hook_suggestions"] = hook;
                let hook = base_hook;
                let info = base_hook_info;
            }
        }

        if isset info["preprocess functions"] || isset info["process functions"] {
            let variables["theme_hook_suggestions"] = [];
            for phase in ["preprocess functions", "process functions"] {
                if isset info[phase] {
                    for processor_function in info[phase] {
                        let returnarray["process"][0][] = ["hook_clone": hook, "variables": variables, "processor_function": processor_function];
                    }
                }
            }
        }

        let suggestions = [];
        if isset variables["theme_hook_suggestions"] {
            let suggestions = variables["theme_hook_suggestions"];
        }
        if isset variables["theme_hook_suggestion"] {
            let suggestions[] = variables["theme_hook_suggestion"];
        }
        for suggestion in array_reverse(suggestions) {
            if isset hooks[suggestion] {
                let info = hooks[suggestion];
                break;
            }
        }

        let output = "";
        if isset info["function"] {
            let returnarray["process"][1][] = ["variables": variables, "processor_function": info["function"]];
        }
        else {
            let render_function = "theme_render_template";
            let extension = ".tpl.php";

            if theme_engine {
                if info["type"] != "module" {
                    let returnarray["render_function"] = theme_engine . "_render_template";
                }
                let returnarray["extension_function"] = theme_engine . "_extension";
            }
        }
        let returnarray["variables"] = variables;
        let returnarray["temp"] = temp;
        let returnarray["info"] = info;
        return returnarray;
    }*',
    'file' => '/var/extensions/drupal/drupal/temp.zep',
    'line' => 175,
    'char' => 6,
  ),
);