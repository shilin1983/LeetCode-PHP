<?php

use structures\ListNode;

// * 整数数组转链表
function int2List(array $nums): ?ListNode
{
    $head = null;

    if (!empty($nums)) {
        foreach (array_reverse($nums) as $num) {
            $node = new ListNode($num);
            $node->next = $head;
            $head = $node;
        }
    }

    return $head;
}
