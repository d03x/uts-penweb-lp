import './bootstrap';
import 'bootstrap';

import Typewriter from 'typewriter-effect/dist/core';

new Typewriter('#typewriter', {
    strings: ['Hello World', 'Landing Page',"Kelompok 3"],
    autoStart: true,
    loop: true,
    delay: 75,
  });