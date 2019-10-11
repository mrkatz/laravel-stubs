<?php


namespace Mrkatz\LaravelStubs\Providers;

use Illuminate\Foundation\Providers\ArtisanServiceProvider as BaseServiceProvider;
use Mrkatz\LaravelStubs\Console\ChannelMakeCommand;
use Mrkatz\LaravelStubs\Console\ConsoleMakeCommand;
use Mrkatz\LaravelStubs\Console\ControllerMakeCommand;
use Mrkatz\LaravelStubs\Console\EventMakeCommand;
use Mrkatz\LaravelStubs\Console\ExceptionMakeCommand;
use Mrkatz\LaravelStubs\Console\FactoryMakeCommand;
use Mrkatz\LaravelStubs\Console\JobMakeCommand;
use Mrkatz\LaravelStubs\Console\ListenerMakeCommand;
use Mrkatz\LaravelStubs\Console\MailMakeCommand;
use Mrkatz\LaravelStubs\Console\MiddlewareMakeCommand;
use Mrkatz\LaravelStubs\Console\ModelMakeCommand;
use Mrkatz\LaravelStubs\Console\NotificationMakeCommand;
use Mrkatz\LaravelStubs\Console\ObserverMakeCommand;
use Mrkatz\LaravelStubs\Console\PolicyMakeCommand;
use Mrkatz\LaravelStubs\Console\ProviderMakeCommand;
use Mrkatz\LaravelStubs\Console\RequestMakeCommand;
use Mrkatz\LaravelStubs\Console\ResourceMakeCommand;
use Mrkatz\LaravelStubs\Console\RuleMakeCommand;
use Mrkatz\LaravelStubs\Console\SeederMakeCommand;
use Mrkatz\LaravelStubs\Console\StubsPublishCommand;
use Mrkatz\LaravelStubs\Console\TestMakeCommand;

class ArtisanServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrapping the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands(StubsPublishCommand::class);
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerCacheClearCommand()
//    {
//        $this->app->singleton('command.cache.clear', function ($app) {
//            return new CacheClearCommand($app['cache'], $app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerCacheForgetCommand()
//    {
//        $this->app->singleton('command.cache.forget', function ($app) {
//            return new CacheForgetCommand($app['cache']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerCacheTableCommand()
//    {
//        $this->app->singleton('command.cache.table', function ($app) {
//            return new CacheTableCommand($app['files'], $app['composer']);
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerChannelMakeCommand()
    {
        $this->app->singleton('command.channel.make', function ($app) {
            return new ChannelMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerClearCompiledCommand()
//    {
//        $this->app->singleton('command.clear-compiled', function () {
//            return new ClearCompiledCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerClearResetsCommand()
//    {
//        $this->app->singleton('command.auth.resets.clear', function () {
//            return new ClearResetsCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerConfigCacheCommand()
//    {
//        $this->app->singleton('command.config.cache', function ($app) {
//            return new ConfigCacheCommand($app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerConfigClearCommand()
//    {
//        $this->app->singleton('command.config.clear', function ($app) {
//            return new ConfigClearCommand($app['files']);
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerConsoleMakeCommand()
    {
        $this->app->singleton('command.console.make', function ($app) {
            return new ConsoleMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerControllerMakeCommand()
    {
        $this->app->singleton('command.controller.make', function ($app) {
            return new ControllerMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerDbWipeCommand()
//    {
//        $this->app->singleton('command.db.wipe', function () {
//            return new WipeCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerEventGenerateCommand()
//    {
//        $this->app->singleton('command.event.generate', function () {
//            return new EventGenerateCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerEventMakeCommand()
    {
        $this->app->singleton('command.event.make', function ($app) {
            return new EventMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerExceptionMakeCommand()
    {
        $this->app->singleton('command.exception.make', function ($app) {
            return new ExceptionMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerFactoryMakeCommand()
    {
        $this->app->singleton('command.factory.make', function ($app) {
            return new FactoryMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerDownCommand()
//    {
//        $this->app->singleton('command.down', function () {
//            return new DownCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerEnvironmentCommand()
//    {
//        $this->app->singleton('command.environment', function () {
//            return new EnvironmentCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerEventCacheCommand()
//    {
//        $this->app->singleton('command.event.cache', function () {
//            return new EventCacheCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerEventClearCommand()
//    {
//        $this->app->singleton('command.event.clear', function ($app) {
//            return new EventClearCommand($app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerEventListCommand()
//    {
//        $this->app->singleton('command.event.list', function () {
//            return new EventListCommand();
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerJobMakeCommand()
    {
        $this->app->singleton('command.job.make', function ($app) {
            return new JobMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerKeyGenerateCommand()
//    {
//        $this->app->singleton('command.key.generate', function () {
//            return new KeyGenerateCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerListenerMakeCommand()
    {
        $this->app->singleton('command.listener.make', function ($app) {
            return new ListenerMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMailMakeCommand()
    {
        $this->app->singleton('command.mail.make', function ($app) {
            return new MailMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMiddlewareMakeCommand()
    {
        $this->app->singleton('command.middleware.make', function ($app) {
            return new MiddlewareMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerModelMakeCommand()
    {
        $this->app->singleton('command.model.make', function ($app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerNotificationMakeCommand()
    {
        $this->app->singleton('command.notification.make', function ($app) {
            return new NotificationMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerNotificationTableCommand()
//    {
//        $this->app->singleton('command.notification.table', function ($app) {
//            return new NotificationTableCommand($app['files'], $app['composer']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerOptimizeCommand()
//    {
//        $this->app->singleton('command.optimize', function () {
//            return new OptimizeCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerObserverMakeCommand()
    {
        $this->app->singleton('command.observer.make', function ($app) {
            return new ObserverMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerOptimizeClearCommand()
//    {
//        $this->app->singleton('command.optimize.clear', function () {
//            return new OptimizeClearCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerPackageDiscoverCommand()
//    {
//        $this->app->singleton('command.package.discover', function () {
//            return new PackageDiscoverCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerPolicyMakeCommand()
    {
        $this->app->singleton('command.policy.make', function ($app) {
            return new PolicyMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerPresetCommand()
//    {
//        $this->app->singleton('command.preset', function () {
//            return new PresetCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerProviderMakeCommand()
    {
        $this->app->singleton('command.provider.make', function ($app) {
            return new ProviderMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueFailedCommand()
//    {
//        $this->app->singleton('command.queue.failed', function () {
//            return new ListFailedQueueCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueForgetCommand()
//    {
//        $this->app->singleton('command.queue.forget', function () {
//            return new ForgetFailedQueueCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueFlushCommand()
//    {
//        $this->app->singleton('command.queue.flush', function () {
//            return new FlushFailedQueueCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueListenCommand()
//    {
//        $this->app->singleton('command.queue.listen', function ($app) {
//            return new QueueListenCommand($app['queue.listener']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueRestartCommand()
//    {
//        $this->app->singleton('command.queue.restart', function ($app) {
//            return new QueueRestartCommand($app['cache.store']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueRetryCommand()
//    {
//        $this->app->singleton('command.queue.retry', function () {
//            return new QueueRetryCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueWorkCommand()
//    {
//        $this->app->singleton('command.queue.work', function ($app) {
//            return new QueueWorkCommand($app['queue.worker'], $app['cache.store']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueFailedTableCommand()
//    {
//        $this->app->singleton('command.queue.failed-table', function ($app) {
//            return new FailedTableCommand($app['files'], $app['composer']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerQueueTableCommand()
//    {
//        $this->app->singleton('command.queue.table', function ($app) {
//            return new TableCommand($app['files'], $app['composer']);
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerRequestMakeCommand()
    {
        $this->app->singleton('command.request.make', function ($app) {
            return new RequestMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerResourceMakeCommand()
    {
        $this->app->singleton('command.resource.make', function ($app) {
            return new ResourceMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerRuleMakeCommand()
    {
        $this->app->singleton('command.rule.make', function ($app) {
            return new RuleMakeCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerSeederMakeCommand()
    {
        $this->app->singleton('command.seeder.make', function ($app) {
            return new SeederMakeCommand($app['files'], $app['composer']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerSessionTableCommand()
//    {
//        $this->app->singleton('command.session.table', function ($app) {
//            return new SessionTableCommand($app['files'], $app['composer']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerStorageLinkCommand()
//    {
//        $this->app->singleton('command.storage.link', function () {
//            return new StorageLinkCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerRouteCacheCommand()
//    {
//        $this->app->singleton('command.route.cache', function ($app) {
//            return new RouteCacheCommand($app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerRouteClearCommand()
//    {
//        $this->app->singleton('command.route.clear', function ($app) {
//            return new RouteClearCommand($app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerRouteListCommand()
//    {
//        $this->app->singleton('command.route.list', function ($app) {
//            return new RouteListCommand($app['router']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerSeedCommand()
//    {
//        $this->app->singleton('command.seed', function ($app) {
//            return new SeedCommand($app['db']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerScheduleFinishCommand()
//    {
//        $this->app->singleton(ScheduleFinishCommand::class);
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerScheduleRunCommand()
//    {
//        $this->app->singleton(ScheduleRunCommand::class);
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerServeCommand()
//    {
//        $this->app->singleton('command.serve', function () {
//            return new ServeCommand;
//        });
//    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerTestMakeCommand()
    {
        $this->app->singleton('command.test.make', function ($app) {
            return new TestMakeCommand($app['files']);
        });
    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerUpCommand()
//    {
//        $this->app->singleton('command.up', function () {
//            return new UpCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerVendorPublishCommand()
//    {
//        $this->app->singleton('command.vendor.publish', function ($app) {
//            return new VendorPublishCommand($app['files']);
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerViewCacheCommand()
//    {
//        $this->app->singleton('command.view.cache', function () {
//            return new ViewCacheCommand;
//        });
//    }

//    /**
//     * Register the command.
//     *
//     * @return void
//     */
//    protected function registerViewClearCommand()
//    {
//        $this->app->singleton('command.view.clear', function ($app) {
//            return new ViewClearCommand($app['files']);
//        });
//    }
}
