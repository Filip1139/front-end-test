import domReady from '@roots/sage/client/dom-ready';
import {Plans} from './modules/plans.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  Plans.init();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
