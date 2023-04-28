<?php

use App\Models\Status;

function status_active() {
    return Status::firstOrCreate(['title' => 'active'])->id;
    // dd($status);
}

function status_inactive() {
    return Status::firstOrCreate(['title' => 'inactive'])->id;
}

function status_pending() {
    return Status::firstOrCreate(['title' => 'pending'])->id;
}

function status_denied() {
    return Status::firstOrCreate(['title' => 'denied'])->id;
}

function status_approved() {
    return Status::firstOrCreate(['title' => 'approved'])->id;
}

function status_completed() {
    return Status::firstOrCreate(['title' => 'completed'])->id;
}

function status_cancelled() {
    return Status::firstOrCreate(['title' => 'cancelled'])->id;
}

function status_deleted() {
    return Status::firstOrCreate(['title' => 'deleted'])->id;
}

function status_archived() {
    return Status::firstOrCreate(['title' => 'archived'])->id;
}

function status_blocked() {
    return Status::firstOrCreate(['title' => 'blocked'])->id;
}
