


 require('./bootstrap');
/** Tis is for vue code if we comment it the page dashboard dont appear   */
// import { createApp, h } from 'vue';
// import { createInertiaApp } from '@inertiajs/inertia-vue3';
// import { InertiaProgress } from '@inertiajs/progress';
// import axios from 'axios';

// const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({ el, app, props, plugin }) {
//         return createApp({ render: () => h(app, props) })
//             .use(plugin)
//             .mixin({ methods: { route } })
//             .mount(el);
//     },
// });

// InertiaProgress.init({ color: '#4B5563' });
// end

//** This code for chat  */
 const message_el = document.getElementById("message");/**  */a
 const username_input = document.getElementById("username");
 const message_input = document.getElementById("message_input");
 const message_form = document.getElementById("message_form");

 /// event :allowing you to subscribe and listen for various events that occur within your application
/** addEventListener : methode  that will be called whenever the specified event is delivered   */
message_form.addEventListener('submit' ,function(e)
{
//  e.preventDefault();


 let has_errors = false;
 if(username_input.value ==''){
     alert ("please enter a username "); /** if the user dont enter the name  */
     has_errors = true;
 }
 if(has_errors){
     return;
 }
 /** this info same the data inside rout in (wep.php file)   */

  const options = {
       method: 'post',
       url:'/send-message',
       data:{
           username: username_input.value,
           message:message_input.value
       }
  }
  axios(options);
});

/** this code for appear the message  in block
 * chat: name of channel
 * message : same the name that broadcastAs() return it
 *
 */
window.Echo.channel('chat').listen('.message',(e)=>{
message_el.innerHTML+='<div class = "message"><strong>'+e.username + ':</strong>' + e.message  +'</div>';
});
