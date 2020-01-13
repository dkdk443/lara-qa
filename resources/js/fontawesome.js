import {config, dom, library} from '@fortawesome/fontawesome-svg-core';

import {faCaretDown, faStar, faCheck, faCaretUp} from '@fortawesome/free-solid-svg-icons';


library.add(faCaretUp, faCaretDown, faStar, faCheck);
config.showMissingIcons = false;

dom.i2svg();