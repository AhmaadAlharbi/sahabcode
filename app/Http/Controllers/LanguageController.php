<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    /**
     * Available languages
     */
    protected $languages = ['en', 'ar'];

    /**
     * Default language
     */
    protected $defaultLanguage = 'en';

    /**
     * Switch the language and redirect back
     *
     * @param string $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang($lang)
    {
        // Validate if the language is supported
        if (!in_array($lang, $this->languages)) {
            $lang = $this->defaultLanguage;
        }

        // Store the language preference in session
        Session::put('locale', $lang);
        App::setLocale($lang);

        // Store language preference in cookie (60 minutes * 24 hours * 30 days)
        return redirect()->back()->withCookie(cookie('locale', $lang, 43200));
    }

    /**
     * Set language from URL prefix
     *
     * @param Request $request
     * @return void
     */
    public function setLocaleFromUrl(Request $request)
    {
        $segments = $request->segments();
        $lang = $segments[0] ?? $this->defaultLanguage;

        if (in_array($lang, $this->languages)) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
    }

    /**
     * Get current language
     *
     * @return string
     */
    public function getCurrentLanguage()
    {
        return App::getLocale();
    }

    /**
     * Check if current language is RTL
     *
     * @return bool
     */
    public function isRtl()
    {
        return in_array(App::getLocale(), ['ar']);
    }

    /**
     * Get URL in different language
     *
     * @param string $lang
     * @return string
     */
    public function getUrlInLanguage($lang)
    {
        if (!in_array($lang, $this->languages)) {
            return URL::current();
        }

        $segments = request()->segments();
        $currentLang = $segments[0];

        if (in_array($currentLang, $this->languages)) {
            $segments[0] = $lang;
        } else {
            array_unshift($segments, $lang);
        }

        return url(implode('/', $segments));
    }

    /**
     * Get all available languages
     *
     * @return array
     */
    public function getAvailableLanguages()
    {
        return $this->languages;
    }

    /**
     * Remove language prefix from URL
     *
     * @param string $url
     * @return string
     */
    public function removeLanguagePrefix($url)
    {
        $segments = explode('/', trim($url, '/'));
        if (in_array($segments[0], $this->languages)) {
            array_shift($segments);
        }
        return '/' . implode('/', $segments);
    }
}