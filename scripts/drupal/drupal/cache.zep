namespace Drupal;

final class Cache 
{
	private static cache_objects;

	public static final function cache_get(string cid, string bin = "cache") {
		return self::_cache_get_objects(bin)->get(cid);
	}

	public static final function _cache_get_objects(string bin) {
		var classtoload;

		if !isset self::cache_objects[bin] {
			let classtoload = Bootstrap::variable_get("cache_class_" . bin);
			if empty classtoload {
				let classtoload = Bootstrap::variable_get("cache_default_class", "DrupalDatabaseCache");
			}
			let self::cache_objects[bin] = new {classtoload}(bin);
		}
		return self::cache_objects[bin];
	}
}