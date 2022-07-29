<?php


function ridirect($page) {
    header('location: ' . URLROOT . '/' . $page);
}