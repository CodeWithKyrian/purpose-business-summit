<?php

namespace App\Http\Middleware;

use Closure;
use romanzipp\Seo\Structs\Link;
use romanzipp\Seo\Structs\Meta;
use romanzipp\Seo\Structs\Meta\OpenGraph;
use romanzipp\Seo\Structs\Meta\Twitter;
use Spatie\SchemaOrg\Schema;
use romanzipp\Seo\Structs\Script;
use Illuminate\Http\Request;

class AddSeoDefaults
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        seo()->charset();
        seo()->viewport();

        seo()->title('PBS');
        seo()->description("PBS is an annual event targeted at student enterpreneurs to solve the problem of handling a business as a student and rescue some students' businesses already in thier route
        to extinction.");

        seo()->csrfToken();

        seo()->addSchema(
            Schema::localBusiness()->name('PBS')->email('thepurposebusinesssummit@gmail.com')
        );

        seo()->addMany([

            Meta::make()->name('copyright')->content(config('app.author')),
            Meta::make()->name('author')->content(config('app.author')),

            Meta::make()->name('mobile-web-app-capable')->content('yes'),
            Meta::make()->name('theme-color')->content('#f03a17'),

            Link::make()->rel('icon')->href(asset('favicon.ico')),

            OpenGraph::make()->property('title')->content(config('app.name')),
            OpenGraph::make()->property('site_name')->content(config('app.name')),
            OpenGraph::make()->property('locale')->content('en_NG'),

            Twitter::make()->name('card')->content('summary_large_image'),
            Twitter::make()->name('site')->content('@_pbsofficial'),
            Twitter::make()->name('creator')->content('@CodeWithKyrian'),
            Twitter::make()->name('image')->content(asset('img/banner.png'), false)

        ]);
        
        // seo('body')->add(
        //     Script::make()->attr('src', '/js/app.js')
        // );

        return $next($request);
    }
}
