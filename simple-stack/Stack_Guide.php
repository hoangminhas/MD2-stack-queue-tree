<?php

interface Stack_Guide
{
    public function push($item);

    public function pop();

    public function top();

    public function isEmpty();
}