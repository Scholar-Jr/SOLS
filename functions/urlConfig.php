<?php
function siteUrl($siteUrl, $isSSL) {
    if ($isSSL) {
        return "https://" . $siteUrl . "/";
    } else {
        return "http://" . $siteUrl . "/";
    }
}