import Ember from 'ember';
import config from './config/environment';

const Router = Ember.Router.extend({
    location: config.locationType
});

Router.map(function() {
  this.route('servers', function() {
      this.route('new');
  });
  this.route('steves');
  this.route('boats');
});

export default Router;
