# Common WP Blocks

![](./assets/images/github.jpg)

This is the companion blocks plugin for the [[Common WP]](https://github.com/jcklpe/common-wp) wordpress theme, a simple to use wordpress theme for non-profit use. It's focus is on simple visual design, and clean componentized code for easy customization by organizations with diverse needs.

## Requirements

These blocks are intended to be used with the [[Common WP theme]](https://github.com/jcklpe/common-wp). In order to make edits to them you need to have a basic familiarity with [cli](https://www.youtube.com/watch?v=4RPtJ9UyHS0&t=), [npm](https://www.npmjs.com/), [webpack](https://webpack.js.org/), [React](https://reactjs.org/), and [Wordpress Gutenberg Blocks](https://getflywheel.com/layout/wordpress-gutenberg-blocks-custom/). 

## Build Process

These blocks are built with webpack as per normal Wordpress Gutenberg Block building practice. First you must use `npm install` in the individual block folder you are working in. Then you can run `npm run build` to build that block. Run `npm run dev` to run webpack in watch mode so that it will continuously build and update as you save changes to your blocks. 

## TODO:

- [ ] convert all template partials into Gutenberg Blocks to be used in posts
- [ ] build more Blocks to cover additional page designs

## License

licensed under Cooperative Work License v1.0
