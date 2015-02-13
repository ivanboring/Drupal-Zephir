namespace Drupal;

final class ZephirHelper 
{
	/**
	 *
	 */
	public static final function rawurlencode(string text)->string {
		char ch;
		string output = "";

		for ch in text {
			switch(ch) {
				case 'a':
				case 'b':
				case 'c':
				case 'd':
				case 'e':
				case 'f':
				case 'g':
				case 'h':
				case 'i':
				case 'j':
				case 'k':
				case 'l':
				case 'm':
				case 'n':
				case 'o':
				case 'p':
				case 'q':
				case 'r':
				case 's':
				case 't':
				case 'u':
				case 'v':
				case 'w':
				case 'x':
				case 'y':
				case 'z':
				case 'A':
				case 'B':
				case 'C':
				case 'D':
				case 'E':
				case 'F':
				case 'G':
				case 'H':
				case 'I':
				case 'J':
				case 'K':
				case 'L':
				case 'M':
				case 'N':
				case 'O':
				case 'P':
				case 'Q':
				case 'R':
				case 'S':
				case 'T':
				case 'U':
				case 'V':
				case 'W':
				case 'X':
				case 'Y':
				case 'Z':
				case '1':
				case '2':
				case '3':
				case '4':
				case '5':
				case '6':
				case '7':
				case '8':
				case '9':
				case '0':
				case '.':
				case '-':
				case '_':
				case '~':
					let output .= ch;
					break;
				default:
					let output .= "%" . sprintf("%X",ch);
					break;
			}
		}

		return output;
	}

	/**
	 * simple str_replace from php (only works with strings)
	 */
	public static final function str_replace(string search, string replace, string subject, int count = 0)->string {
		string output = "", temp = "";
		char ch;
		int length, foundindex = 0, foundamount = 0;
		boolean passall = false;

		let length = strlen(search);

		for ch in subject {
			// the count has passed
			if passall {
				let output .= ch;
			}
			// found the whole shebang
			elseif ch == search[foundindex] && length == (foundindex+1) {
				let output .= replace;
				let temp = "";
				let foundamount++;
				let foundindex = 0;
				if foundamount == count {
					let passall = true;
				}
			}
			// found parts
			elseif ch == search[foundindex] {
				let temp .= ch;
				let foundindex++;
			}
			// was not the part
			elseif foundindex > 0 {
				let foundindex = 0;
				let output .= temp;
				let temp = "";				
			}
			else {
				let output .= ch;
			}
		}
		return output;
	}

	/**
	 *
	 */
	public static final function array_flip(array realarray) {
		array output = [];
		var k, v;

		for k, v in realarray {
			let output[v] = k;
		}

		return output;
	}

	/**
	 * Array keys from php
	 */
	public static final function array_keys(array realarray, string search_value = "", boolean strict = false)->array {
		var k, v;
		array output = [];

		for k, v in realarray {
			if search_value == "" || search_value == k {
				let output[] = k;
			}
		}

		return output;
	}

	/**
	 * Small version of array_slice. Does not allow minus offsets at the moment
	 */
	public static final function array_slice(array realarray, int offset, int length = 0)->array {
		var k, v;
		int i = 0, end = 0;
		array output = [];

		if length != 0 {
			let end = length+offset;
		}
		else {
			let end = (int) self::count(output);
		}

		for k, v in realarray {
			if i >= offset && i > end {
				let output[k] = v;
			}
			let i++;
		}

		return output;
	}

	/**
	 * Works as PHP explode
	 */
	public static final function explode(string delimiter, string realstring)->array {
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

	/**
	 * Works as PHP rtrim
	 */
	public static final function rtrim(string realstring, string trim)->string {
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

	/**
	 * Works as PHP count
	 */
	public static final function count(array realarray)->int {
		int length = 1;
		var test;

		for test in realarray {
			let length++;
		} 

		return length;
	}
}
