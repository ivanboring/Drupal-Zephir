namespace Drupal;

final class Theme 
{
	public final static function drupal_find_base_themes(var themes, string key, array used_keys = []) {
		var base_key, current_base_theme, temp;

		let base_key = themes[key]->info["base theme"];

		if !isset themes[base_key] {
			return [base_key: null];
		}

		let current_base_theme = [base_key: themes[base_key]->info["name"]];
		let temp = themes[base_key]->info;
		if isset temp["base theme"] {
			if isset themes[base_key]->base_themes {
				// TODO: Array merge needed?
				return themes[base_key]->base_themes + current_base_theme;
			}

			if !empty used_keys[base_key] {
				return [base_key: null];
			}
			let used_keys[base_key] = true;
			return self::drupal_find_base_themes(themes, base_key, used_keys) + current_base_theme;
		}
		return current_base_theme;
	}
}