"use strict";

var version = 'v1::';

var urlsToCache = [
  '',
  '/',
  '/css/plugins.css',
  '/css/style.css',
  '/js/app.js',
  '/js/plugins.js'
];

var offlinePage = '<html><head><title>You appear to be offline</title><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="apple-mobile-web-app-title" content="Civil Services"><meta name="application-name" content="Civil Services"><style>.offline {box-sizing: border-box;display: flex;align-items: center;justify-content: center;min-height: 100%;padding: 2rem;}.offline__container {box-sizing: border-box;width: auto;text-align: center;}.offline__container img {max-width: 180px;}h2 {font-family: Helvetica, Arial, sans-serif;font-weight: 300;margin-top: 2rem;color: #666666;}</style></head><body><section class="offline"><div class="offline__container"><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iSWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMzExLjI4IDM2NS40MyI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNhMzFlMjM7fS5jbHMtMntmaWxsOiM2MzEzMTY7fS5jbHMtM3tmaWxsOiMxZTcyYTE7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5pY29uPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zOTAuNTksMTQ3Ljc4QzM1MiwxMjMsMjcyLjQ1LDczLjI5LDI1Niw3My4yOWMtMjEuODksMC0xNTUuNjQsODguMTMtMTU1LjY0LDg4LjEzLDAsMzguMTIsMi42Niw2Ny4yMSw3LjgsOTEuNjIsMjQuODctMTYuMTYsMTAzLjEtNjYuMzUsMTM2LTc5LjdDMjYwLjU4LDE2Ni4zNSwzMjUuMTEsMTQzLjg3LDM5MC41OSwxNDcuNzhaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTAwLjM2IC03My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zOTAuNTksMjc2LjcxQzM1Mi4wNiwyNTIsMjcyLjQ2LDIwMi4yMywyNTYsMjAyLjIzYy0xNy4zNCwwLTEwNC43OSw1NS4yNi0xNDAuNDQsNzguMjUsNi4wOCwxOC4xOSwxMy45MywzNC4yMiwyMy40OCw1MC43NWEyMzYuODIsMjM2LjgyLDAsMCwwLDE0LjQsMjJjMzEuNzMtMTkuNzQsNjkuNzItNDIuMyw5MC4zNy01MC43NkMyNTkuNTYsMjk1LjY0LDMyNC41OCwyNzIuNzgsMzkwLjU5LDI3Ni43MVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMDAuMzYgLTczLjI5KSIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTI3OS4zMSwxNzguNTRjMzcsMTguMTMsMTAyLjIxLDYwLDEyNC41NCw3NC41LDUuMTMtMjQuNDEsNy43OS01My41LDcuNzktOTEuNjIsMCwwLTcuNi01LTE5LjM5LTEyLjU3LTQ4LDQuNjgtODksMTkuMTMtMTAxLjU1LDI0LjQ5QzI4Ny4zNiwxNzQuNjgsMjgzLjQ2LDE3Ni41LDI3OS4zMSwxNzguNTRaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTAwLjM2IC03My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Ik0yNzkuMjcsMzA3LjQ4YzIxLjUxLDEwLjU0LDUyLjYsMjkuMTIsNzkuMjksNDUuNzFhMjM4LjgyLDIzOC44MiwwLDAsMCwxNC4zOS0yMmM5LjU1LTE2LjUzLDE3LjQtMzIuNTcsMjMuNDgtNTAuNzVsLTQuMTktMi42OWMtNDguNDcsNC43My04OS43OSwxOS40Mi0xMDEuOTEsMjQuNjRDMjg3LjA2LDMwMy43NiwyODMuMzIsMzA1LjQ5LDI3OS4yNywzMDcuNDhaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTAwLjM2IC03My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTMiIGQ9Ik0yNTYsMzMxLjE3Yy0xMC44NCwwLTQ5LjEzLDIxLjYzLTg1LDQzLjQ2LDM1LjM5LDM4Ljc4LDc0LjYsNTksODUsNjQuMDhoMGMxMC40MS01LjA1LDQ5LjYzLTI1LjMxLDg1LTY0LjA4QzMwNS4xNCwzNTIuOCwyNjYuODQsMzMxLjE3LDI1NiwzMzEuMTdabTE2LjkxLDczLjUyTDI1NiwzOTUuOGwtMTYuOTIsOC44OSwzLjIzLTE4Ljg0TDIyOC42MiwzNzIuNWwxOC45MS0yLjc1TDI1NiwzNTIuNjNsOC40NiwxNy4xMywxOC45MSwyLjc1LTEzLjY5LDEzLjM1WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEwMC4zNiAtNzMuMjkpIi8+PC9zdmc+" alt="Civil Services Logo" /><h2>You appear to be offline</h2></div></section></body></html>';

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(version + 'fundamentals')
    .then(function(cache) {
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener('fetch', function(event) {

  if (event.request.method !== 'GET') {
    return;
  }

  event.respondWith(
    caches.match(event.request)
    .then(function(cached) {
      var networked = fetch(event.request)
        .then(fetchedFromNetwork, unableToResolve)
        .catch(unableToResolve);

      return cached || networked;

      function fetchedFromNetwork(response) {
        var cacheCopy = response.clone();

        caches.open(version + 'pages')
        .then(function add(cache) {
          cache.put(event.request, cacheCopy);
        });

        return response;
      }

      function unableToResolve () {
        return new Response(offlinePage, {
          status: 503,
          statusText: 'Service Unavailable',
          headers: new Headers({ 'Content-Type': 'text/html' })
        });
      }
    })
  );
});

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys()
    .then(function (keys) {
      return Promise.all(
        keys.filter(function (key) {
          return !key.startsWith(version);
        })
        .map(function (key) {
          return caches.delete(key);
        })
      );
    })
    .then(function() {
    })
  );
});