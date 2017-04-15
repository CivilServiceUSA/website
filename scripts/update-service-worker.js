var replace = require('replace-in-file');
var path = require('path');
var base = path.resolve(__dirname, '..');

if (!Date.now) {
  Date.now = function now() {
    return new Date().getTime();
  };
}

// Update Service Worker Version
var htmlFiles = {
  files: [
    base + '/public/service-worker.js'
  ],
  from: [/var dataCacheName = '[^']+';/g, /var cacheName = '[^']+';/g],
  to: ["var dataCacheName = 'data-cache-name-" + Date.now() + "';", "var cacheName = 'cache-name-" + Date.now() + "';"]
};

replace(htmlFiles, function (error, changedFiles) {
  if (error) {
    return console.error('Error occurred:', error);
  }
  console.log('Updated Service Worker:', changedFiles.join(', '));
});