function priorityLoad(imgs, callback) {
	if (imgs.length == 0) {
		if (typeof(callback) === 'function')
			callback();
	}
	else {
		var c = imgs.shift();
		var xhr = new XMLHttpRequest();
		xhr.open('GET', c.data('src'), true);
		xhr.responseType = 'arraybuffer';
		xhr.onload = function() {
			var buffer = new Uint8Array(this.response);
			var blob = new Blob([buffer], {type: 'image/png'});
			var url = window.URL || window.webkitURL;
			c.removeAttr('data-src');
			c.attr('src', url.createObjectURL(blob));
			priorityLoad(imgs, callback);
		};
		xhr.send();
	}
}