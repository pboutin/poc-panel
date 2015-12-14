import Ember from 'ember';
import loadInitializers from 'ember/load-initializers';
import config from './config/environment';

// Custom classes
import Resolver from './ember/resolver';

let App;

Ember.MODEL_FACTORY_INJECTIONS = true;

App = Ember.Application.extend({
  modulePrefix: config.modulePrefix,
  podModulePrefix: config.podModulePrefix,
  Resolver
});

loadInitializers(App, config.modulePrefix);

export default App;
