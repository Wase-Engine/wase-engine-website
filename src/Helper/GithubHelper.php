<?php

namespace App\Helper;

use Symfony\Component\HttpClient\HttpClient;

class GithubHelper
{
    public static function getReleases() {
        return HttpClient::create()->request('GET', 'https://api.github.com/repos/JelleVos1/wase-engine/releases')->toArray();
    }
}
