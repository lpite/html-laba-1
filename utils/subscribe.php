<?php 
const SUBSCRIPTIONS_FILE = './subscriptions.ser';

function createSubscription($input)
{
    $subscriptions = allSubscriptions();
    $subscriptions[] = $input;
    file_put_contents(SUBSCRIPTIONS_FILE, json_encode($subscriptions));
}

function allSubscriptions()
{
    $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
    
    $subscriptions = json_decode($fileContent);
    return $subscriptions ? $subscriptions : [];
}