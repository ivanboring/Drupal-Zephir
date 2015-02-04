namespace Drupal;

final class ZephirHelper 
{
	public static final function unserialize(string data) {
		char ch;
		boolean ismaster = false;
		string lookfor = "";
		int tonext = 0;

		for ch in data {
			if ismaster == false {
				switch(ch) {
					// Object
					case 'O':

						break;
					// Array
					case 'a':

						break;
					// Float
					case 'd':

						break;
					// Boolean
					case 'b':

						break;
					// Integer
					case 'i':

						break;
					// String
					case 's':

						break;
					// None
					case 'N':

						break;
				}
			}
		}
	}
}