module.exports = function (shipit) {
  require('shipit-deploy')(shipit);

  shipit.initConfig({
    default: {
      workspace: '/tmp/bekahlynnbaker.com',
      deployTo: '/var/www/bryanpbaker.com/html',
      repositoryUrl: 'https://github.com/bekahlbaker/bekahlynnbaker.com',
      branch: 'master',
      ignores: ['.git', 'node_modules'],
      rsync: ['--del'],
      keepReleases: 2,
      key: '/Users/bryan.baker/.ssh/id_rsa',
      shallowClone: true
    },
    production: {
      servers: 'deploy@104.131.38.234'
    }
  });
};