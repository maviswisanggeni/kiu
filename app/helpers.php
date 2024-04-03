<?php

use App\Models\about;
use App\Models\client;
use App\Models\department;
use App\Models\hero;
use App\Models\history;
use App\Models\partner;
use App\Models\setting;
use App\Models\team;
use App\Models\VisionMission;
use App\Models\work;

function getSettingsValue($key) {
    $data = setting::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function getHeroValue($id) {
    $data = hero::where('id', $id)->first();
    return $data;
}

function getAboutValue($key) {
    $data = about::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function getWorks() {
    $data = work::all();
    return $data;
}

function getDepartments() {
    $data = department::all();
    return $data;
}

function getPartners() {
    $data = partner::all();
    return $data;
}

function getClients() {
    $data = client::all();
    return $data;
}

function getHistory() {
    $data = history::all();
    return $data;
}

function getVisionMission($key) {
    $data = VisionMission::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function getTeams() {
    $data = team::all();
    return $data;
}
