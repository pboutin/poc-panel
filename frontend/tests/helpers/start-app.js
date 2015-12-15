import Ember from 'ember';
import Application from '../../app';
import config from '../../config/environment';

// Custom helpers
import './ajax/get';
import './ajax/post';
import './json/flavor';
import './json/image';
import './json/server';

export default function startApp(attrs) {
  let application;

  let attributes = Ember.merge({}, config.APP);
  attributes = Ember.merge(attributes, attrs); // use defaults, but you can override;

  Ember.run(() => {
    application = Application.create(attributes);
    application.setupForTesting();
    application.injectTestHelpers();
  });

  return application;
}
