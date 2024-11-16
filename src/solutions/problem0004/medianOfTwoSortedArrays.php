<?php

namespace problem0004;

class Solution
{
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        // * 合并两个数组并排序
        $merged = array_merge($nums1, $nums2);
        sort($merged);

        $mid = intval(count($merged) / 2);
        if (count($merged) % 2 == 0) {
            // * 如果合并后的数组长度为偶数，则中位数为中间两个数的平均值
            return ($merged[$mid - 1] + $merged[$mid]) / 2;
        } else {
            // * 如果合并后的数组长度为奇数，则中位数为中间的数
            return $merged[$mid];
        }
    }
}
