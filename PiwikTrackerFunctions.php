<?php

/**
 * Helper function to quickly generate the URL to track a page view.
 *
 * @param $idSite
 * @param string $documentTitle
 * @return string
 */
function Piwik_getUrlTrackPageView($idSite, $documentTitle = '')
{
    $tracker = new PiwikTracker($idSite);
    return $tracker->getUrlTrackPageView($documentTitle);
}

/**
 * Helper function to quickly generate the URL to track a goal.
 *
 * @param $idSite
 * @param $idGoal
 * @param float $revenue
 * @return string
 */
function Piwik_getUrlTrackGoal($idSite, $idGoal, $revenue = 0.0)
{
    $tracker = new PiwikTracker($idSite);
    return $tracker->getUrlTrackGoal($idGoal, $revenue);
}
