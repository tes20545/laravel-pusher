# laravel-pusher

Building Real-Time Laravel Apps with Pusher

Pusher is a hosted service that makes it super-easy to add real-time data and functionality to web and mobile applications. This is a 2 hour workshop that will show you how to add real-time features to your Laravel apps with Pusher.

<b>SETTING UP A PUSHER ACCOUNT AND APP</b>

If you do not already have a Pusher account, head over to Pusher and create a free account.

Then register a new app on the dashboard. The only compulsory options are the app name and cluster. A cluster simply represents the physical location of the Pusher server that would be handling your app's requests.

<b>CONFIGURATION AND SETUP</b>

Let's pull in the Pusher PHP SDK. We'll be using this to interact with Pusher from our server end:

<code>composer require pusher/pusher-php-server</code>

Installing the Laravel front-end dependencies:

<code>npm install</code>

We will be using Laravel Echo and the PusherJS JavaScript package to listen for event broadcasts, so let's grab those too, and save them as part of our app's dependencies:

<code>npm install --save laravel-echo pusher-js</code>


To let Laravel know that we will be using Pusher to manage our broadcasts, we need to do some more minor config.

The broadcast config file is located at config/broadcasting.php, but we don't need to edit it directly as Laravel supports Pusher out of the box and has made provision for us to simply edit the .env with our Pusher credentials... so let's do that. Use the credentials you copied earlier:

<code>
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=your_pusher_add_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
</code>

To migrate our tables and seed data:

<code>php artisan migrate --seed</code>

> Tip: Make sure you edit your database details in the .env before running the migrations and seeder.

<b>After successfull installation:</b>

You can start your local server and navigate to the /home route in your browser to register/login and see our brand new game.

Laravel ships with Mix which removes the hassle out of configuring Webpack build steps. We can simply compile our assets with:

<code>npm run dev</code>

And we're all set! You can navigate to the app homepage to see the leaderboard.

<strong>CONCLUSION</strong>

Pusher and Laravel work really well together. There are a lot more improvements we could add to our little game as a result of the features Pusher offers, such as:

> Notifying users of changes in their position on the leaderboard <br>
> Creating an activity feed for users/admins to see all the game developments <br>
> Show when a user joins or leaves the game

And a whole lot more. If you've thought of any other great ways to use Pusher and Laravel, let us know in the comments.

Run : <code>127.0.0.1:8000</code> using <code>php artisan serve</code>

Need Help - Contact: devat.karetha@viitorcloud.in (9558335853)
