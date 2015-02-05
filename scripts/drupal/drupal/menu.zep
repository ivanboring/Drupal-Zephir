namespace Drupal;

final class Menu 
{
	public static final function menu_unserialize(var data, var map) {
		var k,v;

		let data = unserialize(data);
		if typeof data == "array" {
			
			for k,v in data {
				if typeof v == "integer" {
					if isset map[v] {
						let data[k] = map[v];
					}
					else {
						let data[k] = "";
					}
				}
			}
			return data;
		}
		else {
			return [];
		}
	}
}