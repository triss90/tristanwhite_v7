---
layout: post
title:  "Responsive Videos in html"
date:   2015-12-1 13:51:12 +0100
categories: articles
---

I happened upon an effective way of making videos responsive, and immediately implemented it on this site. Try resizing the window, to see the video beneath, adjust to the width of the page, while remaining its aspect ratio.

<div class="responsive-video">
   <iframe src="https://www.youtube.com/embed/DgDg2ddiKIo"></iframe>
</div>

The effect is achieved by adding a padding of 56.25% on the bottom of the div containing the video. We arrive at this number by dividing the aspect ratio's height and width and multiplying that number by 100 to get the result in percent. e.g. <code>( 9 / 16 ) * 100 = 56.25%</code>

<br>

### The CSS
{% highlight css %}
.responsive-video {
   position: relative;
   padding-bottom: 56.25%;
}

.responsive-video iframe {
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
}
{% endhighlight %}

### The HTML
{% highlight html %}
<div class="responsive-video">
   <iframe src="https://www.youtube.com/embed/DgDg2ddiKIo"></iframe>
</div>
{% endhighlight %}
