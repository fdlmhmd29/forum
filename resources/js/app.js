require('./bootstrap');

require('alpinejs');

import Choices from 'choices.js';

window.choices = (element) => {
  return new Choices (element, {
    maxItemCount: 3,
    removeItemButton: true,
  });
}
