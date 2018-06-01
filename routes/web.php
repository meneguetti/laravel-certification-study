<?php
/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', 'HomeController@index')->name('home');

//architecture
Route::get('/architecture/request-lifecycle', 'ArchitectureController@requestLifecycle')->name('architecture.request-lifecycle');
Route::get('/architecture/service-container', 'ArchitectureController@serviceContainer')->name('architecture.service-container');
Route::get('/architecture/service-providers', 'ArchitectureController@serviceProviders')->name('architecture.service-providers');
Route::get('/architecture/facades', 'ArchitectureController@facades')->name('architecture.facades');
Route::get('/architecture/http-verbs', 'ArchitectureController@httpVerbs')->name('architecture.http-verbs');

//routing
Route::get('/routing/redirects', 'RoutingController@redirects')->name('routing.redirects');
Route::get('/routing/parameters', 'RoutingController@parameters')->name('routing.parameters');
Route::get('/routing/named-routes', 'RoutingController@namedRoutes')->name('routing.named-routes');
Route::get('/routing/groups', 'RoutingController@groups')->name('routing.groups');
Route::get('/routing/model-binding', 'RoutingController@modelBinding')->name('routing.model-binding');
Route::get('/routing/rate-limiting', 'RoutingController@rateLimiting')->name('routing.rate-limiting');

//middleware
Route::get('/middleware/defining-registering', 'MiddlewareController@definingRegistering')->name('middleware.defining-registering');
Route::get('/middleware/parameters', 'MiddlewareController@parameters')->name('middleware.parameters');

//controllers
Route::get('/controllers/defining', 'ControllersController@defining')->name('controllers.defining');
Route::resource('resource-controllers', 'ResourceControllersController');
Route::apiResource('api', 'ApiController');
Route::get('/controllers/dependency-injection', 'ControllersController@dependencyInjection')->name('controllers.dependency-injection');
Route::get('/controllers/route-caching', 'ControllersController@routeCaching')->name('controllers.route-caching');

//requests
Route::get('/requests/psr-7', 'RequestsController@psr7')->name('requests.psr-7');
Route::get('/requests/path-method', 'RequestsController@path-method')->name('requests.path-method');
Route::get('/requests/retrieving-input', 'RequestsController@retrievingInput')->name('requests.retrieving-input');
Route::get('/requests/uploaded-files', 'RequestsController@uploadedFiles')->name('requests.uploaded-files');
Route::get('/requests/proxy-configuration', 'RequestsController@proxyConfiguration')->name('requests.proxy-configuration');
Route::get('/request/psr', 'RequestController@psr')->name('request.psr');
Route::get('/request/{name?}', 'RequestController@index')->name('request');

//responses
Route::get('/responses/attaching-headers', 'ResponsesController@attaching-headers')->name('responses.attaching-headers');
Route::get('/responses/cookies', 'ResponsesController@cookies')->name('responses.cookies');
Route::post('/responses/cookies/post', 'ResponsesController@cookiesSave')->name('responses.cookies.save');
Route::get('/responses/encryption', 'ResponsesController@encryption')->name('responses.encryption');
Route::get('/responses/redirects', 'ResponsesController@redirects')->name('responses.redirects');
Route::get('/responses/flash-data', 'ResponsesController@flashData')->name('responses.flash-data');
Route::get('/responses/response-types', 'ResponsesController@responseTypes')->name('responses.response-types');
Route::get('/responses/response-macros', 'ResponsesController@responseMacros')->name('responses.response-macros');

//views
Route::get('/views/creating', 'ViewsController@creating')->name('views.creating');
Route::get('/views/passing-data', 'ViewsController@passingData')->name('views.passing-data');
Route::get('/views/view-composer', 'ViewsController@viewComposer')->name('views.view-composer');

//url generation
Route::get('/url-generation/named-routes', 'UrlGenerationController@namedRoutes')->name('url-generation.named-routes');
Route::get('/url-generation/controller-actions', 'UrlGenerationController@controllerActions')->name('url-generation.controller-actions');
Route::get('/url-generation/default-values', 'UrlGenerationController@defaultValues')->name('url-generation.default-values');

//sessions
Route::get('/sessions/configuration', 'SessionsController@configuration')->name('sessions.configuration');
Route::get('/sessions/storing-data', 'SessionsController@storingData')->name('sessions.storing-data');
Route::get('/sessions/retrieving-data', 'SessionsController@retrievingData')->name('sessions.retrieving-data');
Route::get('/sessions/deleting-data', 'SessionsController@deletingData')->name('sessions.deleting-data');
Route::get('/sessions/flash-data', 'SessionsController@flashData')->name('sessions.flash-data');
Route::get('/sessions/custom-drivers', 'SessionsController@customDrivers')->name('sessions.custom-drivers');

//validation
Route::get('/validation/form-requests', 'ValidationController@formRequests')->name('validation.form-requests');
Route::post('/validation/form-requests-injected', 'ValidationController@formRequestsInjected')->name('validation.form-requests-injected');
Route::post('/validation/form-requests-manual', 'ValidationController@formRequestsManual')->name('validation.form-requests-manual');

//logging
Route::get('/logging/configuration', 'LoggingController@configuration')->name('logging.configuration');
Route::get('/logging/writing-to-specific-channels', 'LoggingController@writingToSpecificChannels')->name('logging.writing-to-specific-channels');
Route::get('/logging/writing-to-single-channel', 'LoggingController@writingToSingleChannel')->name('logging.writing-to-single-channel');
Route::get('/logging/creating-custom-channels', 'LoggingController@creatingCustomChannels')->name('logging.creating-custom-channels');

//frontend
Route::get('/frontend/blade-templating', 'FrontendController@bladeTemplating')->name('frontend.blade-templating');
Route::get('/frontend/localization', 'FrontendController@localization')->name('frontend.localization');
Route::get('/frontend/asset-compilation', 'FrontendController@assetCompilation')->name('frontend.asset-compilation');

//security
Route::get('/security/authentication', 'SecurityController@authentication')->name('security.authentication');//->middleware('auth');
Route::get('/security/authorization', 'SecurityController@authorization')->name('security.authorization');
Route::get('/security/encryption-hashing', 'SecurityController@encryptionHashing')->name('security.encryption-hashing');
Route::get('/security/csrf-protection', 'SecurityController@csrfProtection')->name('security.csrf-protection');
Route::get('/security/xss-protection', 'SecurityController@xssProtection')->name('security.xss-protection');

//artisan
Route::get('/artisan/generating-commands', 'ArtisanController@generatingCommands')->name('artisan.generating-commands');
Route::get('/artisan/command-io', 'ArtisanController@commandIo')->name('artisan.command-io');
Route::get('/artisan/regestering-commands', 'ArtisanController@regesteringCommands')->name('artisan.regestering-commands');
Route::get('/artisan/executing-commands', 'ArtisanController@executingCommands')->name('artisan.executing-commands');

//websockets
Route::get('/websockets/broadcasting-events', 'WebsocketsController@broadcastingEvents')->name('websockets.broadcasting-events');
Route::post('/websockets/send-message', 'WebsocketsController@sendMessage')->name('websockets.send-message');
Route::get('/websockets/receiving-events', 'WebsocketsController@receivingEvents')->name('websockets.receiving-events');
Route::get('/websockets/broadcasting-channels', 'WebsocketsController@broadcastingChannels')->name('websockets.broadcasting-channels');
Route::get('/websockets/presence-channels', 'WebsocketsController@presenceChannels')->name('websockets.presence-channels');
Route::get('/websockets/client-events', 'WebsocketsController@clientEvents')->name('websockets.client-events');

//caching
Route::get('/caching/drivers-configuration', 'CachingController@driversConfiguration')->name('caching.drivers-configuration');
Route::get('/caching/storing-items', 'CachingController@storingItems')->name('caching.storing-items');
Route::get('/caching/retrieving-items', 'CachingController@retrievingItems')->name('caching.retrieving-items');
Route::get('/caching/cache-tags', 'CachingController@cacheTags')->name('caching.cache-tags');
Route::get('/caching/creating-custom-drivers', 'CachingController@creatingCustomDrivers')->name('caching.creating-custom-drivers');

//collections
Route::get('/collections/creating-extending', 'CollectionsController@creatingExtending')->name('collections.creating-extending');
Route::get('/collections/collection-methods', 'CollectionsController@collectionMethods')->name('collections.collection-methods');
Route::get('/collections/higher-order-messages', 'CollectionsController@higherOrderMessages')->name('collections.higher-order-messages');

//events
Route::get('/events/registering-events-listeners', 'EventsController@registeringEventsListeners')->name('events.registering-events-listeners');
Route::get('/events/queued-listeners', 'EventsController@queuedListeners')->name('events.queued-listeners');
Route::get('/events/dispatching-events', 'EventsController@dispatchingEvents')->name('events.dispatching-events');
Route::get('/events/subscribing-to-events', 'EventsController@subscribingToEvents')->name('events.subscribing-to-events');

//download
//upload
//file storage
Route::get('/upload', 'UploadController@index')->name('upload');
Route::post('/upload/post', 'UploadController@post')->name('upload.post');
Route::get('/upload/post', function() {
    return response()->redirectToRoute('upload');
});
Route::get('/download', 'DownloadController@index')->name('download');
Route::get('/download/get', 'DownloadController@get')->name('download.get');
Route::get('/file/delete', 'FileController@delete')->name('file.delete');
Route::get('/file-storage/configuration-drivers', 'FileStorageController@configurationDrivers')->name('file-storage.configuration-drivers');
Route::get('/file-storage/storing', 'FileStorageController@storing')->name('file-storage.storing');
Route::get('/file-storage/retrieving', 'FileStorageController@retrieving')->name('file-storage.retrieving');
Route::get('/file-storage/custom-filesystems', 'FileStorageController@customFilesystems')->name('file-storage.custom-filesystems');

//helper-methods
Route::get('/helper-methods/arrays-objects', 'HelperMethodsController@arraysObjects')->name('helper-methods.arrays-objects');
Route::get('/helper-methods/paths', 'HelperMethodsController@paths')->name('helper-methods.paths');
Route::get('/helper-methods/strings', 'HelperMethodsController@strings')->name('helper-methods.strings');
Route::get('/helper-methods/urls', 'HelperMethodsController@urls')->name('helper-methods.urls');
Route::get('/helper-methods/misc', 'HelperMethodsController@misc')->name('helper-methods.misc');

//mail
Route::get('/mail/drivers-configuration', 'MailController@driversConfiguration')->name('mail.drivers-configuration');
Route::get('/mail/generating-mailables', 'MailController@generatingMailables')->name('mail.generating-mailables');
Route::get('/mail/writing', 'MailController@writing')->name('mail.writing');
Route::get('/mail/sending', 'MailController@sending')->name('mail.sending');
Route::post('/mail/sending', 'MailController@send')->name('mail.send');
Route::get('/mail/markdown', 'MailController@markdown')->name('mail.markdown');
Route::get('/mail/local-development', 'MailController@localDevelopment')->name('mail.local-development');

//notifications
Route::get('/notifications/creating', 'NotificationsController@creating')->name('notifications.creating');
Route::get('/notifications/sending', 'NotificationsController@sending')->name('notifications.sending');
Route::get('/notifications/mail', 'NotificationsController@mail')->name('notifications.mail');
Route::get('/notifications/markdown', 'NotificationsController@markdown')->name('notifications.markdown');
Route::get('/notifications/database', 'NotificationsController@database')->name('notifications.database');
Route::get('/notifications/broadcast', 'NotificationsController@broadcast')->name('notifications.broadcast');
Route::get('/notifications/sms', 'NotificationsController@sms')->name('notifications.sms');
Route::get('/notifications/slack', 'NotificationsController@slack')->name('notifications.slack');
Route::get('/notifications/custom-channels', 'NotificationsController@customChannels')->name('notifications.custom-channels');

//package-development
Route::get('/package-development/discovery', 'PackageDevelopmentController@discovery')->name('package-development.discovery');
Route::get('/package-development/service-providers', 'PackageDevelopmentController@serviceProviders')->name('package-development.service-providers');
Route::get('/package-development/resources', 'PackageDevelopmentController@resources')->name('package-development.resources');
Route::get('/package-development/commands', 'PackageDevelopmentController@commands')->name('package-development.commands');
Route::get('/package-development/assets', 'PackageDevelopmentController@assets')->name('package-development.assets');
Route::get('/package-development/publishing-file-groups', 'PackageDevelopmentController@publishing-file-groups')->name('package-development.publishing-file-groups');

//queues
Route::get('/queues/drivers-configurations', 'QueuesController@driversConfigurations')->name('queues.drivers-configurations');
Route::get('/queues/creating-dispatching-jobs', 'QueuesController@creatingDispatchingJobs')->name('queues.creating-dispatching-jobs');
Route::get('/queues/running-queue-workers', 'QueuesController@runningQueueWorkers')->name('queues.running-queue-workers');
Route::get('/queues/supervisor', 'QueuesController@supervisor')->name('queues.supervisor');
Route::get('/queues/handling-failed-jobs', 'QueuesController@handlingFailedJobs')->name('queues.handling-failed-jobs');
Route::get('/queue', 'QueueController@index')->name('queue')
        ->middleware('exception.catcher');
Route::get('/queue/consume', 'QueueController@consume')->name('queue.consume')
        ->middleware('exception.catcher');
Route::get('/queue/publish', 'QueueController@publish')->name('queue.publish')
        ->middleware('exception.catcher');

//task-scheduling
Route::get('/task-scheduling/scheduling-artisan-commands', 'TaskSchedulingController@schedulingArtisanCommands')->name('task-scheduling.scheduling-artisan-commands');
Route::get('/task-scheduling/scheduling-queue-jobs', 'TaskSchedulingController@schedulingQueueJobs')->name('task-scheduling.scheduling-queue-jobs');
Route::get('/task-scheduling/scheduling-shell-commands', 'TaskSchedulingController@schedulingShellCommands')->name('task-scheduling.scheduling-shell-commands');
Route::get('/task-scheduling/timezones', 'TaskSchedulingController@timezones')->name('task-scheduling.timezones');
Route::get('/task-scheduling/preventing-task-overlaps', 'TaskSchedulingController@preventingTaskOverlaps')->name('task-scheduling.preventing-task-overlaps');
Route::get('/task-scheduling/maintenance-mode', 'TaskSchedulingController@maintenance-mode')->name('task-scheduling.maintenance-mode');

//database
Route::get('/database/getting-started', 'DatabaseController@gettingStarted')->name('database.getting-started');
Route::get('/database/query-builder', 'DatabaseController@queryBuilder')->name('database.query-builder');
Route::get('/database/insert', 'DatabaseController@insert')->name('database.insert');
Route::get('/database/pagination', 'DatabaseController@pagination')->name('database.pagination');
Route::get('/database/migrations', 'DatabaseController@migrations')->name('database.migrations');
Route::get('/database/seeding', 'DatabaseController@seeding')->name('database.seeding');

//eloquent-orm
Route::get('/eloquent-orm/conventions', 'EloquentOrmController@conventions')->name('eloquent-orm.conventions');
Route::get('/eloquent-orm/relationships', 'EloquentOrmController@relationships')->name('eloquent-orm.relationships');
Route::get('/eloquent-orm/collections', 'EloquentOrmController@collections')->name('eloquent-orm.collections');
Route::get('/eloquent-orm/mutators-accessors', 'EloquentOrmController@mutatorsAccessors')->name('eloquent-orm.mutators-accessors');
Route::get('/eloquent-orm/api-resources', 'EloquentOrmController@apiResources')->name('eloquent-orm.api-resources');
Route::get('/eloquent-orm/serialization', 'EloquentOrmController@serialization')->name('eloquent-orm.serialization');
Route::get('/eloquent-orm/scopes', 'EloquentOrmController@scopes')->name('eloquent-orm.scopes');
Route::get('/eloquent-orm/getting-started', 'EloquentOrmController@gettingStarted')->name('eloquent-orm.getting-started');

//testing
Route::get('/testing/creating-running', 'TestingController@creatingRunning')->name('testing.creating-running');
Route::get('/testing/http-tests', 'TestingController@httpTests')->name('testing.http-tests');
Route::get('/testing/session-authentication', 'TestingController@sessionAuthentication')->name('testing.session-authentication');
Route::get('/testing/file-uploads', 'TestingController@fileUploads')->name('testing.file-uploads');
Route::get('/testing/available-assertions', 'TestingController@availableAssertions')->name('testing.available-assertions');
Route::get('/testing/browser-tests-dusk', 'TestingController@browserTestsDusk')->name('testing.browser-tests-dusk');
Route::get('/testing/data-factories', 'TestingController@dataFactories')->name('testing.data-factories');
Route::get('/testing/fakes-mocking', 'TestingController@fakesMocking')->name('testing.fakes-mocking');

//auth - laravel
Auth::routes();
Route::get('/home', 'HomeController@index');

//Preview Mailables
Route::get('/mailable', function(\Illuminate\Http\Request $request){

    if($request->filled('markdown')){
        return new App\Mail\UserCreated;
    }
    
    return new App\Mail\TestEmail2();
});