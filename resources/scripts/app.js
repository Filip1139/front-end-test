import domReady from '@roots/sage/client/dom-ready';
import { Animations } from './modules/animations.js';
import {Plans} from './modules/plans.js';



/**
 * Application entrypoint
 */
domReady(async () => {
  Animations.init()
  Plans.init();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
