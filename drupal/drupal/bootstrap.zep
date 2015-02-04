namespace Drupal;

final class Bootstrap 
{
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