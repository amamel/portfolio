# alexmamel.com

Created from my [Underscores Starter kit](https://github.com/mamela/vitewp). Which will hopefully turn into a starter theme with this ACF blocks system.

## A few things

(more here soon)

#### Content Blocks

In views/blocks - this is a content strategy I'm working on where all aspects of the CMS are essentially "content agnostic" (apart from one or two places).

#### Separation of Concerns

Content and presentation are separate. There should be no formatting and styling within the CMS, all is prepared to work together.

#### Sass Structure

Mimics the templates in views/ for the most part. The main components are:

* Site - all global elements.
* Page - styles relating to page layout, obvy.
* Blocks - styles for individual chunks of content used to build a page (these would be "molecules" in Atomic Design terms)

## To do
* [Timber](https://github.com/jarednova/timber) reboot.
* [Grid](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout) integration
* Optimize content delivery
* WCAG AA Optimized 
* Remove all prototyping styles
* Related projects within service pages
* Create logo & some more graphics
* Sibling prev/next on service pages
* Finish maintainence plugin
* CTA block styles
* Figure out conditionally showing individual fields so you wouldn't have to duplicate the entire ACF object.


## References & Links
* Based on Underscores http://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* flexboxgrid.css 