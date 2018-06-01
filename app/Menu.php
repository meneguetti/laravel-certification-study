<?php

namespace App;

class Menu
{

    public static function rawItems()
    {
        return [
            'PHP' => [
                ['name' => 'Version 7.1+'],
                ['name' => 'Composer'],
                ['name' => 'Autoloading Standards'],
            ],
            'Architecture' => [
                ['link' => route('architecture.request-lifecycle'), 'name' => 'Request Lifecycle'],
                ['empty' => true, 'link' => route('architecture.service-container'), 'name' => 'Service Container Binding and Resolution'],
                ['empty' => true, 'link' => route('architecture.service-providers'), 'name' => 'Service Providers'],
                ['empty' => true, 'link' => route('architecture.facades'), 'name' => 'Facades'],
                ['empty' => true, 'link' => route('architecture.http-verbs'), 'name' => 'HTTP Verbs'],
            ],
            'Routing' => [
                ['link' => route('request') . '/vitor?name=vitor2&redirect=true', 'name' => 'Redirects'],
                ['link' => route('request') . '/vitor', 'name' => 'Route Parameters'],
                ['empty' => true, 'link' => route('routing.named-routes'), 'name' => 'Named Routes'],
                ['empty' => true, 'link' => route('routing.groups'), 'name' => 'Route Groups'],
                ['empty' => true, 'link' => route('routing.model-binding'), 'name' => 'Route Model Binding'],
                ['empty' => true, 'link' => route('routing.rate-limiting'), 'name' => 'Rate Limiting'],
            ],
            'Middleware' => [
                ['link' => route('middleware.defining-registering'), 'name' => 'Defining / Registering Middleware'],
                ['empty' => true, 'link' => route('middleware.parameters'), 'name' => 'Middleware Parameters'],
            ],
            'Controllers' => [
                ['link' => route('controllers.defining'), 'name' => 'Defining Controllers'],
                ['link' => route('controllers.defining') . '#controllers-and-namespaces', 'name' => 'Controller Namespacing'],
                ['link' => route('controllers.defining') . '#single-action-controllers', 'name' => 'Single Action Controllers'],
                ['link' => route('controllers.defining') . '#controller-middleware', 'name' => 'Middleware'],
                ['link' => route('resource-controllers.index'), 'name' => 'Resource Controllers'],
                ['empty' => true, 'link' => route('controllers.dependency-injection'), 'name' => 'Dependency Injection'],
                ['empty' => true, 'link' => route('controllers.route-caching'), 'name' => 'Route Caching'],
            ],
            'Requests' => [
                ['link' => route('requests.psr-7'), 'name' => 'PSR-7 Requests'],
                ['empty' => true, 'link' => route('requests.path-method'), 'name' => 'Request Path and Method'],
                ['empty' => true, 'link' => route('requests.retrieving-input'), 'name' => 'Retrieving Input'],
                ['empty' => true, 'link' => route('requests.uploaded-files'), 'name' => 'Uploaded Files'],
                ['empty' => true, 'link' => route('requests.proxy-configuration'), 'name' => 'Proxy Configuration'],
            ],
            'Responses' => [
                ['empty' => true, 'link' => route('responses.attaching-headers'), 'name' => 'Attaching Headers'],
                ['link' => route('responses.cookies'), 'name' => 'Cookies'],
                ['empty' => true, 'link' => route('responses.encryption'), 'name' => 'Encryption'],
                ['empty' => true, 'link' => route('responses.redirects'), 'name' => 'Redirects'],
                ['empty' => true, 'link' => route('responses.flash-data'), 'name' => 'Flash Data'],
                ['link' => route('responses.response-types'), 'name' => 'Response Types'],
                ['empty' => true, 'link' => route('responses.response-macros'), 'name' => 'Response Macros'],
            ],
            'Views' => [
                ['empty' => true, 'link' => route('views.creating'), 'name' => 'Creating Views'],
                ['empty' => true, 'link' => route('views.passing-data'), 'name' => 'Passing Data to Views'],
                ['empty' => true, 'link' => route('views.view-composer'), 'name' => 'View Composer'],
            ],
            'URL Generation' => [
                ['empty' => true, 'link' => route('url-generation.named-routes'), 'name' => 'Named Routes'],
                ['empty' => true, 'link' => route('url-generation.controller-actions'), 'name' => 'Controller Actions'],
                ['empty' => true, 'link' => route('url-generation.default-values'), 'name' => 'Default Values'],
            ],
            'Sessions' => [
                ['link' => route('sessions.configuration'), 'name' => 'Configuration'],
                ['link' => route('sessions.storing-data'), 'name' => 'Storing Data'],
                ['empty' => true, 'link' => route('sessions.retrieving-data'), 'name' => 'Retrieving Data'],
                ['empty' => true, 'link' => route('sessions.deleting-data'), 'name' => 'Deleting Data'],
                ['empty' => true, 'link' => route('sessions.flash-data'), 'name' => 'Flash Data'],
                ['empty' => true, 'link' => route('sessions.custom-drivers'), 'name' => 'Custom Drivers'],
            ],
            'Validation' => [
                ['link' => route('validation.form-requests'), 'name' => 'Form Requests'],
                ['link' => route('validation.form-requests'), 'name' => 'Manually Creating Validators'],
                ['link' => route('validation.form-requests'), 'name' => 'Error Messages'],
                ['link' => route('validation.form-requests'), 'name' => 'Validation Rules'],
                ['name' => 'Custom Rules']
            ],
            'Logging' => [
                ['empty' => true, 'link' => route('logging.configuration'), 'name' => 'Configuration'],
                ['link' => route('logging.writing-to-specific-channels'), 'name' => 'Writing to Specific Channels'],
                ['empty' => true, 'link' => route('logging.creating-custom-channels'), 'name' => 'Creating Custom Channels'],
            ],
            'Frontend' => [
                ['link' => route('frontend.blade-templating'), 'name' => 'Blade Templating'],
                ['link' => route('frontend.localization'), 'name' => 'Localization'],
                ['link' => route('frontend.asset-compilation'), 'name' => 'Asset Compilation'],
            ],
            'Security' => [
                ['link' => route('security.authentication'), 'name' => 'Authentication'],
                ['empty' => true, 'link' => route('security.authorization'), 'name' => 'Authorization'],
                ['empty' => true, 'link' => route('security.encryption-hashing'), 'name' => 'Encryption / Hashing'],
                ['empty' => true, 'link' => route('security.csrf-protection'), 'name' => 'CSRF Protection'],
                ['empty' => true, 'link' => route('security.xss-protection'), 'name' => 'XSS Protection'],
            ],
            'Artisan Console' => [
                ['empty' => true, 'link' => route('artisan.generating-commands'), 'name' => 'Generating Commands'],
                ['empty' => true, 'link' => route('artisan.command-io'), 'name' => 'Command I/O'],
                ['empty' => true, 'link' => route('artisan.regestering-commands'), 'name' => 'Registering Commands'],
                ['link' => route('artisan.executing-commands'), 'name' => 'Executing Commands'],
            ],
            'Websockets' => [
                ['link' => route('websockets.broadcasting-events'), 'name' => 'Broadcasting Events (Chat Example)'],
                ['empty' => true, 'link' => route('websockets.receiving-events'), 'name' => 'Receiving Events'],
                ['empty' => true, 'link' => route('websockets.broadcasting-channels'), 'name' => 'Broadcasting Channels'],
                ['empty' => true, 'link' => route('websockets.presence-channels'), 'name' => 'Presence Channels'],
                ['empty' => true, 'link' => route('websockets.client-events'), 'name' => 'Client Events'],
            ],
            'Caching' => [
                ['link' => route('caching.drivers-configuration'), 'name' => 'Drivers / Configuration'],
                ['link' => route('caching.storing-items'), 'name' => 'Storing Items'],
                ['link' => route('caching.retrieving-items'), 'name' => 'Retrieving Items'],
                ['empty' => true, 'link' => route('caching.cache-tags'), 'name' => 'Cache Tags'],
                ['empty' => true, 'link' => route('caching.creating-custom-drivers'), 'name' => 'Creating Custom Drivers'],
            ],
            'Collections' => [
                ['empty' => true, 'link' => route('collections.creating-extending'), 'name' => 'Creating / Extending Collections'],
                ['link' => route('collections.collection-methods'), 'name' => 'Collection Methods'],
                ['empty' => true, 'link' => route('collections.higher-order-messages'), 'name' => 'Higher-order Messages'],
            ],
            'Events' => [
                ['link' => route('events.registering-events-listeners'), 'name' => 'Registering Events / Listeners'],
                ['empty' => true, 'link' => route('events.queued-listeners'), 'name' => 'Queued Listeners'],
                ['empty' => true, 'link' => route('events.dispatching-events'), 'name' => 'Dispatching Events'],
                ['empty' => true, 'link' => route('events.subscribing-to-events'), 'name' => 'Subscribing to Events'],
            ],
            'File Storage' => [
                ['empty' => true, 'link' => route('file-storage.configuration-drivers'), 'name' => 'Configuration / Drivers'],
                ['link' => route('upload'), 'name' => 'Storing'],
                ['link' => route('download'), 'name' => 'Retrieving Files'],
                ['empty' => true, 'link' => route('file-storage.custom-filesystems'), 'name' => 'Custom Filesystems'],
            ],
            'Helper Methods' => [
                ['empty' => true, 'link' => route('helper-methods.arrays-objects'), 'name' => 'Arrays / Objects'],
                ['empty' => true, 'link' => route('helper-methods.paths'), 'name' => 'Paths'],
                ['empty' => true, 'link' => route('helper-methods.strings'), 'name' => 'Strings'],
                ['empty' => true, 'link' => route('helper-methods.urls'), 'name' => 'URLs'],
                ['empty' => true, 'link' => route('helper-methods.misc'), 'name' => 'Misc'],
            ],
            'Mail' => [
                ['empty' => true, 'link' => route('mail.drivers-configuration'), 'name' => 'Drivers / Configuration'],
                ['link' => route('mail.generating-mailables'), 'name' => 'Generating Mailables'],
                ['link' => route('mail.writing'), 'name' => 'Writing Mail'],
                ['link' => route('mail.sending'), 'name' => 'Sending Mail'],
                ['link' => route('mail.markdown'), 'name' => 'Markdown'],
                ['empty' => true, 'link' => route('mail.local-development'), 'name' => 'Local Development'],
            ],
            'Notifications' => [
                ['empty' => true, 'link' => route('notifications.creating'), 'name' => 'Creating Notifications'],
                ['empty' => true, 'link' => route('notifications.sending'), 'name' => 'Sending Notifications'],
                ['empty' => true, 'link' => route('notifications.mail'), 'name' => 'Mail Notifications'],
                ['empty' => true, 'link' => route('notifications.markdown'), 'name' => 'Markdown'],
                ['empty' => true, 'link' => route('notifications.database'), 'name' => 'Database Notifications'],
                ['empty' => true, 'link' => route('notifications.broadcast'), 'name' => 'Broadcast Notifications'],
                ['empty' => true, 'link' => route('notifications.sms'), 'name' => 'SMS Notifications'],
                ['empty' => true, 'link' => route('notifications.slack'), 'name' => 'Slack Notifications'],
                ['empty' => true, 'link' => route('notifications.custom-channels'), 'name' => 'Custom Channels'],
            ],
            'Package Development' => [
                ['link' => route('package-development.discovery'), 'name' => 'Discovery'],
                ['link' => route('package-development.service-providers'), 'name' => 'Service Providers'],
                ['empty' => true, 'link' => route('package-development.resources'), 'name' => 'Resources'],
                ['empty' => true, 'link' => route('package-development.commands'), 'name' => 'Commands'],
                ['empty' => true, 'link' => route('package-development.assets'), 'name' => 'Assets'],
                ['empty' => true, 'link' => route('package-development.publishing-file-groups'), 'name' => 'Publishing File Groups'],
            ],
            'Queues' => [
                ['empty' => true, 'link' => route('queues.drivers-configurations'), 'name' => 'Drivers / Configurations'],
                ['empty' => true, 'link' => route('queues.creating-dispatching-jobs'), 'name' => 'Creating / Dispatching Jobs'],
                ['empty' => true, 'link' => route('queues.running-queue-workers'), 'name' => 'Running Queue Workers'],
                ['empty' => true, 'link' => route('queues.supervisor'), 'name' => 'Supervisor'],
                ['empty' => true, 'link' => route('queues.handling-failed-jobs'), 'name' => 'Handling Failed Jobs'],
            ],
            'Task Scheduling' => [
                ['empty' => true, 'link' => route('task-scheduling.scheduling-artisan-commands'), 'name' => 'Scheduling Artisan Commands'],
                ['empty' => true, 'link' => route('task-scheduling.scheduling-queue-jobs'), 'name' => 'Scheduling Queue Jobs'],
                ['empty' => true, 'link' => route('task-scheduling.scheduling-shell-commands'), 'name' => 'Scheduling Shell Commands'],
                ['empty' => true, 'link' => route('task-scheduling.timezones'), 'name' => 'Time Zones'],
                ['empty' => true, 'link' => route('task-scheduling.preventing-task-overlaps'), 'name' => 'Preventing Task Overlaps'],
                ['empty' => true, 'link' => route('task-scheduling.maintenance-mode'), 'name' => 'Maintenance Mode'],
            ],
            'Database' => [
                ['link' => route('database.getting-started'), 'name' => 'Getting Started'],
                ['link' => route('database.query-builder'), 'name' => 'Query Builder'],
                ['link' => route('database.pagination'), 'name' => 'Pagination'],
                ['empty' => true, 'link' => route('database.migrations'), 'name' => 'Migrations'],
                ['empty' => true, 'link' => route('database.seeding'), 'name' => 'Seeding'],
            ],
            'Eloquent ORM' => [
                ['link' => route('eloquent-orm.getting-started'), 'name' => 'Getting Started'],
                ['empty' => true, 'link' => route('eloquent-orm.conventions'), 'name' => 'Conventions'],
                ['empty' => true, 'link' => route('eloquent-orm.relationships'), 'name' => 'Relationships'],
                ['empty' => true, 'link' => route('eloquent-orm.collections'), 'name' => 'Eloquent Collections'],
                ['empty' => true, 'link' => route('eloquent-orm.mutators-accessors'), 'name' => 'Mutators / Accessors'],
                ['empty' => true, 'link' => route('eloquent-orm.api-resources'), 'name' => 'API Resources'],
                ['link' => route('eloquent-orm.serialization'), 'name' => 'Serialization'],
                ['empty' => true, 'link' => route('eloquent-orm.scopes'), 'name' => 'Scopes'],
            ],
            'Testing' => [
                ['link' => route('testing.creating-running'), 'name' => 'Creating / Running Tests'],
                ['empty' => true, 'link' => route('testing.http-tests'), 'name' => 'HTTP Tests'],
                ['empty' => true, 'link' => route('testing.session-authentication'), 'name' => 'Session / Authentication'],
                ['empty' => true, 'link' => route('testing.file-uploads'), 'name' => 'Testing File Uploads'],
                ['empty' => true, 'link' => route('testing.available-assertions'), 'name' => 'Available Assertions'],
                ['empty' => true, 'link' => route('testing.browser-tests-dusk'), 'name' => 'Browser Tests / Dusk'],
                ['link' => route('testing.data-factories'), 'name' => 'Data Factories'],
                ['empty' => true, 'link' => route('testing.fakes-mocking'), 'name' => 'Fakes / Mocking'],
            ]
        ];
    }
    public static function items()
    {
        
        $items = self::rawItems();
        
        ksort($items);
        
        return $items;
    }

}
