namespace Drupal;

final class ZephirHelper 
{
	public static final function explode(string delimiter, string realstring) {
		char ch;
		array output = [];
		string tempstring = "";
		string keystring = "";
		int length = 0;
		int tempindex = 1;

		let length = strlen(delimiter);
		for ch in realstring {
			// We found a match
			if ch == delimiter[tempindex] && length == tempindex {
				let output[] = tempstring;
				let tempstring = "";
				let tempindex = 1;
			}
			// We are starting to find something
			elseif ch == delimiter[tempindex] && length < tempindex {
				let tempindex++;
				let keystring .= ch;
			}
			// It was not correct
			elseif tempindex > 1 {
				let tempindex = 1;
				let tempstring .= keystring;
				let tempstring .= ch;
				let keystring = "";
			}
			// Normal character
			else {
				let tempstring .= ch;
			}
		}

		return output;
	}

	public static final function rtrim(string realstring, string trim) {
		int stringlength = 0, trimlength = 0, start = 0, i = 0;
		char match1, match2, ch;
		string output = "";

		let stringlength = strlen(realstring);
		let trimlength = strlen(trim);
		let start = stringlength - trimlength;

		for i in range (start, trimlength) {
			let match1 = realstring[i];
			let match2 = trim[i-start];
			if match1 != match2 {
				return realstring;
			} 
		}

		let i = 0;
		for ch in realstring {
			if i < start {
				let output .= realstring;
			}
			let i++;
		}

		return output;
	}

	public static final function count(array realarray) {
		int length = 1;
		var test;

		for test in realarray {
			let length++;
		} 

		return length;
	}
}
