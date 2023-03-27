/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// import axios from 'axios';
// window.axios = axios;

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

//================================================================================
import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'websocket',
    cluster: 'mt1',
    // wsHost: process.env.VITE_PUSHER_HOST ? process.env.VITE_PUSHER_HOST : `ws-mt1.pusher.com`,
    wsHost:'websocket.test',
    wsPort: process.env.VITE_PUSHER_PORT ?? 6001,
    wssPort: process.env.VITE_PUSHER_PORT ?? 6001,
    forceTLS: (process.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'websocket',
//     cluster: 'mt1',
//     forceTLS: false,
//     wsHost: window.location.hostname,
//     wsPort:6001,
//     disableStats: true,
// });

//================================================================================
// import Echo from 'laravel-echo'

// window.Echo = new Echo({
    //   broadcaster: 'socket.io',
    //   host: window.location.hostname + ':6001'
    // })
//================================================================================
    
// import Echo from 'laravel-echo'
// import socketio from 'socket.io-client'

// window.io = socketio

// window.Echo = new Echo({
//     broadcaster: 'socket.io',
//     host: window.location.hostname + ':6001'
// })
// //================================================================================

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'websocket'
// });