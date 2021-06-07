require('./modules/about_me/about_me.css');
require('./modules/about_me/components/slider/slider.js');


var  items = document.getElementsByClassName("ant-carousel");
var slider = [];

items.forEach(element => {
	slider.push(new Ant(element.id))
});