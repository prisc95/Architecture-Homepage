import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  
  const menuIcon = document.getElementById("menu-icon");
  const navigation = document.querySelector(".navbar");

  menuIcon.addEventListener("click", function(){
      navigation.classList.toggle("show");
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
