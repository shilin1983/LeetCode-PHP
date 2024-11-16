<?php

namespace structures;

class ListNode
{
    public function __construct(public int $val, public ?ListNode $next = null) {}
}
