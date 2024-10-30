jQuery(document).on("click", ".choozlerOptionInfoIcon", function() {
	switch($(this).data("fld")){
		case "choozletId": msg="Every Choozlet is given a unique 15 character Id. Find it on any Choozlet page at Choozler.com.";break;
		case "placement": msg="slide-from-[left/right/bottom]: Will display a tab on the side of the screen. Clicking the tab will slide the widget onto the screen.<br><br>inline-widget-area: Will display the widget in the flow of HTML within the widget area. Note that some themes have a thin widget area that may not work well with the Choozler widget.<br><br>inline-body: Will display the widget in the flow of the HTML in the body of your page. *We will generate a Shortcode snippet to be pasted into your page.";break;
		case "linkback": msg="Allow a link back to Choozler (placed in the lower right corner of the widget). This creates a better user experience, and has SEO benefits for your site and Choozler together--a win-win.";break;
		case "align": msg="For inline widgets only. Aligns the widget within its parent container.";break;
		case "borderColor": msg="For inline widgets only.";break;
		case "borderSize": msg=" For inline widgets only.";break;
		case "height": msg="For inline widgets, height is calculated. Override this calculation if needed.";break;
		case "mainText": msg="Choozlets always have a Title. A Question is optional. You can include either, or both as the main text for your widget.";break;
		case "maintextLength": msg="Set the number of characters before truncating main text. Use 0 for no limit.";break;
		case "margin": msg="This will override Align. Use standard CSS syntax.";break;
		case "roundedCorners": msg="For inline widgets only. Set radius in px. 0 for no rounding.";break;
		case "tabStyle": msg="For slide-in widgets only.";break;
		case "tabPosition": msg="For slide-in widgets only. Accepted values:<br>middle<br>bottom<br>left<br>right<br><i>n</i>px or <i>n</i>% (will set distance from top or left)";break;
		case "titlebarColor": msg="For slide-in widgets only.";break;
		case "width": msg="Width is a max value. The widget will resize smaller along with its container.";break;
		case "zIndex": msg="For sliders only. Only change this if other elements are displayed on top of the slider or the tab.";break;
	};
	popupDiv="#" + $(this).data("wid") + "-popup";
	$(popupDiv).html(msg);
	newtop=$(this).position().top - $(popupDiv).height() - 1;
	newleft=$(this).position().left + $(this).width() + 10;
	$(popupDiv).css({left:newleft, top: newtop });
	$(popupDiv).show();
});

jQuery(document).mousedown(function(e) {
	$(".choozlerOptionPopup").hide();
});

jQuery(document).on("click", ".choozlerFindChoozletId", function() {
	popupDiv="#" + $(this).data("wid") + "-popupidfinder";
	newtop=$(this).position().top - ($(popupDiv).height()/2);
	newleft=$(this).position().left - $(popupDiv).width() - 20;
	$(popupDiv).css({left:newleft, top: newtop });
	$(popupDiv).show();
});

jQuery(document).mousedown(function(e) {
	$(".choozlerOptionPopupIdFinder").hide();
});

jQuery(document).on("change", ".choozlerInputSelect", function() {
	infoDivMsg="#" + $(this).data("wid") + "-shortcode-wrap";
	v=$(this).val();
	if (v=='inline-body') {
		$(infoDivMsg).removeClass('choozlerDisplayNone');
	} else {
		$(infoDivMsg).addClass('choozlerDisplayNone');
	};
});
