import Ember from 'ember';

export function memory(megabytes) {
    if (megabytes % 1024 === 0 && megabytes > 1024) {
        return (megabytes / 1024) + 'go';
    }
    return megabytes + 'mo';
}

export default Ember.Helper.helper(memory);
