<?php

use App\Models\About;
use App\Models\Client;
use App\Models\Department;
use App\Models\Hero;
use App\Models\History;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Team;
use App\Models\VisionMission;
use App\Models\Work;

function getSettingsValue($key) {
    $data = Setting::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function getHeroValue($id) {
    $data = Hero::where('id', $id)->first();
    return $data;
}

function getAboutValue($key) {
    $data = About::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}

function getWorks() {
    $data = Work::all();
    return $data;
}

function getDepartments() {
    $data = Department::all();
    return $data;
}

function getPartners() {
    $data = Partner::all();
    return $data;
}

function getClients() {
    $data = Client::all();
    return $data;
}

function getHistory() {
    $data = History::all();
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
    $data = Team::all();
    return $data;
}
