var notes = (function() {
	var list = [];

	return {
		add: function(note) {
			if (note && typeof note === 'string') {
				if (!note.replace(/\s/g, '').length) {
					return false;
				}
				var item = {timestamp: Date.now(), text: note};
				list.push(item);
				return true;
			}
			return false;
		},
		remove: function(index) {
			if((index >= 0) && (index < list.length)) {
				list.splice(index, 1);
				return true;
			}
			return false;

		},
		count: function() {
			return list.length;
		},
		list: function() {},

		find: function(str) {
			var test = [];
			if(str) {
				for (i = 0; i < list.length; i++) {
					// firstly we change all list[] text to lower, then change str to lower and check
					if (list[i].text.toLowerCase().indexOf(str.toLowerCase()) > -1) {
						test.push(list[i]);
					}
				}
				if (test.length > 0) {
					return test;
				}

			}
			return false;
		},
		clear: function() {
			list.splice(0, list.length);
		}
	};
}());