=== Choozler Polls and Opinions ===
Contributors: choozler
Donate link: https://www.choozler.com/donate
Tags: poll, polls, polling, question, questions, opinion, opinions, debate,  wordpress poll, poll plugin, responsive poll, vote, survey,choozler
Requires at least: 2.8.0
Tested up to: 4.9.4
Stable tag: 1.0.0

Add polls that generate traffic from a growing poll and opinion community. Polls are created at Choozler.com and easily added to your WordPress page.

== Description ==

Create polls at Choozler.com and use this plugin/widget to add those poll to your site. (So, to be clear, you don't create polls with this widget, you create them at Choozler). This exposes your page to a growing poll/opinion website, potentially driving traffic to your site. So, unlike other poll widgets, this one also adds a larger audience and, oh yeah, the polls look awesome, too.

Check out a live example with some sliding and customized inline polls:
*[Choozler widget demo](https://www.choozler.com/widgetdemomany)

We've also made Choozler's powerful notification system available to the widget. This means that any time a user from your site votes on a Choozler poll used in your widget, a notification (via message/email/browser push) is sent to the Choozler community. The notification includes an active link to your site. Why did we do this? Because we want to send you traffic and, hopefully, you convert some to regular visitors to your site. The idea here is that you won't just be adding polls, but the plugin will also help grow your site.

Note that this plugin is free. ONE HUNDRED PERCENT. Completely. Totally. Free. We aren't going to try to upsell or make you pay for extra features. There is no "pro" version that you need to pay for or "premium plan" to unlock special access. And there never will be. We want this widget to help grow your site and we will do that by giving WordPress users everything we have to offer. Create a poll, put it on your site, and generate traffic. Period.

Although the Choozler website has its own branded look and feel, our widget has many options for you to customize the poll that will be displayed on your site. But only one option is required.
**Choozlet Id:** This is a unique, fifteen character Id that is given to every poll (we call them Choozlets). You'll find this Id on each Choozlet page.

You can use any Choozlet Id in your widget, but polls with user selectable choices (as opposed to opinions which may not have any choices) probably make the most sense so that your users can interact with the widget. The best thing to do is sign up at choozler.com and create your own Choozlets, then use them on your site to compliment your page.

So, the process is pretty straight-forward:
1. Create a Choozlet at Choozler (or find an existing one).
2. Copy the Choozlet Id.
3. Paste the Id into the "Choozlet Id" option.

= Feedback =

Thank you for using the Choozler plugin. We are open to--and look forward to--suggestions and feedback.
Email me at: rich@choozler.com
Contact page: [https://www.choozler.com/contact] (https://www.choozler.com/contact)

= Social Media =

* Follow us on Twitter: [https://www.twitter.com/choozler](http://www.twitter.com/choozler)
* Like us on Facebook: [http://www.facebook.com/choozler](http://www.facebook.com/choozler)

== Installation ==

1. Upload the entire "choozler-polls-and-opinions" folder to the "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Find "Choozler Polls and Opinions" in the Widget section of the Admin page.

== FAQ ==

= Where do I find a Choozlet Id? =
Every Choozlet page contains that Choozlet's Id. For an example, go to the following page and search for "Id." Click on the link and the Choozlet Id will be displayed.
https://www.choozler.com/who-was-the-greatest-tv-character-of-all-time

= How come some options don't work? =
While most options apply to all widgets, there are a few that only apply to "slide-from" widgets, while some only apply to "inline" widgets. For example, the options "Tab Style" and "Tab Position" only apply to sliders whereas "Margin" and "Align" only apply to inline widgets. This is noted on the "i" (information) icon next to the option label where appropriate.

= Can I have more than one poll / widget on a page? =
Absolutely. You can have any number of polls / widgets on a page. Just be sure that, if they are sliders on the same side of the page (ex: slide-from-left), you adjust the "Tab Postion" for each one. Otherwise, they will all have the same default location and will be placed one on top of the other--and you will only see the topmost tab.

= Can I create a poll through the widget? =
Not as of now. The current version of the widget requires that you get a Choozlet Id (created for every poll) from choozler.com.

= How do I place a poll in the body of my post? =
Every widget is set up in the Widgets section of the Admin page. When you select "inline-body" for the "Placement" option, a Shortcode will be generated. Simply paste this Shortcode into the body of your post. Once you add it the poll will show up in that location, you can still change the other options for this widget in the Widget area.

= Why does my inline widget have scrollbars? Couldn't the widget just have rendered a little taller? =
This won't happen often, but you may occasionally see an inline widget that should have been made a little taller (this can't happen with sliders). For inline widgets, we calculate the height based on the content. But we don't know the width of the widget. Width may be set to 100% but if it resides in a thin sidebar of your theme, it will not be very wide. In this scenario, the height that we calculated may be a bit small, resulting in scrollbars. If that happens, simply set the height manually with the "Height" option. A little trial and error may be needed to get it just right.

= Is the widget compatible with mobile devices? =
Yes. The widget will work on any screen size and any device--desktop, phone, tablet, etc.

== Screenshots ==

1. Two poll widgets: one in the widget area and one in the document body.
2. A poll widget in the document body.
3. A "slide-from-left" tab on the left side of the screen.
4. A poll widget that slid in from the left.
5. Widget options screen showing Choozlet Id filled in, and an information popup.
6. Find the Choozlet Id at choozler.com
7. Widget options screen showing the Shortcode needed for putting a poll widget in the document body.
8. The Shortcode pasted in to the body during edit mode.
9. A screen with nine slide-in tabs with various locations and sizes.

== Changelog ==

= 1.0.0 =
* Initial release

== Upgrade Notice ==
* None

== Options and Values to Customize Polls ==

* When an option uses a color value, any valid hex color code or HTML color name is acceptable. For example: "#dcdcdc" or "yellow."
* When an option uses a size value, the value should inlcude the unit type "px" or "%" at the end. For example: "5px" or "80%." If you leave out the unit type, then "px" will be used. Note that "em", "pt" or any other units are not valid.
* Some options require a number that is not units. For example: "Main Text Length."

= Choozlet Id =
Description: The unique Id given by Choozler to each Choozlet (poll). This tells the widget what poll to display.
Values: Any valid Choozlet Id. Find this Id at choozler.com. Go to any Choozlet page and you will see an "Id" link. Clicking this link will display the Id. Copy/paste it into this widget option.

= Placement =
Description: The location on the page where you want the poll to display.
Values:
**slide-from-left:** The poll is hidden offscreen. A tab is placed on the left side of the screen. Click the tab and the poll will slide into view from the left.
**slide-from-right:** Same as above, but the tab is on the right side of the screen and the poll slides in from the right.
**slide-from-bottom:** Same as above, but guess where the tab is located :) ?
**inline-widget-area:** The poll will display in the flow of the widget area.
**inline-body:** The poll will display in the flow of content in the body of your page. Note that this requires the copy/paste of a WordPress Shortcode that is generated when you select this value.

= Align =
Description: Only for inline widgets. Aligns the widget relative to its parent container. If you don't create a parent container, then the widget area or body is the container.
Values: left, middle, right.

= Background Color =
Description: Sets the background color of the widget.
Values: Any valid hex color or html color name.

= Border Color =
Description: Only for inline widgets. Sets the color of the widget's border.
Values: Any valid hex color or html color name.

= Border Size =
Description: Only for inline widgets. Sets the thickness of the widget's border.
Values: Valid number in pixels. Set to 0px for no border.

= Height =
Description: Sets the height of the widget.
Values: Any valid number in pixels or percent.
Notes: For sliders, the default value is 100% of the browser window. For inline widgets, we calculate the needed size based on the content. You can override this default value by setting "Height." You might want to do this for a number of reasons. When we calculate the needed height, we don't know the width you will use. The width might vary depending on the parent container. We also don't know how much text you will choose to display (see Main Text Length option). Because of these variables, the calculation may be a little too low, resulting in scrollbars when you wouldn't expect them. In this case, just set the height manually. Remember, this only applies to inline widgets as sliders are, by default, 100% in height.

= Link Love =
Description: Allows a link back to Choolzer to be placed in the lower right corner of the widget. By default, this is off, but turning it on will give a better user experience as well as provide SEO value to both your site and Choozler.
Values: yes, no.

= Main Text =
Description: When a Choozlet is created, it must have a title (75 characters max). It can also, optionally, contain a question that is longer. In your widget, you can choose whether to display the title, the question, or both. We refer to this as the "main text" of the widget.
Values: title, question, both.

= Main Text Bold =
Description: Sets whether or not to display the main text as bold.
Values: yes, no.

= Main Text Color =
Description: Sets the color of the main text.
Values: Any valid hex color or HTML color name.

= Main Text Length =
Description: Sets the limit for the number of characters of main text to display.
Values: Any valid number. Set to 0 for no limit.

= Main Text Size =
Description: Sets the font size of the main text.
Values: Any valid number in pixels.

= Main Text Weight =
Description: Sets the weight of the main text font.
Values: fine, light, medium, heavy, heaviest.

= Margin =
Description: Only for inline widgets. Sets the margins for the widget. This will override the setting in the "Align" option. You might want to use this to alter spacing with elements above or below the widget. 
Values: Valid CSS syntax for margin values. For example: "5px 10px 5px 20px" or "10px"

= Option Trim Background Color =
Description: Sets the background color for the left and right sides of the user-selectable choices in the widget. This includes the checkbox on the left and the statistics box on the right.
Values: Any valid hex color or HTML color name.

= Option Trim Foreground Color =
Description: Sets the foreground color for the left and right sides of the user-selectable choices in the widget. This includes the checkbox on the left and the statistics box on the right.
Values: Any valid hex color or HTML color name.

= Rounded Corners =
Description: Only for inline widgets. Sets the amount of rounding the widget corners will have.
Values: Any valid number in pixels. Set to 0 for no rounding.

= Shadow =
Description: Sets whether a shadow should be displayed around the widget.
Values: yes, no.

= Shadow Color =
Description: Sets the color of the shadow.
Values: Any valid hex color or HTML color name.

= Show Image =
Description: When a poll is created, an image can be included. You decide if you want to show the image or not.
Values: yes, no.

= Status =
Description: Sets the widget to active or inactive. This is useful for taking a widget from view temporarily, but not losing its settings.
Values: active, inactive.

= Tab Style =
Description: For slide-from widgets only. Sets the size of the tab.
Values: large, medium, small

= Tab Position =
Description: For slide-from widgets only. Sets the position of the tab along the side of the screen (left, bottom, right--depending on the "Placement" option).
Values:
**left:** Positions the tab at the far left of the screen when "Placement" option is "slide-from-bottom."
**right:** Positions the tab at the far right of the screen when "Placement" option is "slide-from-bottom."
**bottom:** Positions the tab at the bottom of the screen when "Placement" option is "slide-from-right" or "slide-from-left."
**middle:** Positions the tab in the middle long the left, right, or bottom border.
**Any valid number in pixels or percent.** This number will be used to position the top of the tab (for slide-from-left/right) or the left of the tab (for slide-from-bottom).

= Titlebar Color =
Description: For slide-from widgets only. Sets the color of the title bar.
Values: Any valid hex color or HTML color name.

= Width =
Description: Sets the width of the widget.
Values: Any valid number in pixels or percent.

= Z Index =
Description: For slide-from widgets only. Sets the z-index of the tab and slide in content. This determines whether other elements might display on top of the widget. We start with a very high value (1000000) so this should not need to be changed. However, if there is another element on the screen with a higher z-ndex, you can increase this value to keep the Choozler widget always on top.
Values: Any valid number.
