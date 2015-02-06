namespace Drupal;

final class ZephirHelper 
{
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
